<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        create table admin (
//        id int unsigned primary key auto_increment comment '管理员ID',
//        username varchar(20) not null comment '用户名',
//        password varchar(255) not null comment '密码',
//        sex tinyint(1) unsigned not null default 1 comment '性别:1-男,2-女,3-未知',
//        mobile char(11) not null default '' comment '手机号',
//        email varchar(40) not null default '' comment '邮箱',
//        role_id tinyint  unsigned not null comment '角色ID',
//        created_at int unsigned not null default 0 comment '创建于',
//        updated_at int unsigned not null default 0 comment '更新于',
//        state tinyint unsigned not null default 1 comment '用户状态:0-禁用,1-启动',
//        remember_token varchar(255) not null default '' comment '记住密码TOKEN'
//        )engine=myisam charset=utf8mb4;
        Schema::create('admin', function (Blueprint $table) {
            $table->engine = 'myisam';
            $table->increments('id')->comment('管理员ID');
            $table->string('username', 20)->comment('用户名');
            $table->string('password', 255)->comment('密码');
            $table->unsignedTinyInteger('sex')->default(1)->comment('性别:1-男,2-女,3-未知');
            $table->char('mobile', 11)->default('')->comment('手机号');
            $table->string('email', 40)->default('')->comment('邮箱');
            $table->unsignedTinyInteger('role_id')->comment('角色ID');
            $table->unsignedInteger('created_at')->default(0)->comment('创建于');
            $table->unsignedInteger('updated_at')->default(0)->comment('更新于');
            $table->unsignedTinyInteger('state')->default(1)->comment('用户状态:0-禁用,1-启动');
            $table->string('remember_token', 255)->default('')->comment('记住密码TOKEN');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
