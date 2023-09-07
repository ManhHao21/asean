<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::where('parent_id', "=", 0)->get();
        $childCategories = Categories::where('parent_id', "!=", 0)->get();
        return view("admin.categories.index", compact("categories", 'childCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();

        return view("admin.categories.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:Categories,slug',
                'parent_id' => 'nullable',
            ],
            [
                'required' => 'Trường :attribute không được để trống.',
                'string' => 'Trường :attribute phải là một chuỗi.',
                'unique' => 'Trường :attribute đã tồn tại.',

                'max' => [
                    'string' => 'Trường :attribute không được vượt quá :max ký tự.',
                ],
                'unique' => 'Trường :attribute đã tồn tại trong hệ thống.',
            ],
            [
                'name' => "Tên",
                'slug' => "đường dẫn",
                'parent_id' => 'parent_id',
            ]
        );
        $category = new Categories();
        $category->name = $request->name ?? "";
        $category->slug = $request->slug ?? "";
        $category->parent_id = $request->parent_id ?? "";
        $category->save();
        return redirect()->route('admin.categories.index')->with('msg', "thêm danh mục thành công");
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
        $categories = Categories::all();
        $category = Categories::find($id);
        return view("admin.categories.edit", compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255|',
                'parent_id' => 'nullable',
            ],
            [
                'required' => 'Trường :attribute không được để trống.',
                'string' => 'Trường :attribute phải là một chuỗi.',
                'max' => [
                    'string' => 'Trường :attribute không được vượt quá :max ký tự.',
                ],
                'unique' => 'Trường :attribute đã tồn tại trong hệ thống.',
            ],
            [
                'name' => "Tên",
                'slug' => "đường dẫn",
                'parent_id' => 'parent_id',
            ]
        );
        $category =  Categories::find($id);
        $category->name = $request->name ?? "";
        $category->slug = $request->slug ?? "";
        $category->parent_id = $request->parent_id ?? "";
        $category->save();
        return redirect()->route('admin.categories.index')->with('msg', "cập nhật kldanh mục thành công");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if ($id) {
            $delete = Categories::find($id)->delete();
        }else {
        return redirect()->route("admin.categories.index")->with('errors', "Không tim thấy danh mục");
        }
        return redirect()->route("admin.categories.index")->with('msg', "Xóa danh mục thành công");
    }
}
