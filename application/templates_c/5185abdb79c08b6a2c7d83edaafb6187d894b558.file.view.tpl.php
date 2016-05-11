<?php /* Smarty version Smarty-3.1.7, created on 2014-01-14 20:41:55
         compiled from "application/templates/services/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56992778652d582db032194-26140856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5185abdb79c08b6a2c7d83edaafb6187d894b558' => 
    array (
      0 => 'application/templates/services/view.tpl',
      1 => 1389724941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56992778652d582db032194-26140856',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d582db0a2f0',
  'variables' => 
  array (
    'service' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d582db0a2f0')) {function content_52d582db0a2f0($_smarty_tpl) {?><a href="/services">Вернуться назад</a><br/><br/>
<ul class="thumbnails">
    <li class="span4">
        <div class="thumbnail">
            <br/>
            <img src="/images/default-big.png" class="">
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
    <h3>Информация об Услуге</h3><br/>

    <table class="tableInfo">
        <tr>
            <td>Название услуги:</td><td><?php echo $_smarty_tpl->tpl_vars['service']->value->service_name;?>
</td>
        </tr>
        <tr>
            <td>Дата добавления услуги: </td><td> <?php echo good_date($_smarty_tpl->tpl_vars['service']->value->service_date);?>
</td>
        </tr>
        <tr>
            <td>Цена продажи услуги: </td><td> <?php echo $_smarty_tpl->tpl_vars['service']->value->service_price;?>
</td>
        </tr>
        <tr>
            <td>Описание услуги: </td><td><?php echo $_smarty_tpl->tpl_vars['service']->value->service_description;?>
</td>
        </tr>
        <tr>
            <td>Активность: </td><td><?php if ($_smarty_tpl->tpl_vars['service']->value->service_activity==1){?>Активна<?php }else{ ?>Неактивна<?php }?></td>
        </tr>
    </table>
</div>

<div class="clear"></div>



<?php }} ?>