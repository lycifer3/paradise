<?php /* Smarty version Smarty-3.1.7, created on 2014-01-22 19:58:32
         compiled from "application/templates/clients/order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68655856452d6c5577f1ba5-75464247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '705137c68dc4e0c96368c35566bc4b1b8e5ce932' => 
    array (
      0 => 'application/templates/clients/order.tpl',
      1 => 1390413549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68655856452d6c5577f1ba5-75464247',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6c55783470',
  'variables' => 
  array (
    'visit' => 0,
    'products' => 0,
    'product' => 0,
    'services' => 0,
    'service' => 0,
    'masters' => 0,
    'master' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6c55783470')) {function content_52d6c55783470($_smarty_tpl) {?><script type='text/javascript' src="/javascript/client/order.js"></script>

<h2>Оформление визита</h2>

<div class="order">
    <span class="title">Информация: </span>
    <hr />
    <form action="" method="POST">
        <p>Дата заказа: <span class="visitData"><?php echo good_date($_smarty_tpl->tpl_vars['visit']->value->visit_date);?>
<span></p>
        <p>Клиент: <span class="visitData"><?php echo $_smarty_tpl->tpl_vars['visit']->value->user_surname;?>
 <?php echo $_smarty_tpl->tpl_vars['visit']->value->user_name;?>
 <?php echo $_smarty_tpl->tpl_vars['visit']->value->user_middlename;?>
<span></p>
        <p>Скидка: <span class="visitData">
                        <?php if ($_smarty_tpl->tpl_vars['visit']->value->visit_discount==1){?>10%
                        <?php }elseif($_smarty_tpl->tpl_vars['visit']->value->visit_discount==2){?>20%
                        <?php }elseif($_smarty_tpl->tpl_vars['visit']->value->visit_discount==3){?>30%
                        <?php }elseif($_smarty_tpl->tpl_vars['visit']->value->visit_discount==4){?>40%
                        <?php }elseif($_smarty_tpl->tpl_vars['visit']->value->visit_discount==5){?>50%
                        <?php }?>
                   <span></p>

        <br />
        <span class="title">Товары: </span>
        <br /><br />

        <table class="table table-striped table-bordered table-hover adminTable orderTable">
            <thead>
                <th>Фото</th>
                <th>Название</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Сумма</th>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
            <tr>
                <td width="90">
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['product']->value->product_photo;?>
<?php $_tmp1=ob_get_clean();?><?php if (!empty($_tmp1)){?>
                        <img src="/images/products/small_<?php echo $_smarty_tpl->tpl_vars['product']->value->product_photo;?>
" onerror="src='/images/default.png'" class="img-polaroid" />
                    <?php }else{ ?> <img src="/images/default.png" /><?php }?>
                </td>
                <td>
                    <a href=""><?php echo $_smarty_tpl->tpl_vars['product']->value->product_name;?>
</a>
                </td>
                <td><span class="productPrice"><?php echo $_smarty_tpl->tpl_vars['product']->value->product_price;?>
</span>грн</td>
                <td width="40">
                    <input type="text" name="count[<?php echo $_smarty_tpl->tpl_vars['product']->value->product_id;?>
]" value="1" class="orderInput"/>
                </td>
                <td><span class="productSumm"><?php echo $_smarty_tpl->tpl_vars['product']->value->product_price;?>
</span>грн</td>
            </tr>
            <?php } ?>
            </tbody>
        </table>

        <br />

        <span class="title">Услуги: </span>
        <hr />

        <ul>
            <?php  $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['service']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['service']->key => $_smarty_tpl->tpl_vars['service']->value){
$_smarty_tpl->tpl_vars['service']->_loop = true;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['service']->value->service_name;?>
</li>
            <?php } ?>
        </ul>

        <br />

        <span class="title">Мастера: </span>
        <hr />

        <ul>
            <?php  $_smarty_tpl->tpl_vars['master'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['master']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['masters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['master']->key => $_smarty_tpl->tpl_vars['master']->value){
$_smarty_tpl->tpl_vars['master']->_loop = true;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['master']->value->employee_surname;?>
 <?php echo $_smarty_tpl->tpl_vars['master']->value->employee_name;?>
 <?php echo $_smarty_tpl->tpl_vars['master']->value->employee_middlename;?>
</li>
            <?php } ?>
        </ul>

        <br />

        <input type="submit" class="btn btn-info orderButtons" value="Готово">
    </form>
</div><?php }} ?>