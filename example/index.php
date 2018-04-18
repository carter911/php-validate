<?php
/**
 * Created by PhpStorm.
 * User: zhongwu
 * Date: 2018/4/18
 * Time: 下午7:32
 */
include_once "../vendor/autoload.php";
include_once "./Validate/UserValidate.php";
$user = new \Validate\UserValidate();
//$param['name'] = '';
//$param['password'] = '';
$param = "";
$res = $user->scene('ret')->check( $param );
var_dump($user->getError());
var_dump($res);