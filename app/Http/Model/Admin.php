<?php

namespace App\Http\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;


class Admin extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;

    /**
     * 声明表名
     * @var string
     */
    protected $table = 'admin';

    /**
     * 关联角色模型（1:1）
     * 语法：模型名::with（'role'）->first()
     * 语法：Auth::guard('admin')-> user() -> role() -> first()
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role()
    {
        #return $this->hasOne(关联模型名，关联模型公共字段，本模型公共字段)
        return $this->hasOne('App\Http\Model\Role','id', 'role_id');
    }
}