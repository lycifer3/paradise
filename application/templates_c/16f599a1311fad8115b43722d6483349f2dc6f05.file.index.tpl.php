<?php /* Smarty version Smarty-3.1.7, created on 2014-01-26 12:13:22
         compiled from "application/templates/fines/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213209007552e4dde6c73d09-36650393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16f599a1311fad8115b43722d6483349f2dc6f05' => 
    array (
      0 => 'application/templates/fines/index.tpl',
      1 => 1390731154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213209007552e4dde6c73d09-36650393',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52e4dde6ca527',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e4dde6ca527')) {function content_52e4dde6ca527($_smarty_tpl) {?><script type='text/javascript' src="/javascript/clients/history.js"></script>

<h2>Список штрафов</h2>
<br>

<a href="/bonus/add" class="btn btn-success addButtons">
    <i class="icon-pencil icon-white"></i>&nbsp;&nbsp;Оштрафовать
</a>

<table class="table table-striped table-bordered table-hover adminTable">
    <thead>
    <th>Дата</th>
    <th>Сумма</th>
    <th>Причина</th>
    </thead>
    <tbody>
    <tr>
        <td>25 февраля 2014</td>
        <td>50грн</td>
        <td>подахуел малеха</td>
    </tr>
    </tbody>
</table>

<br/>

<div class="pagination pagination-centered">
    <ul>
        <li><a href="#">Первая</a></li>
        <li><a href="#">Предыдущая</a></li>
        <li><a href="#">1</a></li>
        <li><span>2</span></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">Следущая</a></li>
        <li><a href="#">Первая</a></li>
    </ul>
</div><?php }} ?>