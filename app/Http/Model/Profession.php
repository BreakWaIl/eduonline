<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    /**
     * 声明表名（注：laravel会自动加s所以自己声明覆盖）
     * @var string
     */
    protected $table = 'profession';

    /**
     * Unix时间戳形式填充创建于和更新于（注：模型默认托管时间但是是datetime类型）
     * @var string
     */
    protected $dateFormat = 'U';

    /**
     * 声明可批量设置的属性（注：当使用create静态方式时）
     * @var array
     */
    protected $fillable = ['profession_name', 'protype_id', 'img', 'profession_desc'];

    /**
     * 关联模型（1:1）
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function protype()
    {
        return $this->hasOne('App\Http\Model\Protype', 'id', 'protype_id');
    }
}
