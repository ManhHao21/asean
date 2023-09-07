<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view("admin.auth.login");
    }
    public function register()
    {
        return view("admin.auth.register");
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required', 'min:6'],
            ],
            [
                'required' => ":attribute không được để trống",
                "email" => ":attribute phải là email xin hãy nhập lal",
                "string" => ":attribute phải là kiểu string vui lòng kiểm tra lại",
            ],
            [
                "email" => "Email",
                "name" => "Họ và tên ",
            ]
        );
        if (\Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->route('admin.index');
        } else {

            return redirect()->route('admin.login')->with('msg', 'Đăng nhập không thành công');
        }
    }
    public function logout()
    {
        \Auth::logout();

        return redirect()->route("admin.login");
    }

    public function postRegister(Request $request)
    {

        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:6'],
                'confilm_password' => ['required', 'same:password'],
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
                "password_confirmation" => "Nhập lại mật khẩu",
                "address" => "Địa chỉ"
            ]
        );
        $user = new User();
        $user::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "address" => $request->address
        ]);
        return back()->with('msg', 'Đăng kí tài khoản thành công');
    }
}
