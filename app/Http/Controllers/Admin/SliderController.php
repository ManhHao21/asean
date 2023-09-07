<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\cr;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::orderBy('created_at', 'desc')->paginate(7);
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sliders = Slider::all();

        return view("admin.slider.create", compact('sliders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:256',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ], [
            'name.required' => "Trường name không được để trông",
            'name.max' => "Trường name tối đa 256 kí tự",
            'description.required' => "Mô tả không được để trông",
            'image.required' => 'Trường hình ảnh là bắt buộc.',
            'image.image' => 'Trường hình ảnh phải là một hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng jpg, png, jpeg.',
            'image.max' => 'Hình ảnh không được vượt quá 2048 KB (2MB).',
        ]);
        $slider = new Slider();

        $slider->name = $request->name;
        $slider->description = $request->description;
        $slider->is_active = $request->has('is_active') ? 1 : 0;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name_file = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            $allowedExtensions = ['jpg', 'jpeg', 'png'];

            if (in_array(strtolower($extension), $allowedExtensions)) {
                $image = Str::random(5) . "_" . $name_file;
                while (file_exists("image/slider/" . $image)) {
                    $image = Str::random(5) . "_" . $name_file;
                }
                $file->move('image/slider/', $image);
                $slider->image = $image;
            }
        }
        $slider->save();


        return redirect()->route('admin.slider.index')->with('msg', "Thêm slide thành công");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:256',
            'description' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg|max:2048',
        ], [
            'name.required' => "Trường name không được để trống",
            'name.max' => "Trường name tối đa 256 kí tự",
            'description.required' => "Mô tả không được để trống",
            'image.image' => 'Trường hình ảnh phải là một hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng jpg, png, jpeg.',
            'image.max' => 'Hình ảnh không được vượt quá 2048 KB (2MB).',
        ]);

        $slider = Slider::find($id);
        if (!$slider) {
            return back()->withErrors('Slider not found.');
        }

        $slider->name = $request->name;
        $slider->description = $request->description;
        $slider->is_active = $request->has('is_active') ? 1 : 0;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name_file = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            $allowedExtensions = ['jpg', 'jpeg', 'png'];

            if (in_array(strtolower($extension), $allowedExtensions)) {
                $image = Str::random(5) . "_" . $name_file;
                while (file_exists("image/slider/" . $image)) {
                    $image = Str::random(5) . "_" . $name_file;
                }
                $file->move('image/slider/', $image);
                $slider->image = $image;
            } else {
                // Handle invalid image format
                return back()->withErrors(['image' => 'Hình ảnh phải có định dạng jpg, png, jpeg.']);
            }
        }

        $slider->save();

        return redirect()->route('admin.slider.index')->with('msg', "Cập nhật slide thành công");
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Slider::find($id);
        if (!$delete) {
            return redirect()->route("admin.slider.index")->with('errors', "Không tìm thấy bài viết.");
        }
        if ($delete->image) {
            $imagePath = public_path('image/slider/' . $delete->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $delete->delete();

        return redirect()->route("admin.slider.index")->with('msg', "Xóa slider thành công");
    }

    public function activeSlider(Request $request)
    {
        if ($request->id) {
            $slider = Slider::find($request->id);
            if ($request->isChecked == "true") {
                $slider->is_active = 1;
                $slider->save();
                return response()->json([
                    'success' => 200,
                    'message' => 'thay đổi tình trạng thành công'
                ]);
            } else  if ($request->isChecked == "false") {
                $slider->is_active = 0;
                $slider->save();
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
