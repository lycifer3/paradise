<?php /* Smarty version Smarty-3.1.7, created on 2014-01-14 20:29:55
         compiled from "application/templates/products/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33791089952d57b8f0d9e48-78040891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0172a370df69e9ca19efb35ca34bc340fc49754' => 
    array (
      0 => 'application/templates/products/view.tpl',
      1 => 1389724232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33791089952d57b8f0d9e48-78040891',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d57b8f0e171',
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d57b8f0e171')) {function content_52d57b8f0e171($_smarty_tpl) {?><a href="/products">Вернуться назад</a><br/><br/>
<ul class="thumbnails">
    <li class="span4">
        <div class="thumbnail">
            <br/>
            <?php if (!empty($_smarty_tpl->tpl_vars['product']->value->product_photo)){?>
            <img src="/images/products/big_<?php echo $_smarty_tpl->tpl_vars['product']->value->product_photo;?>
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
    <h3>Информация о Товаре</h3><br/>

    <table class="tableInfo">
        <tr>
            <td>Название товара:</td><td><?php echo $_smarty_tpl->tpl_vars['product']->value->product_name;?>
</td>
        </tr>
        <tr>
            <td>Дата добавления товара: </td><td> <?php echo good_date($_smarty_tpl->tpl_vars['product']->value->product_date);?>
</td>
        </tr>
        <tr>
            <td>Цена закупки товара: </td><td><?php echo $_smarty_tpl->tpl_vars['product']->value->product_price_purchases;?>
</td>
        </tr>
        <tr>
            <td>Цена продажи товара: </td><td> <?php echo $_smarty_tpl->tpl_vars['product']->value->product_price;?>
</td>
        </tr>
        <tr>
            <td>Количество товара: </td><td> <?php echo $_smarty_tpl->tpl_vars['product']->value->product_count;?>
</td>
        </tr>
        <tr>
            <td>вес товара (в грамах): </td><td><?php echo $_smarty_tpl->tpl_vars['product']->value->product_gram;?>
</td>
        </tr>
        <tr>
            <td>Описание товара: </td><td><?php echo $_smarty_tpl->tpl_vars['product']->value->product_description;?>
</td>
        </tr>
        <tr>
            <td>Активность: </td><td><?php if ($_smarty_tpl->tpl_vars['product']->value->product_activity==1){?>Активен<?php }else{ ?>Неактивен<?php }?></td>
        </tr>
    </table>
</div>

<div class="clear"></div>



<?php }} ?>