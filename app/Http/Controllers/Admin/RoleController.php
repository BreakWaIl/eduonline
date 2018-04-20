<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Auth;
use App\Http\Model\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    //列表
    public function index()
    {
        //1.通过内置分页功能获取数据，每页显示2条
        $roles = Role::paginate(2);
        //2.加载视图
        return view('admin.role.index', compact('roles'));
    }

    //分配权限
    public function assignAuth(Request $request)
    {
        //1.判断HTTP请求类型
        if ($request->isMethod('post')) {
            //2.获取数据
            $postData = $request->only(['auth']);
            //3.更新数据
            $rs = Role::updateAuth($request->input('role_id'), $postData['auth']);
            //4.判断状态
            echo $rs ? 1 : 0;
        } else {
            //【显示所有权限节点功能】
            //1.查询所有顶级权限
            $topAuths = Auth::where('pid', 0)->get();
            //2.查询所有子级权限
            $sonAuths = Auth::where('pid', '<>', 0)->get();
            //【根据角色ID获取角色的所有权限】
            $role = Role::where('id', $request->input('role_id'))->first();
            $authArr = !empty($role->auth_ids) ? explode(',', $role->auth_ids) : [];
            //4.加载视图
            return view('admin.role.assignAuth', compact('topAuths', 'sonAuths', 'authArr'));
        }
    }
}
