<?php /* Smarty version Smarty-3.1.7, created on 2014-01-16 12:41:54
         compiled from "application/templates/employee/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212247657252d7b77293e458-42136116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1182ce63e2332befc6888729ef6e617266067269' => 
    array (
      0 => 'application/templates/employee/index.tpl',
      1 => 1387995294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212247657252d7b77293e458-42136116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employees' => 0,
    'employee' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d7b772a2c58',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d7b772a2c58')) {function content_52d7b772a2c58($_smarty_tpl) {?><script type='text/javascript' src="/javascript/employee/index.js"></script>

<h2>Список сотрудников</h2>
<br>

<a href="/employee/save" class="btn btn-success addButtons">
    <i class="icon-pencil icon-white"></i>&nbsp;&nbsp;Добавить Сотрудника
</a>

<table class="table table-striped table-bordered table-hover adminTable">
    <thead>
    <th>Фото</th>
    <th>ФИО</th>
    <th>Телефон</th>
    <th>Email</th>
    <th>Посещение</th>
    <th>Активность</th>
    <th>Действие</th>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['employee'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['employee']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['employees']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['employee']->key => $_smarty_tpl->tpl_vars['employee']->value){
$_smarty_tpl->tpl_vars['employee']->_loop = true;
?>
            <tr>
                <td width="90">
                    <?php if (!empty($_smarty_tpl->tpl_vars['employee']->value->employee_files)){?>
                    <img src="/images/employee/small_<?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_files;?>
" onerror="src='/images/default.png'" class="img-polaroid">
                        <?php }else{ ?> <img src="/images/default.png" class="img-polaroid">
                    <?php }?>
                </td>
                <td>
                    <a href="/employee/view/<?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_id;?>
"><?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_surname;?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_name;?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_middlename;?>
&nbsp;</a>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_phone;?>
&nbsp;</td>
                <td><?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_email;?>
&nbsp;</td>
                <td><?php echo good_date($_smarty_tpl->tpl_vars['employee']->value->employee_birthday);?>
</td>
                <td>
                    <span class="label label-<?php if ($_smarty_tpl->tpl_vars['employee']->value->employee_activity==1){?>success<?php }else{ ?>important<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['employee']->value->employee_activity==1){?>Активен<?php }else{ ?>Неактивен<?php }?>
                    </span>
                </td>
                <td width="120">
                    <a href="/employee/save/<?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_id;?>
" class="btn btn-warning actionButtons">
                        <i class="icon-pencil icon-white"></i>
                    </a>
                    <a href="" class="btn btn-danger actionButtons deleteEmployee" data-employee-id="<?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_id;?>
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