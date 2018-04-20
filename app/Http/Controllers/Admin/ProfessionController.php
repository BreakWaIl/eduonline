<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Profession;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessionController extends Controller
{
    //列表
    public function index(Request $request)
    {
        //1.判断HTTP类型
        if ($request->isMethod('post')) {
            //2.查询所有数据
            $professions = Profession::with('protype')->get();
            //3.响应json数据
            return response()->json([
                'data' => $professions
            ]);
        } else {
            //2.加载视图
            return view('admin.profession.index');
        }
    }
}
