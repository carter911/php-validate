## thinkphp5-validate
## 使用tp5过程中发现validate还不错故将他剥离开来 

`注意 由于只是用到了validate 代码里面有些小调整 去掉了多语言功能`
### 第一步引入
### 第二步
~~~php
    //待验证的控制器
    include_once "../vendor/autoload.php";
    include_once "./Validate/UserValidate.php";
    $user = new \Validate\UserValidate();
    $param = "";
    if(!$user->scene('ret')->check( $param ))
    {
        $user->getError();
    }
~~~

~~~php
    //Validate/UserValidate.php
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
~~~
具体的验证规则请移步至thinkphp5
[ thinkphp5-规则验证 ]( https://www.kancloud.cn/manual/thinkphp5/129319 )



