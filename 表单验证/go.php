<?php

    //���û�ȡ��������
    header('Content-Type: application/json; charset=utf-8');
    //��ȡ��������
    $data = $_POST;
    //�ñ����ֱ���ܴ������������ݣ����ں�̨������֤
    $name = $data['name'];
    $pass = $data['pass'];
    $mobile = $data['mobile'];
    $code = $data['code'];

    //ģ���̨���ݻ�ȡ
    $arr = array(
        'kobe'=>24,
         'Liu'=>673,
         'wang'=>886
    );


    //�ж��û����Ƿ����
    //����������Ǵ���һ����,�ٴ���һ������,�жϼ����������Ƿ����,����ֵ��boolֵ
    $hasName = array_key_exists($name,$arr);


    //������ж���ʵ�ʿ����л�����ϸ���ĵ�˵��,����һ�еķ���ֵ�ͷ���ֵ���÷�

    //�������codeֵΪ0��ʱ����Ƿ���Ҫ���
    if ($name == '') {
        $result = array(
            'code'=>1,
            'msg'=>'�û���������',
            'result'=>''
        );
    }
    //�ж����ݿ��Ƿ��Ѿ�����������û���
    else if ( $hasName ) {
        $result = array(
            'code'=>2,
            'mas'=>'�û����Ѿ�����',
            'result'=>''
        );
    }
    else {
        $result = array(
            'code'=>0,
            'msg'=>'�û�������',
            'result'=>'success.html'
        );
    }



    //����Ҫ�������ת��Ϊjson���ݷ���
    echo json_encode($result);

    //�����ӳ�2�뷵��,ģ���ȡ���ݵĵȴ�ʱ��
    sleep(2);

?>