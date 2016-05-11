<?php /* Smarty version Smarty-3.1.7, created on 2014-01-25 20:09:35
         compiled from "application/templates/clients/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85270350552e3fddfad5515-31964465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1ac049113b47103a784d82a11f0db261fad64cb' => 
    array (
      0 => 'application/templates/clients/view.tpl',
      1 => 1387965997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85270350552e3fddfad5515-31964465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52e3fddfb7479',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e3fddfb7479')) {function content_52e3fddfb7479($_smarty_tpl) {?><a href="/clients">Вернуться назад</a><br/><br/>
<ul class="thumbnails">
    <li class="span4">
        <div class="thumbnail">
            <br/>
            <?php if (!empty($_smarty_tpl->tpl_vars['user']->value->user_avatar)){?>
            <img src="/images/clients/big_<?php echo $_smarty_tpl->tpl_vars['user']->value->user_avatar;?>
" onerror="src='/images/default-big.png'" class="">
                <?php }else{ ?> <img src="/images/default-big.png" class="">
            <?php }?>
            <div style="margin-left: 10px;" id="img_info">
                <br/>
                <span class="label label-important">Важно!!!</span> -
                <span>
                    Не больше 10Мб.<br/>
                </span>
            </div>
            <br />
        </div>
    </li>
</ul>

<div class="userInfo">
    <h3>Информация о клиенте</h3><br/>

    <table class="tableInfo">
        <tr>
            <td>ФИО:</td><td> <?php echo $_smarty_tpl->tpl_vars['user']->value->user_surname;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->user_middlename;?>
</td>
        </tr>
        <tr>
            <td>Дата рождения: </td><td> <?php echo good_date($_smarty_tpl->tpl_vars['user']->value->user_birthday);?>
</td>
        </tr>
        <tr>
            <td>Email: </td><td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_email;?>
</td>
        </tr>
        <tr>
            <td>Skype: </td><td> <?php echo $_smarty_tpl->tpl_vars['user']->value->user_skype;?>
</td>
        </tr>
        <tr>
            <td>Телефон: </td><td> <?php echo $_smarty_tpl->tpl_vars['user']->value->user_phone;?>
</td>
        </tr>
        <tr>
            <td>Пол: </td><td><?php if ($_smarty_tpl->tpl_vars['user']->value->user_gender==1){?>Мужской<?php }else{ ?>Женский<?php }?></td>
        </tr>
        <tr>
            <td>Активность: </td><td><?php if ($_smarty_tpl->tpl_vars['user']->value->user_activity==1){?>Активен<?php }else{ ?>Неактивен<?php }?></td>
        </tr>
    </table>
</div>

<div class="clear"></div>



<?php }} ?>