<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Common
 *
 * @author Administrator
 */

namespace Common\Controller;

use Think\Controller;
use Think\Auth;

class CommonController extends Controller {
    public $module='';
    protected function _initialize() {
        $this->module = MODULE_NAME;
        
//        if (!isset($_SESSION['uid']) || !isset($_SESSION['username'])) {
//            $this->redirect('Home/Index/index', '', 5, '没有权限,3秒后跳转');}
    }

    public function checkRule() {
        $auth = new Auth();
    }

}
