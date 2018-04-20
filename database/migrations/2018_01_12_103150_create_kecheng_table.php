<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKechengTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //创建专业分类表
        Schema::create('protype',function($table){
            $table->increments('id');
            $table->string('protype_name',20)->comment('分类名');
            $table->tinyInteger('sort')->default(0);
            $table->unsignedTinyInteger('state')->default(1)->comment('状态:0停用1开启');
            $table->unsignedInteger('created_at')->default(0)->comment('创建于');
            $table->unsignedInteger('updated_at')->default(0)->comment('创建于');
        });
        //创建专业表
        Schema::create('profession', function (Blueprint $table) {
            $table->increments('id');
            $table->string('profession_name',32)->comment('专业名称');
            $table->unsignedTinyInteger('protype_id')->comment('专业分类表的主键');
            $table->string('img',120)->default('')->comment('封面图');
            $table->string('profession_desc')->default('')->comment('描述');
            $table->unsignedInteger('created_at')->default(0)->comment('创建于');
            $table->unsignedInteger('updated_at')->default(0)->comment('创建于');
        });
        //创建课程表
        Schema::create('course', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_name',32)->comment('课程名称');
            $table->integer('profession_id')->comment('课程所属专业的id');
            $table->decimal('course_price',9,2)->default(0)->comment('课程的价格');
            $table->string('img',120)->default('')->comment('封面图');
            $table->string('course_desc')->default('')->comment('课程描述');
            $table->unsignedInteger('created_at')->default(0)->comment('创建于');
            $table->unsignedInteger('updated_at')->default(0)->comment('创建于');
        });
        //创建课时表
        Schema::create('lesson', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->comment('课时所属课程的id');
            $table->string('img',120)->default('')->comment('封面图');
            $table->string('lesson_name',32)->comment('课时名称');
            $table->string('video_address',120)->default('')->comment('视频的地址');
            $table->integer('video_time')->default(10)->comment('课时的时长');
            $table->string('teacher_name',32)->default('')->comment('讲师名称');
            $table->string('lesson_desc')->default('')->comment('课时描述');
            $table->unsignedTinyInteger('state')->default(1)->comment('状态:0停用1开启');
            $table->unsignedInteger('created_at')->default(0)->comment('创建于');
            $table->unsignedInteger('updated_at')->default(0)->comment('创建于');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('protype');
        Schema::drop('profession');
        Schema::drop('course');
        Schema::drop('lesson');
    }
}
