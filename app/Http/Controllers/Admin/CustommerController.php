<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CustomerHighlight;
use App\Http\Controllers\Controller;

class CustommerController extends Controller
{
    public function index()
    {
        $custommers = CustomerHighlight::orderBy('created_at', 'desc')->get();
        return view('admin.custommer.index', compact('custommers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.custommer.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ], [
            'link.required' => "Trường họ và tên không được để trông",
            'image.required' => 'Trường hình ảnh là bắt buộc.',
            'image.image' => 'Trường hình ảnh phải là một hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng jpg, png, jpeg.',
            'image.max' => 'Hình ảnh không được vượt quá 2048 KB (2MB).',
        ]);
        $custommer = new CustomerHighlight();
        $custommer->link = $request->link;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name_file = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            $allowedExtensions = ['jpg', 'jpeg', 'png'];

            if (in_array(strtolower($extension), $allowedExtensions)) {
                $image = Str::random(5) . "_" . $name_file;
                while (file_exists("image/custommer" . $image)) {
                    $image = Str::random(5) . "_" . $name_file;
                }
                $file->move('image/custommer', $image);
                $custommer->image = $image;
                $custommer->is_active = $request->has('is_active') ? 1 : 0;
            }
        }
        $custommer->save();
        return redirect()->route('admin.custommer.index')->with('msg', 'thêm khách hàng thành công');
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
        $editcustommer =  CustomerHighlight::find($id);
        if ($editcustommer) {
            return view('admin.custommer.edit', compact('editcustommer'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'link' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ], [
            'link.required' => "Trường họ và tên không được để trông",
            'image.required' => 'Trường hình ảnh là bắt buộc.',
            'image.image' => 'Trường hình ảnh phải là một hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng jpg, png, jpeg.',
            'image.max' => 'Hình ảnh không được vượt quá 2048 KB (2MB).',
        ]);
        $custommer = CustomerHighlight::find($id);
        if ($custommer) {
            $custommer->link = $request->link;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $name_file = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();

                $allowedExtensions = ['jpg', 'jpeg', 'png'];

                if (in_array(strtolower($extension), $allowedExtensions)) {
                    $image = Str::random(5) . "_" . $name_file;
                    while (file_exists("image/custommer" . $image)) {
                        $image = Str::random(5) . "_" . $name_file;
                    }
                    $file->move('image/custommer', $image);
                    $custommer->image = $image;
                }
            }
            $custommer->is_active = $request->has('is_active') ? 1 : 0;
            $custommer->save();
            return redirect()->route('admin.custommer.index')->with('msg', 'thêm khách hàng thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = CustomerHighlight::find($id);
        if (!$delete) {
            return redirect()->route("admin.custommer.index")->with('errors', "Không tìm thấy bài viết.");
        }
        if ($delete->image) {
            $imagePath = public_path('image/custommer/' . $delete->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $delete->delete();

        return redirect()->route("admin.custommer.index")->with('msg', "Xóa thành công");
    }

    public function activeCustommer(Request $request)
    {
        if ($request->id) {
            $review = CustomerHighlight::find($request->id);

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
