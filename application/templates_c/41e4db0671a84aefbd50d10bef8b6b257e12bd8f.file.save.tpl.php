<?php /* Smarty version Smarty-3.1.7, created on 2014-01-15 19:57:35
         compiled from "application/templates/products/save.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22644799052d6cc0f14d108-04757102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41e4db0671a84aefbd50d10bef8b6b257e12bd8f' => 
    array (
      0 => 'application/templates/products/save.tpl',
      1 => 1388076438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22644799052d6cc0f14d108-04757102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'errors' => 0,
    'error' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6cc0f25c5c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6cc0f25c5c')) {function content_52d6cc0f25c5c($_smarty_tpl) {?><a href="/products">Вернуться назад</a><br/><br/>

<?php if (isset($_smarty_tpl->tpl_vars['product']->value->product_id)){?><h2>Редактирование товара</h2><?php }else{ ?><h2>Добавление товара</h2><?php }?>
<br>
<table class="formTable">
    <tr>
        <td  width="260">
            <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                <span class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></br>
            <?php } ?>
            <form class="middle" action="" method="POST" enctype="multipart/form-data">
                </br>
                <fieldset>
                    <div class="input-prepend">
                        <label>Название товара:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="product_name" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['product_name'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['product_name'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['product']->value->product_name)){?><?php echo $_smarty_tpl->tpl_vars['product']->value->product_name;?>
<?php }?>" placeholder="Название товара">
                    </div>
                    <div class="input-prepend multiple">
                        <label>Описание товара:</label>
                        <textarea placeholder="Описание товара" name="product_description" class="formTextarea"><?php if (!empty($_smarty_tpl->tpl_vars['post']->value['product_description'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['product_description'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['product']->value->product_description)){?><?php echo $_smarty_tpl->tpl_vars['product']->value->product_description;?>
<?php }?></textarea>
                    </div>
                    <div class="input-prepend">
                        <label>Цена закупки:</label>
                        <span class="add-on"><i class="icon-envelope"></i></span>
                        <input class="span2 formInput" type="text" name="product_price_purchases" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['product_price_purchases'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['product_price_purchases'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['product']->value->product_price_purchases)){?><?php echo $_smarty_tpl->tpl_vars['product']->value->product_price_purchases;?>
<?php }?>" placeholder="Цена закупки">
                    </div>
                    <div class="input-prepend">
                        <label>Цена продажи:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <input class="span2 formInput" type="text" name="product_price" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['product_price'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['product_price'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['product']->value->product_price)){?><?php echo $_smarty_tpl->tpl_vars['product']->value->product_price;?>
<?php }?>" placeholder="Цена продажи">
                    </div>
                    <div class="input-prepend">
                        <label>Кол-во:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <input class="span2 formInput" type="text" name="product_count" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['product_count'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['product_count'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['product']->value->product_count)){?><?php echo $_smarty_tpl->tpl_vars['product']->value->product_count;?>
<?php }?>" placeholder="Количество на складе" value="0">
                    </div>
                    <div class="input-prepend">
                        <label>Вес (граммы):</label>
                        <span class="add-on"><i class="icon-home"></i></span>
                        <input class="span2 formInput" type="text" name="product_gram" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['product_gram'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['product_gram'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['product']->value->product_gram)){?><?php echo $_smarty_tpl->tpl_vars['product']->value->product_gram;?>
<?php }else{ ?>0<?php }?>" placeholder="Вес (граммы)">
                    </div>

                    <div class="input-prepend">
                        <label>Статус:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formSelect" name="product_activity">
                            <option value="1"<?php if (isset($_smarty_tpl->tpl_vars['product']->value->product_activity)&&$_smarty_tpl->tpl_vars['product']->value->product_activity==1){?>selected="selected"<?php }?>>Активен</option>
                            <option value="0"<?php if (isset($_smarty_tpl->tpl_vars['product']->value->product_activity)&&$_smarty_tpl->tpl_vars['product']->value->product_activity==0){?>selected="selected"<?php }?>>Неактивен</option>
                        </select>
                    </div>

                    <div class="input-prepend">
                        <label>Загрузить фото:</label>
                        <input type="file" name="productFile" />
                    </div>

                    <div class="input-prepend">
                        <input type="submit" class="btn btn-warning saveButtons" value="Сохранить">
                    </div>

                </fieldset>
            </form>
        </td>
        <td width="220">
            <?php if (isset($_smarty_tpl->tpl_vars['product']->value->product_photo)){?>
            <img src="/images/products/big_<?php echo $_smarty_tpl->tpl_vars['product']->value->product_photo;?>
" class="img-polaroid formAvatar">
            <?php }else{ ?>
            <img src="/images/default-big.png" class="img-polaroid formAvatar">
            <?php }?>
        </td>
    </tr>
</table><?php }} ?>