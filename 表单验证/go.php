<?php

    //设置获取数据类型
    header('Content-Type: application/json; charset=utf-8');
    //获取请求数据
    $data = $_POST;
    //用变量分别接受传来的请求数据，用于后台二次验证
    $name = $data['name'];
    $pass = $data['pass'];
    $mobile = $data['mobile'];
    $code = $data['code'];

    //模拟后台数据获取
    $arr = array(
        'kobe'=>24,
         'Liu'=>673,
         'wang'=>886
    );


    //判断用户名是否存在
    //这个方法就是传入一个健,再传入一个数组,判断键在数组里是否存在,返回值是bool值
    $hasName = array_key_exists($name,$arr);


    //这里的判断在实际开发中会有详细的文档说明,包括一切的返回值和返回值的用法

    //这里假设code值为0的时候才是符合要求的
    if ($name == '') {
        $result = array(
            'code'=>1,
            'msg'=>'用户名必须填',
            'result'=>''
        );
    }
    //判断数据库是否已经存在输入的用户名
    else if ( $hasName ) {
        $result = array(
            'code'=>2,
            'mas'=>'用户名已经存在',
            'result'=>''
        );
    }
    else {
        $result = array(
            'code'=>0,
            'msg'=>'用户名可用',
            'result'=>'success.html'
        );
    }



    //符合要求后将数据转化为json数据返回
    echo json_encode($result);

    //这是延迟2秒返回,模拟获取数据的等待时间
    sleep(2);

?>