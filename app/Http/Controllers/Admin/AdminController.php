<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // login Function
    public function login(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();


            if (Auth::guard('admin')
                ->attempt(['email'=>$data['email'],
                    'password'=>$data['password'],
                    'status'=>1])){
                return redirect('admin/dashboard');
            }else {
                return redirect()->back()->with('error','Invalid Email or Password');
            }
        }
        return view('admin.login.login');
    }


    public function logOut()
    {
        Auth::guard('admin')->logout();
        return redirect()->back();


    }


    // Dashboard Home  Page
    public function home()
    {
        return view('admin.index');
    }



    // User list

    public function userList()
    {
        $users = User::all();
        return view('admin.user.index',get_defined_vars());
    }
}
