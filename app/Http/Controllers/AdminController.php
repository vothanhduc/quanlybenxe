<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


Use Illuminate\Support\Facades\Auth;




class AdminController extends Controller
{
    public function home()
    {
    	


        $user = user::all()->count();



    	return view('admin.index',['user' => $user]);
    }

    public function ad_login()
    {
    	return view('admin.login.dang-nhap');
    }

    public function post_ad_login(Request $lg)
    {
    	if(Auth::attempt(['username'=>$lg->username,'password'=>$lg->password]))
            if(Auth::user()->trang_thai == 1)
            {
                
                return redirect(''.Route('ad1').'');
                
            }
            else
            {
                return redirect()->back()->with('disable','Tài khoản bạn đã bị khóa !');
            }
        else
             return redirect()->back()->with('thongbao','Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại');
            //echo "Not OK";
    }

    public function logout(){
      /*  session::put(username,null);
        session::put(password,null); */
      /*  return redirect::to('/admin'); */
        return redirect(''.Route('login2').'');
    }
}

    