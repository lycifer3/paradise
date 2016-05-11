<?php /* Smarty version Smarty-3.1.7, created on 2014-01-26 12:30:23
         compiled from "application/templates/bonus/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53174177652e4dfd1864061-29475174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45bde392a77bab5a5862824ab35f3dd27bdf1c04' => 
    array (
      0 => 'application/templates/bonus/add.tpl',
      1 => 1390732265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53174177652e4dfd1864061-29475174',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52e4dfd189619',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e4dfd189619')) {function content_52e4dfd189619($_smarty_tpl) {?><h2>Тут либо штраф либо премия</h2>
<br>
<table class="formTable">
    <tr>
        <td  width="260">
            <form class="middle" action="" method="POST">
                </br>
                <fieldset>
                    <div class="input-prepend">
                        <label>Дата:</label>
                        <span class="add-on"><i class="icon-calendar"></i></span>
                        <input class="span2 formInput" type="text" name="user_birthday" placeholder="Дата" autocomplete="off" id="datepicker">
                    </div>
                    <div class="input-prepend">
                        <label>Сотрудник:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formSelect" name="user_gender">
                            <option value="1">Вася</option>
                            <option value="2" selected="selected">Петя</option>
                        </select>
                    </div>

                    <div class="input-prepend">
                        <label>Причина:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="product_name" value="" placeholder="Причина">
                    </div>

                    <div class="input-prepend">
                        <label>Сумма:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="product_name" value="" placeholder="Сумма">
                    </div>

                    <div class="input-prepend">
                        <input type="submit" class="btn btn-warning saveButtons" value="Тут либо поошрить либо оштрафовать">
                    </div>

                </fieldset>
            </form>
        </td>
        <td width="220">
            &nbsp;
        </td>
    </tr>
</table><?php }} ?>