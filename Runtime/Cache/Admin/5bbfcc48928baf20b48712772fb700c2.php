<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" type="text/css" href="/angobuy./Tpl/Pub/Css/global.css" />
    <link rel="stylesheet" type="text/css" href="/angobuy./Tpl/Admin/Css/common.css" />
    <script type="text/javascript" src="/angobuy./Tpl/Admin/Js/common.js"></script>
    <script type="text/javascript" src="/angobuy./Tpl/Pub/Js/jquery.js"></script>
    <title><?php echo ($module); ?></title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>

</head>
    <body>
<div class="login">
            <form action="<?php echo U('admin/Login/login');?>" method="post" id="login">
                            <div class="title">
                                安果网 | 登录后台
                            </div>
                            <table border="1" width="100%">
                                <tr>
                                    <th>管理员帐号:</th>
                                    <td>
                                        <input type="username" name="username" class="len250"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th>密码:</th>
                                    <td>
                                        <input type="password" class="len250" name="password"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th>验证码:</th>
                                    <td>
                                        <input type="code" class="len250" name="code"/> <img src="<?php echo U('admin/Login/verify','','');?>" id="code"/> <a href="javascript:void(change_code(this));">看不清</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="padding-left:160px;"> <input type="submit" class="submit" value="登录"/></td>
                                </tr>
                            </table>
                        </form>
</div> 

<div class="foot">
    
</div>
</body>
</html>