<?php
namespace Home\Controller;
use Think\Controller;


class IndexController extends Controller {
    public function hi(){
        $this->show('hi');
    }

    public function index(){
    	dump(session());
    	exit();
    }


    /**
     * 用户注册
     * @author ancon<zhongfuzhong@gmail.com>
     */
    public function register(){
    	if (IS_POST) {
	    	$email = I('email');
	    	$username = I('username');
	    	$password = I('password');
	    	$repassword = I('repassword');

	    	dump(I());

	    	// 验证数据
	    	// TODO

	    	// 实例化模型
	    	$User = M('user');
	    	// 保存数据
	    	$data = array(
	    		'email'	=>	$email,
	    		'username'	=> $username,
	    		'password'	=>	$password,
	    		);
	    	$User->create($data);
	    	$result = $User->add($data);
	    	if ($result) {
	    		$this->success('succeed');
	    	}
    	}
    }    
}