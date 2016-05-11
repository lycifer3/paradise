<?php /* Smarty version Smarty-3.1.7, created on 2014-01-16 12:41:53
         compiled from "application/templates/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212818659852d6f9772cb1b5-38994590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab794de36cf6e4593cef2e701b88600b0d99be1f' => 
    array (
      0 => 'application/templates/index/index.tpl',
      1 => 1389868948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212818659852d6f9772cb1b5-38994590',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6f97731bce',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6f97731bce')) {function content_52d6f97731bce($_smarty_tpl) {?>    <div class="mainIcons">
        <a href ="/clients" style="text-decoration: none;">
            <img src="/images/icons/icon_user.png" alt="Users settings" class="latest_img" />
            <p style="text-align: center">Клиенты</p>
        </a>
    </div>
    <div class="mainIcons">
        <a href ="/employee" style="text-decoration: none;">
            <img src="/images/icons/icon_agency.png" alt="Site settings" class="latest_img" />
            <p style="text-align: center">Сотрудники</p>
        </a>
    </div>
    <div class="mainIcons">
        <a href ="#"
           style="text-decoration: none;">
            <img src="/images/icons/icon_settings.png" alt="Site settings" class="latest_img" />
            <p style="text-align: center">Настройки сайта</p>
        </a>
    </div>
    <div class="mainIcons">
        <a href =""
           style="text-decoration: none;" >
            <img src="/images/icons/icon_password.png" alt="Change password" class="latest_img" />
            <p style="text-align: center">Доступ</p>
        </a>
    </div>

    <div class="mainIcons">
        <a href ="#"
           style="text-decoration: none;">
            <img src="/images/icons/icon_email_128.png" alt="Logout" class="latest_img" />
            <p style="text-align: center">Сообщения</p>
        </a>
    </div>

    <div class="logOut">
        <a href ="/auth/logout"
           style="text-decoration: none;" >
            <img src="/images/icons/icon_logout.png" alt="Logout" class="latest_img" />
            <p style="text-align: center">Выход</p>
        </a>
    </div><?php }} ?>