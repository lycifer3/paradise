<?php /* Smarty version Smarty-3.1.7, created on 2014-01-22 13:22:01
         compiled from "application/templates/services/save.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85469204552dfa9d93bb9f9-24587555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15c980e97dca32e766779e9aa099285f6b569b72' => 
    array (
      0 => 'application/templates/services/save.tpl',
      1 => 1388076493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85469204552dfa9d93bb9f9-24587555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'service' => 0,
    'errors' => 0,
    'error' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52dfa9d948af2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dfa9d948af2')) {function content_52dfa9d948af2($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['service']->value->service_id)){?><h2>Редактирование услуги</h2><?php }else{ ?><h2>Добавление услуги</h2><?php }?>

<a href="/services">Вернуться назад</a><br/><br/>

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
            <form class="middle" action="" method="POST">
                </br>
                <fieldset>
                    <div class="input-prepend">
                        <label>Название услуги:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="service_name" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['service_name'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['service_name'];?>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['service']->value->service_name)){?><?php echo $_smarty_tpl->tpl_vars['service']->value->service_name;?>
<?php }?>" placeholder="Название услуги">
                    </div>
                    <div class="input-prepend multiple">
                        <label>Описание услуги:</label>
                        <textarea placeholder="Описание услуги" name="service_description" class="formTextarea"><?php if (!empty($_smarty_tpl->tpl_vars['post']->value['service_description'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['service_description'];?>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['service']->value->service_description)){?><?php echo $_smarty_tpl->tpl_vars['service']->value->service_description;?>
<?php }?></textarea>
                    </div>
                    <div class="input-prepend">
                        <label>Цена продажи:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <input class="span2 formInput" type="text" name="service_price" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['service_price'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['service_price'];?>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['service']->value->service_price)){?><?php echo $_smarty_tpl->tpl_vars['service']->value->service_price;?>
<?php }?>" placeholder="Цена продажи">
                    </div>

                    <div class="input-prepend">
                        <label>Статус:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formSelect" name="service_activity">
                            <option value="1" <?php if (isset($_smarty_tpl->tpl_vars['service']->value->service_activity)&&$_smarty_tpl->tpl_vars['service']->value->service_activity==1){?>selected="selected"<?php }?>>Активна</option>
                            <option value="0" <?php if (isset($_smarty_tpl->tpl_vars['service']->value->service_activity)&&$_smarty_tpl->tpl_vars['service']->value->service_activity==0){?>selected="selected"<?php }?>>Неактивна</option>
                        </select>
                    </div>

                    <div class="input-prepend">
                        <input type="submit" class="btn btn-warning saveButtons" value="Сохранить">
                    </div>

                </fieldset>
            </form>
        </td>
    </tr>
</table><?php }} ?>