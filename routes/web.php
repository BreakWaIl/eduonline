<?php
//后台登录
Route::match(['get', 'post'], 'admin/login', 'Admin\LoginController@login');

Route::group(['middleware' => ['CheckAdminLogin', 'CheckRBAC']], function(){
//Route::group(['middleware' => 'CheckAdminLogin'], function(){
//退出功能
    Route::get('admin/loginout', 'Admin\LoginController@loginout');
//后台首页
    Route::get('admin/index/index', 'Admin\IndexController@index');
    Route::get('admin/index/welcome', 'Admin\IndexController@welcome');
//管理员管理
    Route::match(['get','post'], 'admin/admin/index', 'Admin\AdminController@index');
//权限管理
    Route::get('admin/auth/index', 'Admin\AuthController@index');
    Route::match(['get', 'post'], 'admin/auth/add', 'Admin\AuthController@add');
//角色管理
    Route::get('admin/role/index', 'Admin\RoleController@index');
    //分配权限路由
    Route::match(['get', 'post'], 'admin/role/assignAuth', 'Admin\RoleController@assignAuth');
//专业分类管理
    Route::match(['get', 'post'], 'admin/protype/index', 'Admin\ProtypeController@index');
//专业管理
    Route::match(['get', 'post'],'admin/profession/index', 'Admin\ProfessionController@index');
//课程管理
    Route::match(['get', 'post'], 'admin/course/index', 'Admin\CourseController@index');
//课时管理（点播：点击链接直接播放视频）
    Route::match(['get', 'post'], 'admin/lesson/index', 'Admin\LessonController@index');
    Route::get('admin/lesson/play', 'Admin\LessonController@play');//点播功能:预览视频
});
