<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    /**
     * 声明表名（注：laravel会自动加s所以自己声明覆盖）
     * @var string
     */
    protected $table = 'lesson';

    /**
     * Unix时间戳形式填充创建于和更新于（注：模型默认托管时间但是是datetime类型）
     * @var string
     */
    protected $dateFormat = 'U';

    /**
     * 声明可批量设置的属性（注：当使用create静态方式时）
     * @var array
     */
    protected $fillable = [
        'course_id',
        'img',
        'lesson_name',
        'video_address',
        'video_time',
        'teacher_name',
        'lesson_desc',
        'state'
    ];

    /**
     * 关联课程模型（1:1）
     * 语法：模型名::with（'role'）->first()
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function course()
    {
        #return $this->hasOne(关联模型名，关联模型公共字段，本模型公共字段)
        return $this->hasOne('App\Http\Model\Course','id', 'course_id');
    }
}
