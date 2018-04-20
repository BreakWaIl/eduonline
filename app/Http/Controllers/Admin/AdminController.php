<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //列表
    public function index(Request $request)
    {
        //1.判断HTTP请求类型
        if ($request->isMethod('post')) {
            //2.接受数据
            $postData = $request->only(['start', 'length', 'startTime', 'endTime', 'username', 'draw']);
            //3.组装模型
            $admins = Admin::select('id', 'username', 'mobile', 'email', 'role_id', 'state', 'created_at');
            //4.模型过滤组装
            if ($postData['username']) $admins->where('username', 'like', '%'. $postData['username'] .'%');
            if ($postData['startTime']) $admins->where('created_at', '>', strtotime($postData['startTime']));
            if ($postData['endTime']) $admins->where('created_at', '<', strtotime($postData['endTime']));
            //5.响应json数据
            return response()->json([
                'draw' => (int)$postData['draw'],       //必须，HTTP请求发送什么就响应什么
                'recordsTotal' => Admin::count(),       //必须，admin表总记录数
                'recordsFiltered' => $admins->count(),  //必须，admin表总记录数（增加where条件）
                'data' => $admins->offset($postData['start'])->limit($postData['length'])->get()
            ]);
        } else {
            //2.加载视图并传递数据
            return view('admin.admin.index');
        }
    }
}
