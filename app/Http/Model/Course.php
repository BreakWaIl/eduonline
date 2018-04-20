<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
     * 声明表名（注：laravel会自动加s所以自己声明覆盖）
     * @var string
     */
    protected $table = 'course';

    /**
     * Unix时间戳形式填充创建于和更新于（注：模型默认托管时间但是是datetime类型）
     * @var string
     */
    protected $dateFormat = 'U';

    /**
     * 声明可批量设置的属性（注：当使用create静态方式时）
     * @var array
     */
    protected $fillable = ['course_name', 'profession_id', 'course_price', 'img', 'course_desc'];

    /**
     * 关联专业模型（1:1）
     * 语法：模型名::with（'role'）->first()
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profession()
    {
        #return $this->hasOne(关联模型名，关联模型公共字段，本模型公共字段)
        return $this->hasOne('App\Http\Model\Profession','id', 'profession_id');
    }
}
