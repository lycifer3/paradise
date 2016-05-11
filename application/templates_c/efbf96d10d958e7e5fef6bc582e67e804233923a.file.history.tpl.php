<?php /* Smarty version Smarty-3.1.7, created on 2014-01-23 12:23:30
         compiled from "application/templates/clients/history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211323690652d6cbfb3a44e0-30700880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efbf96d10d958e7e5fef6bc582e67e804233923a' => 
    array (
      0 => 'application/templates/clients/history.tpl',
      1 => 1390472443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211323690652d6cbfb3a44e0-30700880',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6cbfb42563',
  'variables' => 
  array (
    'visits' => 0,
    'visit' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6cbfb42563')) {function content_52d6cbfb42563($_smarty_tpl) {?><script type='text/javascript' src="/javascript/clients/history.js"></script>

<h2>Список посещений</h2>
<br>

<a href="/clients/visit" class="btn btn-success addButtons">
    <i class="icon-pencil icon-white"></i>&nbsp;&nbsp;Добавить посещение
</a>

<table class="table table-striped table-bordered table-hover adminTable">
    <thead>
        <th>Дата</th>
        <th>ФИО</th>
        <th>Сумма покупки</th>
        
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['visit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['visit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['visits']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['visit']->key => $_smarty_tpl->tpl_vars['visit']->value){
$_smarty_tpl->tpl_vars['visit']->_loop = true;
?>
            <tr>
                <td><?php echo good_date($_smarty_tpl->tpl_vars['visit']->value->visit_date);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['visit']->value->user_surname;?>
 <?php echo $_smarty_tpl->tpl_vars['visit']->value->user_name;?>
 <?php echo $_smarty_tpl->tpl_vars['visit']->value->user_middlename;?>
</td>
                <td>200грн</td>
                
                    
                        
                        
                
            </tr>
        <?php } ?>
    </tbody>
</table>

<br/>

<div class="pagination pagination-centered">
    <ul>
        <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

        
        
        
        
        
        
        
        
        
    </ul>
</div><?php }} ?>