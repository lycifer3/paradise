<?php /* Smarty version Smarty-3.1.7, created on 2014-01-25 16:45:53
         compiled from "application/templates/clients/save.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51300484052e3ce21ee1949-60774189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9577426b9e60a754aa0a94c38528d3ae1a88d2da' => 
    array (
      0 => 'application/templates/clients/save.tpl',
      1 => 1387995328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51300484052e3ce21ee1949-60774189',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'errors' => 0,
    'error' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52e3ce2211c09',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e3ce2211c09')) {function content_52e3ce2211c09($_smarty_tpl) {?><script type='text/javascript' src="/javascript/client/save.js"></script>

<a href="/clients">Вернуться назад</a><br/><br/>

<?php if (isset($_smarty_tpl->tpl_vars['user']->value->user_id)){?><h2>Редактирование клиента</h2><?php }else{ ?><h2>Добавление клиента</h2><?php }?>
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
            <form class="middle" action="" method="POST" enctype="multipart/form-data">
                </br>
                <fieldset>
                    <div class="input-prepend">
                        <label>Фамилия:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="user_surname" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['user_surname'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['user_surname'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['user']->value->user_surname)){?><?php echo $_smarty_tpl->tpl_vars['user']->value->user_surname;?>
<?php }?>" placeholder="Фамилия клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Имя:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="user_name" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['user_name'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['user_name'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['user']->value->user_name)){?><?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
<?php }?>" placeholder="Имя клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Отчество:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="user_middlename" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['user_middlename'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['user_middlename'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['user']->value->user_middlename)){?><?php echo $_smarty_tpl->tpl_vars['user']->value->user_middlename;?>
<?php }?>" placeholder="Отчество клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Дата рождения:</label>
                        <span class="add-on"><i class="icon-calendar"></i></span>
                        <input class="span2 formInput" type="text" name="user_birthday" id="datepicker" autocomplete="off" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['user_birthday'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['user_birthday'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['user']->value->user_birthday)){?><?php echo $_smarty_tpl->tpl_vars['user']->value->user_birthday;?>
<?php }?>" placeholder="Дата рождения клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Email:</label>
                        <span class="add-on"><i class="icon-envelope"></i></span>
                        <input class="span2 formInput" type="text" name="user_email" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['user_email'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['user_email'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['user']->value->user_email)){?><?php echo $_smarty_tpl->tpl_vars['user']->value->user_email;?>
<?php }?>" placeholder="Email клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Skype:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <input class="span2 formInput" type="text" name="user_skype" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['user_skype'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['user_skype'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['user']->value->user_skype)){?><?php echo $_smarty_tpl->tpl_vars['user']->value->user_skype;?>
<?php }?>" placeholder="Skype клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Телефон:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <input class="span2 formInput" type="text" name="user_phone" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['user_phone'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['user_phone'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['user']->value->user_phone)){?><?php echo $_smarty_tpl->tpl_vars['user']->value->user_phone;?>
<?php }?>" placeholder="Телефон клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Страна:</label>
                        <span class="add-on"><i class="icon-home"></i></span>
                        <input class="span2 formInput" type="text" name="user_country" value="Украина" placeholder="Страна клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Город:</label>
                        <span class="add-on"><i class="icon-home"></i></span>
                        <input class="span2 formInput" type="text" name="user_city" value="Киев" placeholder="Город клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Пол:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formSelect" name="user_gender">
                            <option value="1" <?php if (isset($_smarty_tpl->tpl_vars['user']->value->user_gender)&&$_smarty_tpl->tpl_vars['user']->value->user_gender==1){?>selected="selected"<?php }?>>Мужской</option>
                            <option value="2" <?php if (isset($_smarty_tpl->tpl_vars['user']->value->user_gender)&&$_smarty_tpl->tpl_vars['user']->value->user_gender==2){?>selected="selected"<?php }?>>Женский</option>
                        </select>
                    </div>

                    <div class="input-prepend">
                        <label>Статус:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formSelect" name="user_activity">
                            <option value="1" <?php if (isset($_smarty_tpl->tpl_vars['user']->value->user_activity)&&$_smarty_tpl->tpl_vars['user']->value->user_activity==1){?>selected="selected"<?php }?>>Активен</option>
                            <option value="0" <?php if (isset($_smarty_tpl->tpl_vars['user']->value->user_activity)&&$_smarty_tpl->tpl_vars['user']->value->user_activity==0){?>selected="selected"<?php }?>>Неактивен</option>
                        </select>
                    </div>

                    <div class="input-prepend">
                        <label>Загрузить фото:</label>
                        <input type="file" name="userFile" />
                    </div>

                    <div class="input-prepend">
                        <input type="submit" class="btn btn-warning saveButtons" value="Сохранить">
                    </div>

                </fieldset>
            </form>
        </td>
        <td width="220">
            <?php if (!empty($_smarty_tpl->tpl_vars['user']->value->user_avatar)){?>
            <img src="/images/clients/big_<?php echo $_smarty_tpl->tpl_vars['user']->value->user_avatar;?>
" onerror="src='/images/default-big.png'" class="img-polaroid formAvatar">
                <?php }else{ ?> <img src="/images/default-big.png" class="img-polaroid formAvatar">
            <?php }?>
        </td>
    </tr>
</table><?php }} ?>