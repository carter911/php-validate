<?php
/**
 * Created by PhpStorm.
 * User: zhongwu
 * Date: 2018/4/18
 * Time: 下午7:41
 */
namespace Validate;

use think5\Validate;

class UserValidate extends Validate {

    protected $rule =   [
        'name'  => 'require|max:25',
        'age'   => 'number|between:1,120',
    ];

    protected $message  =   [
        'name.require' => '名称必须',
        'name.max'     => '名称最多不能超过25个字符',
        'age.number'   => '年龄必须是数字',
        'age.between'  => '年龄只能在1-120之间',
        'email'        => '邮箱格式错误',
    ];

    protected $scene = [
        //流标场景
        'ret' => ['name','age','email'],
    ];
}