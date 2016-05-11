<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Admin\Controller;

use Common\Controller\CommonController;

/**
 * Description of UserController
 *
 * @author Administrator
 */
class UserController extends CommonController {
    //put your code here
    public function index() {
        $user=M('member')->select();
        $this->assign('user',$user);
        $this->display();
    }
}
