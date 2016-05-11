<?php /* Smarty version Smarty-3.1.7, created on 2014-01-15 19:57:33
         compiled from "application/templates/products/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147155497952d6cc0dcda489-76277647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f54e74c641490d46ab050b0e5f1fdd3eaaee05e' => 
    array (
      0 => 'application/templates/products/index.tpl',
      1 => 1389722548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147155497952d6cc0dcda489-76277647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6cc0dd8ba0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6cc0dd8ba0')) {function content_52d6cc0dd8ba0($_smarty_tpl) {?><script type='text/javascript' src="/javascript/products/index.js"></script>

<h2>Список товаров</h2>
<br>

<a href="/products/save" class="btn btn-success addButtons">
    <i class="icon-pencil icon-white"></i>&nbsp;&nbsp;Добавить товар
</a>

<table class="table table-striped table-bordered table-hover adminTable">
    <thead>
    <th>Фото</th>
    <th>Название</th>
    <th>Цена</th>
    <th>Количество</th>
    <th>Вес</th>
    <th>Активность</th>
    <th>Действие</th>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
        <tr>
            <td width="90">
                <?php if (!empty($_smarty_tpl->tpl_vars['product']->value->product_photo)){?>
                    <img src="/images/products/small_<?php echo $_smarty_tpl->tpl_vars['product']->value->product_photo;?>
" onerror="src='/images/default.png'" class="img-polaroid" />
                <?php }else{ ?>
                    <img src="/images/default.png" />
                <?php }?>
            </td>
            <td>
                <a href="/products/view/<?php echo $_smarty_tpl->tpl_vars['product']->value->product_id;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->product_name;?>
</a>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['product']->value->product_price;?>
грн</td>
            <td><?php echo $_smarty_tpl->tpl_vars['product']->value->product_count;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['product']->value->product_gram;?>
грамм</td>
            <td><span class="label label-<?php if ($_smarty_tpl->tpl_vars['product']->value->product_activity==1){?>success<?php }else{ ?>important<?php }?>"><?php if ($_smarty_tpl->tpl_vars['product']->value->product_activity==1){?>Активен<?php }else{ ?>Неактивен<?php }?></span></td>
            <td width="120">
                <a href="/products/save/<?php echo $_smarty_tpl->tpl_vars['product']->value->product_id;?>
" class="btn btn-warning actionButtons">
                    <i class="icon-pencil icon-white"></i>
                </a>
                <a href="" class="btn btn-danger actionButtons deleteProduct" data-product-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->product_id;?>
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