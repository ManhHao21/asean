<?php

namespace App\Http\Controllers\Admin;

use App\Models\Option;
use Illuminate\View\View;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\CustomerHighlight;
use App\Models\CustomerReview;
use App\Models\Slider;
use Illuminate\Support\Facades\Validator;

class OptionController extends Controller
{
    //banner
    public function banner()
    {
        $countNumber = Slider::where('is_active', '=', '1')->count();
        $sliderBannerOld = Option::where('key', 'home-banner')->first();
        if($sliderBannerOld) {

            $number = json_decode($sliderBannerOld->value)->slider;
        }else {
            $number = "";
        }
        return view('admin.option.banner', compact('countNumber', 'number', 'sliderBannerOld'));
    }
    public function PostBanner(Request $request)
    {
        if ($request->input('numberBanner')) {
            $data = [
                'slider' => $request->input('numberBanner')
            ];
            $sliderBannerOld = Option::where('key', 'home-banner')->first();
            if ($sliderBannerOld) {
                $sliderBannerOld->value = json_encode($data);
                $sliderBannerOld->save();
                return redirect()->back()->with('msg', 'Cập nhật thành công');
            } else {
                $sliderBanner = new Option();
                $sliderBanner->key = 'home-banner';
                $sliderBanner->name = 'home-banner';
                $sliderBanner->value = json_encode($data);
                $sliderBanner->save();
                return redirect()->back()->with('msg', 'Tạo mới thành công');
            }
        }
    }
    // review
    public function custommer()
    {
        $countNumber = CustomerReview::where('is_active', '=', '1')->count();
        $sliderBannerOld = Option::where('key', 'home-custommer')->first();
        if($sliderBannerOld){
            $number = json_decode($sliderBannerOld->value)->review;
        }else {
            $number = "";
        }
        return view('admin.option.custommer', compact('countNumber', 'number', 'sliderBannerOld'));
    }
    public function PostCustommer(Request $request)
    {
        if ($request->input('numberBanner')) {
            $data = [
                'review' => $request->input('numberBanner')
            ];
            $custommerReview = Option::where('key', 'home-custommer')->first();
            if ($custommerReview) {
                $custommerReview->value = json_encode($data);
                $custommerReview->save();
                return redirect()->back()->with('msg', 'Cập nhật thành công');
            } else {
                $custommerReviewNew = new Option();
                $custommerReviewNew->key = 'home-custommer';
                $custommerReviewNew->name = 'home review';
                $custommerReviewNew->value = json_encode($data);
                $custommerReviewNew->save();
                return redirect()->back()->with('msg', 'Tạo mới thành công');
            }
        }
    }
    //custom hightlight
    public function custommerHightlight()
    {
        $countNumber = CustomerHighlight::where('is_active', '=', '1')->count();
        $sliderBannerOld = Option::where('key', 'home-highlight')->first();
        if ($sliderBannerOld) {
            $number = json_decode($sliderBannerOld->value)->highlight;
        } else {
            $number = "";
        }
        return view('admin.option.custommerHightlight', compact('countNumber', 'number', 'sliderBannerOld'));
    }
    public function PostcustommerHightlight(Request $request)
    {
        if ($request->input('numberBanner')) {
            $data = [
                'highlight' => $request->input('numberBanner')
            ];
            $custommerReview = Option::where('key', 'home-highlight')->first();
            if ($custommerReview) {
                $custommerReview->value = json_encode($data);
                $custommerReview->save();
                return redirect()->back()->with('msg', 'Cập nhật thành công');
            } else {
                $custommerReviewNew = new Option();
                $custommerReviewNew->key = 'home-highlight';
                $custommerReviewNew->name = 'Custom HightLight';
                $custommerReviewNew->value = json_encode($data);
                $custommerReviewNew->save();
                return redirect()->back()->with('msg', 'Tạo mới thành công');
            }
        }
    }
    // bài viết
    public function post()
    {
        $categories = Categories::where('parent_id', "=", 0)->get();
        $optionPost = Option::where('key', 'post')->first();
        if ($optionPost) {
            $keyValue = json_decode($optionPost->value, true);
            return view("admin.option.create", compact('categories', 'keyValue', 'optionPost'));
        }
        return view("admin.option.create", compact('categories'));
    }
    public function getOption(Request $request)
    {
        $request->validate(
            [
                'category_ids' => 'required|array|min:2|max:2',
            ],
            [
                'category_ids.required' => "Vui lòng chọn danh mục",
                'category_ids.array' => "Dữ liệu danh mục không hợp lệ",
                'category_ids.min' => "Vui lòng chọn đúng 2 danh mục",
                'category_ids.max' => "Vui lòng chọn đúng 2 danh mục",
            ]
        );
        $data = [
            "cate" => $request->input('category_ids'),
        ];
        $optionPost = Option::where('key', 'post')->first();
        if ($optionPost) {
            $optionPost->value = json_encode($data);
            $optionPost->save();
            return redirect()->back()->with('msg', 'Cập nhật thành công');
        } else {
            $option = new Option();
            $option->key = "post";
            $option->value = json_encode($data);
            $option->save();
            return redirect()->back()->with('msg', 'Tạo mới thành công');
        }
    }

