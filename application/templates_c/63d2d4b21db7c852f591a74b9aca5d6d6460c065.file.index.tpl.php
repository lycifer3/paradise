<?php /* Smarty version Smarty-3.1.7, created on 2014-01-15 19:57:28
         compiled from "application/templates/services/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104975917752d6cc0893fa11-65705986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63d2d4b21db7c852f591a74b9aca5d6d6460c065' => 
    array (
      0 => 'application/templates/services/index.tpl',
      1 => 1389724412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104975917752d6cc0893fa11-65705986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'services' => 0,
    'service' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6cc089e607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6cc089e607')) {function content_52d6cc089e607($_smarty_tpl) {?><script type='text/javascript' src="/javascript/services/index.js"></script>

<h2>Список услуг</h2>
<br>

<a href="/services/save" class="btn btn-success addButtons">
    <i class="icon-pencil icon-white"></i>&nbsp;&nbsp;Добавить услугу
</a>

<table class="table table-striped table-bordered table-hover adminTable">
    <thead>
    <th>Название</th>
    <th>Цена</th>
    <th>Активность</th>
    <th>Действие</th>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['service']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['service']->key => $_smarty_tpl->tpl_vars['service']->value){
$_smarty_tpl->tpl_vars['service']->_loop = true;
?>
        <tr>
            <td>
                <a href="/services/view/<?php echo $_smarty_tpl->tpl_vars['service']->value->service_id;?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value->service_name;?>
</a>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['service']->value->service_price;?>
грн</td>
            <td>
                <span class="label label-<?php if ($_smarty_tpl->tpl_vars['service']->value->service_activity==1){?>success<?php }else{ ?>important<?php }?>"><?php if ($_smarty_tpl->tpl_vars['service']->value->service_activity==1){?>Активна<?php }else{ ?>Неактивна<?php }?>
                </span>
            </td>
            <td width="120">
                <a href="/services/save/<?php echo $_smarty_tpl->tpl_vars['service']->value->service_id;?>
" class="btn btn-warning actionButtons">
                    <i class="icon-pencil icon-white"></i>
                </a>
                <a href="" class="btn btn-danger actionButtons deleteService" data-service-id="<?php echo $_smarty_tpl->tpl_vars['service']->value->service_id;?>
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
    <ul>
        <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

    </ul>
</div><?php }} ?>