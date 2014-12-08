<?php
namespace Auth\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    public function checkLogin(){
    	dump(I());
    	$Api->D('role');
    	
    }


}