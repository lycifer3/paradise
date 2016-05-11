<?php /* Smarty version Smarty-3.1.7, created on 2014-01-22 15:07:22
         compiled from "application/templates/clients/visit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6237890852d6cbfd894399-97504295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '598ac4af4632529431c7ac630b759858c009859d' => 
    array (
      0 => 'application/templates/clients/visit.tpl',
      1 => 1390389820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6237890852d6cbfd894399-97504295',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6cbfd95968',
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'users' => 0,
    'user' => 0,
    'products' => 0,
    'product' => 0,
    'services' => 0,
    'service' => 0,
    'employees' => 0,
    'employee' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6cbfd95968')) {function content_52d6cbfd95968($_smarty_tpl) {?><script type='text/javascript' src="/javascript/client/visit.js"></script>

<a href="/clients/history">Вернуться назад</a><br/><br/>

<h2>Добавление посещения</h2>
<br>
<table class="formTable">
    <tr>
        <td  width="260">
            <?php if (!empty($_smarty_tpl->tpl_vars['errors']->value)){?>
                <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span><br />
                <?php } ?>
            <?php }?>
            <form class="middle" action="" method="POST">
                </br>
                <fieldset>

                    <div class="input-prepend">
                        <label>Дата посещения:</label>
                        <span class="add-on"><i class="icon-calendar"></i></span>
                        <input class="span2 formInput" type="text" id="datepicker" name="visit_date" value="" placeholder="Дата посещения клиента">
                    </div>

                    <div class="input-prepend">
                        <label>Клиент:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formSelect" name="visit_client">
                            <option value="">Выбрать</option>
                            <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->user_surname;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->user_middlename;?>
</option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="input-prepend multiple">
                        <label>Товары:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formMultipleSelect" name="visit_product[]" multiple="multiple">
                            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['product']->value->product_id;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->product_name;?>
</option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="input-prepend multiple">
                        <label>Услуги:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formMultipleSelect" name="visit_service[]" multiple="multiple">
                            <?php  $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['service']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['service']->key => $_smarty_tpl->tpl_vars['service']->value){
$_smarty_tpl->tpl_vars['service']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['service']->value->service_id;?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value->service_name;?>
</option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="input-prepend">
                        <label>Скидка:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formSelect" name="visit_discount">
                            <option value="1">10%</option>
                            <option value="2">20%</option>
                            <option value="3">30%</option>
                            <option value="4">40%</option>
                            <option value="5">50%</option>
                        </select>
                    </div>

                    <div class="input-prepend multiple">
                        <label>Мастер:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formMultipleSelect" name="visit_master[]" multiple="multiple">
                            <?php  $_smarty_tpl->tpl_vars['employee'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['employee']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['employees']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['employee']->key => $_smarty_tpl->tpl_vars['employee']->value){
$_smarty_tpl->tpl_vars['employee']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_id;?>
"><?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_name;?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_surname;?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_middlename;?>
</option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="input-prepend">
                        <input type="submit" class="btn btn-warning saveButtons" value="Дальше">
                    </div>

                </fieldset>
            </form>
        </td>
    </tr>
</table><?php }} ?>