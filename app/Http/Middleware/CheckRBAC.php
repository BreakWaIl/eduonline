<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class CheckRBAC
{
    /**
     * 获取当前控制器方法【控制名controller@方法名】 是否在 角色的auth_ac中：在-正常访问，不在-无权
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //1.获取当前的路由（包含控制器和方法的地址）
        $route = strtolower(Route::currentRouteAction()); //"App\Http\Controllers\Admin\IndexController@index"
        //2.获取当前角色权限
        $ac = Auth::guard('admin')->user()->role()->first()->auth_ac;
        //3.组装权限：默认全部用户都有后台首页路由的权限
        $ac = strtolower($ac . ',IndexController@index,IndexController@welcome,LoginController@loginout');
        //4.比较范围是否存在包含关系,可以使用strpos进行比较，也可以转化成数组进行in_array
        $array = explode('\\',$route);
        //dd(prev($array));
        if(strpos($ac,end($array)) === false){    //end是将数组的指针移向最后一个元素并且返回其值
            //echo '您没有访问权限';die;
            return redirect('admin/login')->withErrors(['errors' => '您没有访问权限']);
        }
        return $next($request);
    }
}
