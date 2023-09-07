<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Slider;
use App\Models\Videos;
use App\Models\Comment;
use App\Models\Question;
use App\Models\Standard;
use App\Models\Categories;
use App\Models\CustomerHighlight;
use App\Models\CustomerReview;
use App\Models\Custommer_reviews;
use App\Models\Option;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;


class HomeController extends Controller
{
    public function index()
    {
        // Lấy thông tin về bài viết
        $postOption = Option::where('key', 'post')->first();

        $postCategories = [];

        if ($postOption) {
            $postOptionValue = json_decode($postOption->value, true);
            $postCategoryIds = $postOptionValue['cate'];
            $postCategories = Categories::whereIn('id', $postCategoryIds)->get();
        }

        // // Lấy thông tin về sliders
        // $sliders = Option::where('key', 'home-banner')->first();
        // $decodedValue = json_decode($sliders->value);
        // if ($decodedValue) {
        //     $sliderValue = $decodedValue->slider; // Lấy giá trị "3" ra
        // }
        // $viewSLider = Slider::where('status', '=', '1')->paginate($sliderValue);
        // if ($viewSLider) {
        //     $slidersItem = $viewSLider->items();
        // }
        // // Lấy thông tin đánh giá từ khách hàng
        // $custommer = Option::where('key', 'home-custommer')->first();
        // $decodedValue = json_decode($custommer->value);
        // if ($decodedValue) {
        //     $custommerValue = $decodedValue->review;
        // }
        // $viewCustommer = CustomerReview::where('is_active', '=', '1')->paginate($custommerValue);

        // if ($viewCustommer) {
        //     $custommerItem = $viewCustommer->items();
        // }
        // // Lấy thông tin nổi bật từ khách hàng
        // $custommer = Option::where('key', 'home-highlight')->first();
        // $decodedValue = json_decode($custommer->value);
        // if ($decodedValue) {
        //     $custommerValue = $decodedValue->highlight;
        // }
        // $viewCustommerHightlight = CustomerHighlight::where('is_active', '=', '1')->paginate($custommerValue);
        // if ($viewCustommerHightlight) {
        //     $custommerHightlightItem = $viewCustommerHightlight->items();
        // }

        $slidersItem = $this->getDataByKey('home-banner', Slider::class, 'slider');

        // Lấy thông tin đánh giá từ khách hàng
        $custommerItem = $this->getDataByKey('home-custommer', CustomerReview::class, 'review');

        // Lấy thông tin nổi bật từ khách hàng
        $custommerHightlightItem = $this->getDataByKey('home-highlight', CustomerHighlight::class, 'highlight');
        // Lấy thông tin về dịch vụ
        $services = Services::orderBy("created_at", 'desc')->first();
        $listServices = [];

        if ($services) {
            $listServices = json_decode($services->listservices, true);
        } else {
            $services = null; // Không cần gán chuỗi rỗng cho biến $services nữa
        }

        // Lấy thông tin về sứ mệnh của trang chủ
        $homePowerOption = Option::where('key', 'home-power')->first();

        if ($homePowerOption) {
            $optionHomePower = json_decode($homePowerOption->value, true);
        } else {
            $optionHomePower = null;
        }
        // Trả về view với các dữ liệu đã lấy
        return view('fontend.layout.fontend', compact(
            'slidersItem',
            'postCategories',
            'custommerItem',
            'custommerHightlightItem',
            'services',
            'listServices',
            'optionHomePower'
        ));
    }
    private function getDataByKey($key, $model, $valueField)
    {
        $option = Option::where('key', $key)->first();
        $decodedValue = json_decode($option->value);

        if ($decodedValue) {
            $value = $decodedValue->$valueField;
            $data = $model::where('is_active', '1')->paginate($value);

            if ($data) {
                return $data->items();
            }
        }

        return [];
    }


    public function show($slug)
    {
        $blogger = Posts::where('slug', $slug)->firstOrFail();
    }

    public function sendMail(Request $request)
    {
        if ($request->ajax()) {
            if ($request->email) {
                $subject = "Xin chào" . $request->email . " chúng tôi đã nhận được thông tin đăng kí tư vấn từ bạn. Cảm ơn bạn đã tin tưởng ở chúng tôi!";
                $adminSubject = "Thông báo đăng ký mới: " . $request->email;
                $email = $request->email;
                // Gửi email cho người dùng
                Mail::send('fontend.mail.viewUser', ['email' => $request->email], function ($message) use ($email, $subject) {
                    $message->to($email)
                        ->subject($subject);
                });
                // Gửi email cho quản trị
                Mail::send('fontend.mail.viewAdmin', ['email' => $request->email], function ($message) use ($email, $adminSubject) {
                    $message->to('phanhao100301@gmail.com')
                        ->subject($adminSubject);
                });
                return response()->json([
                    'sucess' => 200
                ]);
            }
        }
    }
}
