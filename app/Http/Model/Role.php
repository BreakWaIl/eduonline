<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * 声明表名（注：laravel会自动加s所以自己声明覆盖）
     * @var string
     */
    protected $table = 'role';

    /**
     * Unix时间戳形式填充创建于和更新于（注：模型默认托管时间但是是datetime类型）
     * @var string
     */
    protected $dateFormat = 'U';

    /**
     * 声明可批量设置的属性（注：当使用create静态方式时）
     * @var array
     */
    protected $fillable = ['role_name', 'auth_ids', 'auth_ac'];


    /**
     * 更改角色权限
     * @param  int   $role_id  角色ID
     * @param  array $authArr  权限数组
     * @return bool
     */
    public static function updateAuth($role_id, $authArr)
    {
        //1.将选中的权限划分为字符串，逗号分隔
        $data['auth_ids'] = implode(',', $authArr);

        //2.根据权限ID获取对应控制器方法
        $auths = Auth::select('controller', 'action')->whereIn('id', $authArr)->get();
        foreach ($auths as $auth) {
            $temp[] = $auth->controller .'@'.$auth->action;
        }
        //3.划分控制器和方法
        $data['auth_ac'] = implode(',', $temp);
        //4.更新数据库
        return self::where('id', $role_id)->update($data);
    }
}
