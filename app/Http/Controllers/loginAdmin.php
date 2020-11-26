<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class loginAdmin extends Controller
{
    public function formLogin()
    {
        return view('particals.formAdminLogin');
    }  

    public function formRegister()
    {
        return view('particals.RegisterAdmin');
    }

    public function postLoginAdmin(Request $request)
    {
        request()->validate([
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
            return redirect()->intended('admin');
        }
        return Redirect::to("loginAdmin")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function postRegisterAdmin(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        ],
        [
            'name.required' => 'Tên của bạn không hợp lệ',
            'email.required' => 'Email của bạn không hợp lệ',
            'password.required' => 'Bạn chưa nhập mật khẩu'
        ]
        );
         
        $data = $request->all();
 
        $check = $this->create($data);
       
        return Redirect::to("loginAdmin")->withSuccess('Great! You have Successfully loggedin');
    }

    public function admin(Request $request)
    {
        $request->session()->put('AdminSesion' , Auth::user());
        // $value = $request->session()->get('AdminSesion');
        // $nameAdmin = $value->role;
        $user = Auth::user()->role;
        if(Auth::check()){
            if($user == 'admin'){
                return redirect("admin/theloai/showAll");
                // return Redirect::to("admin/theloai/showAll");
            }
        }
        return Redirect::to("loginAdmin")->withSuccess('Opps! You do not have access');
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

    public function logoutAdmin() {
        Session::flush();
        Auth::logout();
        return Redirect('loginAdmin');
    }
}