    public function configuration()
    {

        $optionPower  = Option::where('key', 'home-power')->first();
        if ($optionPower) {
            $powers = json_decode($optionPower->value, true);
            return view("admin.option.power", compact('powers', 'optionPower'));
        } else {
            return view("admin.option.power");
        }
    }

    public function postConfiguration(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'des' => 'required',
            'image.*' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'name.*' => 'required|max:256',
            'content.*' => 'required',
            'image-power.*' => 'image|mimes:jpg,png,jpeg|max:2048',
        ], [
            'title.required' => "Trường name không được để trống",
            'name.*.required' => 'Tên dịch vụ không được bỏ trống',
            'name.*.max' => 'Tên dịch vụ tối đa :max kí tự',
            'content.*.required' => 'Nội dung dịch vụ không được bỏ trống',
            'des.required' => "Mô tả không được để trống",
            'image.*.image' => 'Trường hình ảnh phải là một hình ảnh.',
            'image.*.mimes' => 'Hình ảnh phải có định dạng jpg, png, jpeg.',
            'image.*.max' => 'Hình ảnh không được vượt quá 2048 KB (2MB).',
            'image-power.*.image' => 'Trường hình ảnh phải là một hình ảnh.',
            'image-power.*.mimes' => 'Hình ảnh phải có định dạng jpg, png, jpeg.',
            'image-power.*.max' => 'Hình ảnh không được vượt quá 2048 KB (2MB).',
        ]);

        $data = [
            'title' => $request->title,
            'des' => $request->des,
        ];
        $images = [];

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $images[] = $this->uploadImageAndGetPath($image);
            }
        }
        $data['images'] = $images;
        $power = [];
        $names = $request->input('name');
        $content = $request->input('content');
        $imagePower = $request->file('image-power');

        foreach ($names as $index => $name) {
            $imagePowerPath = null;
            if ($imagePower && isset($imagePower[$index])) {
                $imagePowerPath = $this->uploadImageAndGetPath($imagePower[$index]);
            }

            $power[] = [
                'name' => $name,
                'content' => $content[$index],
                'image-power' => $imagePowerPath,
            ];
        }
        $configData = [
            'data' => $data,
            'power' => $power,
        ];

        $optionPower = Option::where('key', 'home-power')->first();
        if ($optionPower) {
            $oldConfigData = json_decode($optionPower->value, true);
            $imageChanged = $request->hasFile('image');

            // Kiểm tra sự thay đổi trong data
            if ($oldConfigData['data']['title'] !== $data['title'] || $oldConfigData['data']['des'] !== $data['des']) {
                $oldConfigData['data']['title'] = $data['title'];
                $oldConfigData['data']['des'] = $data['des'];
            }

            if ($imageChanged) {
                $oldConfigData['data']['images'] = $data['images'];
            }

            foreach ($power as $index => $powerItem) {
                $imagePowerChanged = isset($imagePower[$index]);
                if ($imagePowerChanged) {
                    $oldConfigData['power'][$index]['image-power'] = $powerItem['image-power'];
                    $oldConfigData['power'][$index]['name'] = $powerItem['name'];
                    $oldConfigData['power'][$index]['content'] = $powerItem['content'];
                }
            }

            $optionPower->value = json_encode($oldConfigData);
            $optionPower->save();

            return redirect()->back()->with('msg', 'Cập nhật thành công');
        } else {
            $configPower = new Option();
            $configPower->key = 'home-power';
            $configPower->value = json_encode($configData);
            $configPower->save();
            return redirect()->back()->with('msg', 'Tạo mới thành công');
        }
    }

    private function uploadImageAndGetPath($image)
    {
        if ($image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = 'image/power/' . $imageName;
            $image->move(public_path('image/power'), $imageName);
            return $imagePath;
        }
        return null;
    }

    public function deletePower($key)
    {
        $optionPower = Option::where('key', $key)->first();
        if (!$optionPower) {
            return back()->with('errors', 'Không tìm thấy bản ghi.');
        }
        if ($optionPower->key == 'home-power') {
            $power = json_decode($optionPower->value, true);
            // dd($power);
            foreach ($power['data']['images'] as $key => $imagePath) {
                $fullImagePath = public_path($imagePath);
                if (file_exists($fullImagePath)) {
                    unlink($fullImagePath);
                }
            }
            foreach ($power['power'] as $key => $imagePower) {
                if ($imagePower['image-power']) {
                    $fullImagePowerPath = public_path($imagePower['image-power']);
                    if (file_exists($fullImagePowerPath)) {
                        unlink($fullImagePowerPath);
                    }
                }
            }
            $optionPower->delete();
            return back()->with('msg', 'Bản ghi đã được xóa thành công.');
        } else {
            $optionPower->delete();
            return back()->with('msg', 'Bản ghi đã được xóa thành công.');
        }
    }
}
