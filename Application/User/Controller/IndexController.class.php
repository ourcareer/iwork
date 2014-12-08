<?php

/**
 * 
 */
namespace User\Controller;
use Think\Controller;

/**
 * 类说明
 */
class IndexController extends Controller {
	/**
	 * 方法说明
	 */
    public function hi(){
        $this->show('hi');
    } 

    public function index(){
    	$username = I('username');
    	$password = I('password');
    	// $user 
    	// 检查数据
    	
    }

}