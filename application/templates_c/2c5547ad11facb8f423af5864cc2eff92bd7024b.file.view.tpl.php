<?php /* Smarty version Smarty-3.1.7, created on 2014-01-21 20:05:09
         compiled from "application/templates/employee/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108711136252deb6d5233c55-70941557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c5547ad11facb8f423af5864cc2eff92bd7024b' => 
    array (
      0 => 'application/templates/employee/view.tpl',
      1 => 1389000024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108711136252deb6d5233c55-70941557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee' => 0,
    'errors' => 0,
    'error' => 0,
    'documents' => 0,
    'document' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52deb6d53100a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52deb6d53100a')) {function content_52deb6d53100a($_smarty_tpl) {?><a href="/employee">Вернуться назад</a><br/><br/>
<ul class="thumbnails">
    <li class="span4">
        <div class="thumbnail">
            <br/>
            <?php if (!empty($_smarty_tpl->tpl_vars['employee']->value->employee_files)){?>
                <img src="/images/employee/big_<?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_files;?>
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
    <h3>Информация о сотруднике</h3><br/>

    <table class="tableInfo">
        <tr>
            <td>ФИО:</td><td> <?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_surname;?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_name;?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_middlename;?>
</td>
        </tr>
        <tr>
            <td>Дата рождения: </td><td> <?php echo good_date($_smarty_tpl->tpl_vars['employee']->value->employee_birthday);?>
</td>
        </tr>
        <tr>
            <td>Email: </td><td><?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_email;?>
</td>
        </tr>
        <tr>
            <td>Skype: </td><td> <?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_skype;?>
</td>
        </tr>
        <tr>
            <td>Телефон: </td><td> <?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_phone;?>
</td>
        </tr>
        <tr>
            <td>Паспртные данные: </td><td> <?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_pasport;?>
</td>
        </tr>
        <tr>
            <td>Идентификационный код: </td><td> <?php echo $_smarty_tpl->tpl_vars['employee']->value->employee_code;?>
</td>
        </tr>
        <tr>
            <td>Пол: </td><td><?php if ($_smarty_tpl->tpl_vars['employee']->value->employee_gender==1){?>Мужской<?php }else{ ?>Женский<?php }?></td>
        </tr>
        <tr>
            <td>Активность: </td><td><?php if ($_smarty_tpl->tpl_vars['employee']->value->employee_activity==1){?>Активен<?php }else{ ?>Неактивен<?php }?></td>
        </tr>
    </table>
</div>

<br /><br />

<div>
    <h4>Новый документ:</h4><br/>
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
    <?php } ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" class="formInput" name="document_name" placeholder="Название документа" /><br/>
        <input type="file" name="employeeFile"><br/>
        <input type="submit" class="btn btn-info fileButtons" value="Добавить документ">
    </form>
</div>

<br/><br/>

<table class="table table-striped table-bordered table-hover adminTable">
    <?php  $_smarty_tpl->tpl_vars['document'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['document']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['documents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['document']->key => $_smarty_tpl->tpl_vars['document']->value){
$_smarty_tpl->tpl_vars['document']->_loop = true;
?>
        <tr>
            <td width="35">
                <img src="/images/design/<?php echo $_smarty_tpl->tpl_vars['document']->value->document_extension;?>
.png" class="documents" />
            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['document']->value->document_name;?>

            </td>
            <td>
                1024Кб
            </td>
            <td>
                <a href="/images/employee/documents/<?php echo $_smarty_tpl->tpl_vars['document']->value->document_file;?>
">Скачать</a>
            </td>
            <td>
                <a href="/employee/deleteDocument/<?php echo $_smarty_tpl->tpl_vars['document']->value->document_id;?>
/<?php echo $_smarty_tpl->tpl_vars['document']->value->document_file;?>
">Удалить</a>
            </td>
        </tr>
    <?php } ?>
</table><?php }} ?>