<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller{

    public function index() {
//        echo U('admin/index/index');
        $this->display();
    }

}
