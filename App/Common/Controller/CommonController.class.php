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

    public $title = '';

    protected function _initialize() {
        $this->title =ACTION_NAME.'--'.CONTROLLER_NAME.'--'.MODULE_NAME;
        $this->assign('title', $this->title);

//        if (!isset($_SESSION['uid']) || !isset($_SESSION['username'])) {
//            $this->redirect('admin/login/index', '', 3, '没有权限,3秒后跳转');
//        }
    }

    public function checkRule() {
        $auth = new Auth();
    }

}
