<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    //列表
    public function index()
    {
        //1.查询所有数据（注；因为权限节点数据不是很多所以直接显示）
        $auths = Auth::get();
        //2.加载视图并传递数据
        return view('admin.auth.index', compact('auths'));
    }

    //添加
    public function add(Request $request)
    {
        //1.判断HTTP请求类型
        if ($request->isMethod('post')) {
            //2.接受数据
            $postData = $request->only(['auth_name', 'controller', 'action', 'is_nav', 'pid']);
            //3.调用模型批量设置属性创建数据
            $rs = Auth::create($postData);
            //4.判断状态
            echo $rs ? 1 : 0;
        } else {
            //2.查询所有顶级权限
            $topAuths = Auth::where('pid', 0)->get();
            //3.加载视图并传递数据
            return view('admin.auth.add', compact('topAuths'));
        }
    }
}
