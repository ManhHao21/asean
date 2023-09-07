<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CustomerReview;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = CustomerReview::orderBy('created_at', 'desc')->get();
        return view('admin.review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.review.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:256',
            'position' => 'required',
            'feedback' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ], [
            'name.required' => "Trường họ và tên không được để trông",
            'name.max' => "Trường họ và tên tối đa 256 kí tự",
            'position.required' => "Chức không được để trông",
            'image.required' => 'Trường hình ảnh là bắt buộc.',
            'image.image' => 'Trường hình ảnh phải là một hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng jpg, png, jpeg.',
            'image.max' => 'Hình ảnh không được vượt quá 2048 KB (2MB).',
            'feedback.required' => 'Nội dung review là bắt buộc.'
        ]);
        $reviews = new CustomerReview();
        $reviews->name = $request->name;
        $reviews->position = $request->position;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name_file = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            $allowedExtensions = ['jpg', 'jpeg', 'png'];

            if (in_array(strtolower($extension), $allowedExtensions)) {
                $image = Str::random(5) . "_" . $name_file;
                while (file_exists("image/review" . $image)) {
                    $image = Str::random(5) . "_" . $name_file;
                }
                $file->move('image/review', $image);
                $reviews->image = $image;
            }
        }
        $reviews->feedback = $request->feedback;
        $reviews->is_active = $request->has('is_active') ? 1 : 0;

        $reviews->save();
        return redirect()->route('admin.review.index')->with('msg', 'thêm review thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editReview =  CustomerReview::find($id);
        if ($editReview) {
            return view('admin.review.edit', compact('editReview'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:256',
            'position' => 'required',
            'feedback' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg|max:2048',
        ], [
            'name.required' => "Trường họ và tên không được để trông",
            'name.max' => "Trường họ và tên tối đa 256 kí tự",
            'position.required' => "Chức không được để trông",
            'image.image' => 'Trường hình ảnh phải là một hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng jpg, png, jpeg.',
            'image.max' => 'Hình ảnh không được vượt quá 2048 KB (2MB).',
            'feedback.required' => 'Nội dung review là bắt buộc.'
        ]);
        $editReview =  CustomerReview::find($id);
        if ($editReview) {
            $editReview->name = $request->name;
            $editReview->position = $request->position;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $name_file = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();

                $allowedExtensions = ['jpg', 'jpeg', 'png'];

                if (in_array(strtolower($extension), $allowedExtensions)) {
                    $image = Str::random(5) . "_" . $name_file;
                    while (file_exists("image/review" . $image)) {
                        $image = Str::random(5) . "_" . $name_file;
                    }
                    $file->move('image/review', $image);
                    $editReview->image = $image;
                }
            }
            $editReview->feedback = $request->feedback;
            $editReview->is_active = $request->has('is_active') ? 1 : 0;

            $editReview->save();
            return redirect()->route('admin.review.index')->with('msg', 'thêm review thành công');
        } else {
            abort(403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteReview = CustomerReview::find($id);
        if (!$deleteReview) {
            return redirect()->route("admin.review.index")->with('errors', "Không tìm thấy bài viết.");
        }
        if ($deleteReview->image) {
            $imagePath = public_path('image/review/' . $deleteReview->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $deleteReview->delete();

        return redirect()->route("admin.review.index")->with('msg', "Xóa slider thành công");
    }

    public function activeReview(Request $request)
    {
        if ($request->id) {
            $review = CustomerReview::find($request->id);

            if ($request->isChecked == "true") {
                $review->is_active = 1;
                $review->save();
                return response()->json([
                    'success' => 200,
                    'message' => 'thay đổi tình trạng thành công'
                ]);
            } else  if ($request->isChecked == "false") {
                $review->is_active = 0;
                $review->save();
                return response()->json([
                    'success' => 200,
                    'message' => 'thay đổi tình trạng thành công'
                ]);
            }
        } else {
            return response()->json([
                'success' => 400,
                'message' => "không tồn tại id"
            ]);
        }
    }
}
