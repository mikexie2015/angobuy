<?php

namespace Home\Controller;

use Think\Controller;

class SellController extends Controller {

    public function index() {
        $product=M('product')->select();
        p($product);
    }
    
}
