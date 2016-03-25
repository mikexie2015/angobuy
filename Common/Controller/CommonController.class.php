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

class CommonController extends Controller {

    function _initialize() {
        $this->module = MODULE_NAME;
    }

}
