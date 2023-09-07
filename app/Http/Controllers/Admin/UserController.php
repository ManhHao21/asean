<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('created_at','desc')->paginate(7);
        return view("admin.user.index", compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.user.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:6'],
                'confirm-password' => ['required', 'same:password'],
                'address' => ['required', 'max:100'],
            ],
            [
                'required' => ":attribute không được để trống",
                "email" => ":attribute phải là email xin hãy nhập lal",
                "string" => ":attribute phải là kiểu string vui lòng kiểm tra lại",
                "max" => ":attribute tối đa :max kí tự, vui lòng kiểm tra lại",
                "min" => ":attribute ít nhát :min kí tự",
                "unique" => ":attribute đã tồn tại, vui lòng kiểm tra lại",
                "same" => ":attribute không trùng với password vui lòng kiểm tra lại",
            ],
            [
                "email" => "Email",
                "name" => "Họ và tên ",
                "password" => "Mật khẩu",
                "confirm-password" => "Nhập lại mật khẩu",
                "address" => "Địa chỉ"
            ]
        );
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_admin' => $request->is_admin,
            'address' => $request->address,
        ]);
        return redirect()->route('admin.user.index')->with('msg', 'Thêm mới người dùng thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view("admin.user.edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'password' => ['required', 'string', 'min:6'],
                'confirm-password' => ['required', 'same:password'],
                'address' => ['required', 'max:100'],
            ],
            [
                'required' => ":attribute không được để trống",
                "string" => ":attribute phải là kiểu string vui lòng kiểm tra lại",
                "max" => ":attribute tối đa :max kí tự, vui lòng kiểm tra lại",
                "min" => ":attribute ít nhát :min kí tự",
                "unique" => ":attribute đã tồn tại, vui lòng kiểm tra lại",
                "same" => ":attribute không trùng với password vui lòng kiểm tra lại",
            ],
            [
                "name" => "Họ và tên ",
                "password" => "Mật khẩu",
                "confirm-password" => "Nhập lại mật khẩu",
                "address" => "Địa chỉ"
            ]
        );
        $user = User::find($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->is_admin = $request->is_admin;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->save();
        return redirect()->route("admin.user.index", $id)->with("msg", "Cập nhật người dùng thành công");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if ($id) {
            $delete = User::find($id)->delete();
        }else {
        return redirect()->route("admin.user.index")->with('errors', "Không có user");

        }
        return redirect()->route("admin.user.index")->with('msg', "Xóa tài khoản thành công");
    }
}
