<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect, Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class loginUser extends Controller
{
    public function showLogin()
    {
        return view('particals.formUserLogin');
    }
    public function showRegister()
    {
        return view('particals.formRegisterUser');
    }
    public function postLoginUser(Request $request)
    {
        request()->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email của bạn không hợp lệ',
                'password.required' => 'Bạn chưa nhập mật khẩu'
            ]
        );

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        
    }

    public function postRegisterUser(Request $request)
    {
        request()->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
            ],
            [
                [
                    'name.required' => 'Tên của bạn không hợp lệ',
                    'email.required' => 'Email của bạn không hợp lệ',
                    'password.required' => 'Bạn chưa nhập mật khẩu'
                ]
            ]
        );

        $data = $request->all();

        $check = $this->create($data);

        return Redirect::to("loginUser")->withSuccess('Great! You have Successfully loggedin');
    }

    public function dashboard(Request $request)
    {

        // $value = $request->session()->get('AdminSesion');
        // $nameAdmin = $value->role;
        $user = Auth::user()->role;
        if (Auth::check()) {
            if ($user == '') {
                $request->session()->put('UserSesion', Auth::user());
                return redirect("/");
                // return Redirect::to("admin/theloai/showAll");
            }
        }
        return redirect()->intended();
    }

    public function create(array $data)
    {
        return User::create([
            'role' => '',
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logoutUser(Request $request)
    {
        // Session::flush();
        $request->session()->forget('UserSesion');
        $request->session()->flush();
        Auth::logout();
        return Redirect('/');
    }
}
