<?php

namespace App\Http\Controllers\Admin;

use App\Models\Posts;
use App\Models\Categories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Posts::orderBy('created_at', 'desc')->paginate(7);
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::where('parent_id', "=", 0)->get();
        return view("admin.post.create", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:256',
            'description' => 'required',
            'slug' => 'required|max:256|unique:posts,slug',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',

            'content' => 'required',
        ], [
            'name.required' => "Trường name không được để trông",
            'name.max' => "Trường name tối đa 256 kí tự",
            'slug.required' => 'Slug không được bỏ trống',
            'slug.unique' => 'Slug đã tồn tại bỏ trống',
            'description.required' => "Mô tả không được để trông",
            'image.required' => 'Trường hình ảnh là bắt buộc.',
            'image.image' => 'Trường hình ảnh phải là một hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng jpg, png, jpeg.',
            'image.max' => 'Hình ảnh không được vượt quá 2048 KB (2MB).',
            'content.required' => 'Nội dung bài viết là bắt buộc.'
        ]);
        $post = new Posts();

        $post->title = $request->name ?? "";
        $post->slug = $request->slug ?? "";
        $post->category_id = $request->category_id ?? "";
        $post->description = $request->description ?? "";
        $post->content = $request->content ?? "";
        $post->users_id = Auth::user()->id ?? "";
        $post->is_active = $request->has('is_active') ? 1 : 0;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name_file = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            $allowedExtensions = ['jpg', 'jpeg', 'png'];

            if (in_array(strtolower($extension), $allowedExtensions)) {
                $image = Str::random(5) . "_" . $name_file;
                while (file_exists("image/post" . $image)) {
                    $image = Str::random(5) . "_" . $name_file;
                }
                $file->move('image/post', $image);
                $post->image = $image;
            }
        }
        $post->save();
        return redirect()->route('admin.post.index')->with('msg', "Thêm bài viết thành công");
    }

    /**
     * Display the specified resource.
     */
    public function activePost(Request $request)
    {
        if ($request->id) {
            $post = Posts::find($request->id);

            if ($request->isChecked == "true") {
                $post->is_active = 1;
                $post->save();
                return response()->json([
                    'success' => 200,
                    'message' => 'thay đổi tình trạng thành công'
                ]);
            } else  if ($request->isChecked == "false") {
                $post->is_active = 0;
                $post->save();
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Posts::find($id);
        $categories = Categories::where('parent_id', "=", 0)->get();


        return view('admin.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:256',
            'description' => 'required',
            'slug' => 'required|max:256',
            'image' => 'image|mimes:jpg,png,jpeg|max:2048',
            'content' => 'required',
        ], [
            'name.required' => "Trường name không được để trống",
            'slug.required' => "Trường đường dẫn không được để trống",
            'name.max' => "Trường name tối đa 256 kí tự",
            'description.required' => "Mô tả không được để trống",
            'image.image' => 'Trường hình ảnh phải là một hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng jpg, png, jpeg.',
            'image.max' => 'Hình ảnh không được vượt quá 2048 KB (2MB).',
            'content.required' => 'Nội dung bài viết là bắt buộc.'
        ]);

        $post = Posts::find($id);

        $post->title = $request->input('name', $post->title);
        $post->slug = $request->input('slug', $post->slug);
        $post->category_id = $request->input('category_id', $post->category_id);
        $post->description = $request->input('description', $post->description);
        $post->content = $request->input('content', $post->content);
        $post->users_id = Auth::user()->id ?? "";
        $post->is_active = $request->has('is_active') ? 1 : 0;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name_file = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            $allowedExtensions = ['jpg', 'jpeg', 'png'];

            if (in_array(strtolower($extension), $allowedExtensions)) {
                $image = Str::random(5) . "_" . $name_file;
                while (file_exists("image/post" . $image)) {
                    $image = Str::random(5) . "_" . $name_file;
                }
                $file->move('image/post', $image);
                $post->image = $image;
            }
        }
   
        $post->save();

        return redirect()->route('admin.post.index')->with('msg', "Cập nhật bài viết thành công");
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if ($id) {
            $delete = Posts::find($id);
            if (!$delete) {
                return redirect()->route("admin.post.index")->with('errors', "Không tìm thấy bài viết.");
            }
            if ($delete->image) {
                $imagePath = public_path('image/post/' . $delete->image);

                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $delete->delete();
        }

        return redirect()->route("admin.post.index")->with('msg', "Xóa bài viết thành công");
    }
}
