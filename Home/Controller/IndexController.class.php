<?php

namespace Home\Controller;
use Think\Hook;
use Common\Controller\CommonController;

class IndexController extends CommonController {

    public function index() {
//        echo U('admin/index/index');
//        $param='123';
//        echo md5($param);die;
//        $hooks = M('Hooks')->getField('name,addons');
        p(S('hooks'));die;
        $this->display();
    }

}
