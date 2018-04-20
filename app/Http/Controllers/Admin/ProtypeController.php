<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Protype;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProtypeController extends Controller
{
    //列表
    public function index(Request $request)
    {
        //1.判断HTTP请求类型（脚下留心：客户端分页直接向所有数据响应即可）
        if ($request->isMethod('post')) {
            //2.查询所有数据
            $protypes = Protype::get();
            //3.响应json数据
            return response()->json([
                'data' => $protypes
            ]);
        } else {
            //2.加载视图
            return view('admin.protype.index');
        }
    }
}
