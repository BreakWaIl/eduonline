<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //加载登录视图
    public function login(Request $request)
    {
        //1.判断HTTP请求类型
        if ($request->isMethod('post')) {

            //数据过滤，发送HTTP请求进行验证：成功-则不管，失败-重定向到来源页面，并给视图传递$errors变量
            $this->validate($request, [
                'username' => 'required|min:2|max:10',
                'password' => 'required|min:6|max:32',
                'captcha' => 'required|size:5|captcha',
            ]);

            //2.接受数据
            $postData = $request->only(['username', 'password']);

            //3.验证身份 并 登录（注：也就是调用Auth类的方法会自动帮我们验证数据并且保存session）
            //语法；Auth::guard(参数)->attempt(用户名和密码数组，是否保存用户状态:true-是,false-否)
            //true-后期相当于cookie存储，false-session
            $rs = Auth::guard('admin')->attempt($postData, $request->only('online')['online']);

            //4.判断用户是否登录成功
            if ($rs) {
                return redirect('admin/index/index');
            } else {
                return redirect('admin/login');
            }

        } else {
            //2.加载视图
            return view('admin.login.login');
        }
    }

    //退出
    public function loginout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login')->withErrors(['errors'=> '退出成功']);
    }

}