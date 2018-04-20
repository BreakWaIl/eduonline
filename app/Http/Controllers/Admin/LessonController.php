<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    //列表
    public function index(Request $request)
    {
        //1.判断HTTP请求类型
        if ($request->isMethod('post')) {
            //2.接受数据
            $postData = $request->only(['start', 'length', 'draw']);
            //3.查询数据
            $courses = Lesson::with('course')->orderBy('id', 'desc');
            //4.响应json数据
            return response()->json([
                'draw' => (int)$postData['draw'],       //必须，HTTP请求发送什么就响应什么
                'recordsTotal' => Lesson::count(),       //必须，admin表总记录数
                'recordsFiltered' => $courses->count(),  //必须，admin表总记录数（增加where条件）
                'data' => $courses->offset($postData['start'])->limit($postData['length'])->get()
            ]);
        } else {
            //2.加载视图
            return view('admin.lesson.index');
        }
    }

    //点播
    public function play(Request $request)
    {
        //1.接受播放地址
        //dd(asset('img/default.mp4'));
        $video_addr = $request->input('video') ? $request->input('video') : asset('img/default.mp4');
        echo "<video width='100%' height='390' src='{$video_addr}' autoplay controls='controls'>
        您的浏览器不支持 video 标签。
        </video>";
    }
}
