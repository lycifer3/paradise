<?php /* Smarty version Smarty-3.1.7, created on 2014-01-15 23:12:49
         compiled from "application/templates/clients/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74149679352d6f9d1674129-21803064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b87754fe444d3d780047086875c64f5ff7d777ff' => 
    array (
      0 => 'application/templates/clients/index.tpl',
      1 => 1387988156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74149679352d6f9d1674129-21803064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6f9d1726e8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6f9d1726e8')) {function content_52d6f9d1726e8($_smarty_tpl) {?><script type='text/javascript' src="/javascript/client/index.js"></script>

<h2>Список клиентов</h2>
<br>

<a href="/clients/save" class="btn btn-success addButtons">
    <i class="icon-pencil icon-white"></i>&nbsp;&nbsp;Добавить клиента
</a>

<table class="table table-striped table-bordered table-hover adminTable">
    <thead>
        <th>Фото</th>
        <th>ФИО</th>
        <th>Телефон</th>
        <th>Email</th>
        <th>Дата рождения</th>
        <th>Активность</th>
        <th>Действие</th>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
        <tr>
            <td width="90">
                <?php if (!empty($_smarty_tpl->tpl_vars['user']->value->user_avatar)){?>
                    <img src="/images/clients/small_<?php echo $_smarty_tpl->tpl_vars['user']->value->user_avatar;?>
" onerror="src='/images/default.png'" class="img-polaroid" />
                <?php }else{ ?>
                    <img src="/images/default.png" />
                <?php }?>
            </td>
            <td>
                <a href="/clients/view/<?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->user_surname;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->user_middlename;?>
&nbsp;</a>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_phone;?>
&nbsp;</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_email;?>
&nbsp;</td>
            <td><?php echo good_date($_smarty_tpl->tpl_vars['user']->value->user_birthday);?>
</td>
            <td>
                <span class="label label-<?php if ($_smarty_tpl->tpl_vars['user']->value->user_activity==1){?>success<?php }else{ ?>important<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->user_activity==1){?>Активен<?php }else{ ?>Неактивен<?php }?>
                </span>
            </td>
            <td width="120">
                <a href="/clients/save/<?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
" class="btn btn-warning actionButtons">
                    <i class="icon-pencil icon-white"></i>
                </a>
                <a href="" class="btn btn-danger actionButtons deleteUser" data-user-id="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
">
                    <i class="icon-trash icon-white"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<br/>

<div class="pagination pagination-centered">
    <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

    
        
        
        
        
        
        
        
        
        
    
</div><?php }} ?>