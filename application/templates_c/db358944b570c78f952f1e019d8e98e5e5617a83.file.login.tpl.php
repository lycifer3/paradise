<?php /* Smarty version Smarty-3.1.7, created on 2014-01-15 23:11:11
         compiled from "application/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165043617452d6f96f6e8b92-53334070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db358944b570c78f952f1e019d8e98e5e5617a83' => 
    array (
      0 => 'application/templates/login.tpl',
      1 => 1386409092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165043617452d6f96f6e8b92-53334070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6f96f751e3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6f96f751e3')) {function content_52d6f96f751e3($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login</title>
    <link href="/css/layout.css" rel="stylesheet" type="text/css" />
    <link href="/css/login.css" rel="stylesheet" type="text/css" />
    <link href="/css/theme.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="logincontainer">
    <div id="loginbox">
        <div id="loginheader">
            <img SRC="/images/cp_logo_login.png" alt="Control Panel Login" />
        </div>
        <div id="innerlogin">
            <form method="POST" id="signin" action="">
                <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)){?>
                    <p>Неверный логин/пароль</p><br/>
                <?php }?>
                <p>Ваш логин:</p>
                <div style="margin-left: -40px">
                    <dt id="login-label">&#160;</dt>
                    <dd id="login-element">
                        <input type="text" name="user_login" id="login" value="" class="logininput" autocomplete="off" />
                    </dd>
                </div>
                <br/>
                <p>Ваш пароль:</p>
                <div style="margin-left: -40px">
                    <dt id="password-label">&#160;</dt>
                    <dd id="password-element">
                        <input type="password" name="user_password" id="password" value="" class="logininput" />
                    </dd>
                </div>

                <div style="margin-left: -40px">
                    <dt id="submit-label">&#160;</dt><dd id="submit-element">
                        <input type="submit" name="submit" id="signin_submit" value="Войти" class="loginbtn" />
                    </dd>
                </div>

            </form>
        </div>
    </div>
    <img SRC="/images/login_fade.png" alt="Fade" />
</div>
</body>
</html><?php }} ?>