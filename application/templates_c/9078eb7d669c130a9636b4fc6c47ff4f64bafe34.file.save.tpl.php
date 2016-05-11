<?php /* Smarty version Smarty-3.1.7, created on 2014-01-22 13:20:19
         compiled from "application/templates/employee/save.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61258213152dfa973f3c149-18045324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9078eb7d669c130a9636b4fc6c47ff4f64bafe34' => 
    array (
      0 => 'application/templates/employee/save.tpl',
      1 => 1387994769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61258213152dfa973f3c149-18045324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee' => 0,
    'errors' => 0,
    'error' => 0,
    'post' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52dfa9741a8b4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dfa9741a8b4')) {function content_52dfa9741a8b4($_smarty_tpl) {?><script type='text/javascript' src="/javascript/employee/save.js"></script>

<a href="/employee">Вернуться назад</a><br/><br/>

<?php if (isset($_smarty_tpl->tpl_vars['employee']->value->employee_id)){?><h2>Редактирование сотрудника</h2><?php }else{ ?><h2>Добавление сотрудника</h2><?php }?>
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
</span>
            <?php } ?>
            <form class="middle" action="" method="POST" enctype="multipart/form-data">
                </br>
                <fieldset>
                    <div class="input-prepend">
                        <label>Фамилия:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="employee_surname" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['employee_surname'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['employee_surname'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['employee']->value->employee_surname)){?><?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_surname;?>
<?php }?>" placeholder="Фамилия клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Имя:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="employee_name" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['employee_name'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['employee_name'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['employee']->value->employee_name)){?><?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_name;?>
<?php }?>" placeholder="Имя клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Отчество:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="employee_middlename" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['employee_middlename'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['employee_middlename'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['employee']->value->employee_middlename)){?><?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_middlename;?>
<?php }?>" placeholder="Отчество клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Дата рождения:</label>
                        <span class="add-on"><i class="icon-calendar"></i></span>
                        <input class="span2 formInput" type="text" name="employee_birthday" id="datepicker" autocomplete="off" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['employee_birthday'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['employee_birthday'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['employee']->value->employee_birthday)){?><?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_birthday;?>
<?php }?>" placeholder="Дата рождения клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Email:</label>
                        <span class="add-on"><i class="icon-envelope"></i></span>
                        <input class="span2 formInput" type="text" name="employee_email" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['employee_email'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['employee_email'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['employee']->value->employee_email)){?><?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_email;?>
<?php }?>"  placeholder="Email клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Skype:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <input class="span2 formInput" type="text" name="employee_skype" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['employee_skype'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['employee_skype'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['employee']->value->employee_skype)){?><?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_skype;?>
<?php }?>" placeholder="Skype клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Телефон:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <input class="span2 formInput" type="text" name="employee_phone" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['employee_phone'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['employee_phone'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['employee']->value->employee_phone)){?><?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_phone;?>
<?php }?>" placeholder="Телефон клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Страна:</label>
                        <span class="add-on"><i class="icon-home"></i></span>
                        <input class="span2 formInput" type="text" name="employee_country" value="Украина" placeholder="Страна клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Город:</label>
                        <span class="add-on"><i class="icon-home"></i></span>
                        <input class="span2 formInput" type="text" name="employee_city" value="Киев" placeholder="Город клиента">
                    </div>

                    <div class="input-prepend">
                        <label>Паспорт:</label>
                        <span class="add-on"><i class="icon-folder-open"></i></span>
                        <input class="span2 formInput" type="text" name="employee_pasport" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['employee_pasport'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['employee_pasport'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['employee']->value->employee_pasport)){?><?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_pasport;?>
<?php }?>" placeholder="Паспорт клиента">
                    </div>

                    <div class="input-prepend">
                        <label>Индетификационный код:</label>
                        <span class="add-on"><i class="icon-folder-close"></i></span>
                        <input class="span2 formInput" type="text" name="employee_code" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['employee_code'])){?><?php echo $_smarty_tpl->tpl_vars['post']->value['employee_code'];?>
<?php }elseif(isset($_smarty_tpl->tpl_vars['employee']->value->employee_code)){?><?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_code;?>
<?php }?>" placeholder="Индетификационный код клиента">
                    </div>

                    <div class="input-prepend">
                        <label>Пол:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formSelect" name="employee_gender">
                            <option value="1"<?php if (isset($_smarty_tpl->tpl_vars['user']->value->user_gender)&&$_smarty_tpl->tpl_vars['user']->value->user_gender==1){?>selected="selected"<?php }?>>Мужской</option>
                            <option value="2">Женский</option>
                        </select>
                    </div>

                    <div class="input-prepend">
                        <label>Статус:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formSelect" name="employee_activity">
                            <option value="1">Активен</option>
                            <option value="0">Неактивен</option>
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
            <?php if (!empty($_smarty_tpl->tpl_vars['employee']->value->employee_files)){?>
            <img src="/images/employee/big_<?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_files;?>
" class="img-polaroid formAvatar">
                <?php }else{ ?> <img src="/images/default-big.png" class="img-polaroid formAvatar">
            <?php }?>
        </td>
    </tr>
</table><?php }} ?>