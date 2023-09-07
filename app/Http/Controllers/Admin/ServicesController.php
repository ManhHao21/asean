<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Services::orderBy('created_at', 'desc')->get();
        return view('admin.Services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:256',
            'des' => 'required|max:256',
            'name.*' => 'required|max:256',
            'content.*' => 'required',
        ], [
            'title.required' => "Trường name không được để trông",
            'title.max' => "Trường name tối đa :max kí tự",
            'name.*.required' => 'Tên dịch vụ không được bỏ trống',
            'name.*.max' => 'Tên dịch vụ tối đa :max kí tự',
            'content.*.required' => 'Nội dung dịch vụ không được bỏ trống',
            'des.required' => "Mô tả không được để trông",
            'des.max' => "Mô tả không tối đa :max kí tự",
        ]);
        $titles = $request->input('name');
        $descriptions = $request->input('content');
        $services = [];
        foreach ($titles as $index => $title) {
            $services[] = [
                'title' => $title,
                'des' => $descriptions[$index],
            ];
        }

        $jsonServices = json_encode($services);

        $service = new Services();
        $service->title = $request->title;
        $service->description = $request->des;
        $service->listservices = $jsonServices;
        $service->save();

        return redirect()->route('admin.services.index')->with('success', 'Dịch vụ đã được thêm.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $services = Services::find($id);
        $listServices = json_decode($services->listservices, true);
        return view('admin.Services.edit', compact('services', 'listServices'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:256',
            'des' => 'required|max:256',
            'name.*' => 'required|max:256',
            'content.*' => 'required',
        ], [
            'title.required' => "Trường name không được để trông",
            'title.max' => "Trường name tối đa :max kí tự",
            'name.*.required' => 'Tên dịch vụ không được bỏ trống',
            'name.*.max' => 'Tên dịch vụ tối đa :max kí tự',
            'content.*.required' => 'Nội dung dịch vụ không được bỏ trống',
            'des.required' => "Mô tả không được để trông",
            'des.max' => "Mô tả không tối đa :max kí tự",
        ]);
        $titles = $request->input('name');
        $descriptions = $request->input('content');
        $services = [];
        foreach ($titles as $index => $title) {
            $services[] = [
                'title' => $title,
                'des' => $descriptions[$index],
            ];
        }

        $jsonServices = json_encode($services);

        $service = Services::find($id);
        $service->title = $request->title;
        $service->description = $request->des;
        $service->listservices = $jsonServices;
        $service->save();

        return redirect()->route('admin.services.index')->with('msg', 'Dịch vụ đã được cập nhật');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleteServices = Services::find($id);
        if ($deleteServices) {
            $deleteServices->delete();
            return redirect()->route('admin.services.index')->with('msg', 'Xóa dịch vụ thành công');
        }else {
            return redirect()->route('admin.services.index')->with('errors', 'Không tìm thấy dịch vụ');
            
        }
    }
}
