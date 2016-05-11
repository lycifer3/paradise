<?php /* Smarty version Smarty-3.1.7, created on 2014-01-26 12:19:58
         compiled from "application/templates/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136174523652d6c5577061e1-90417485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ec420089387ddd883f77a858f3a9746a494e1ef' => 
    array (
      0 => 'application/templates/layout.tpl',
      1 => 1390731600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136174523652d6c5577061e1-90417485',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52d6c5577e277',
  'variables' => 
  array (
    'template' => 0,
    'count' => 0,
    'controller' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6c5577e277')) {function content_52d6c5577e277($_smarty_tpl) {?><html>
<head>
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
    <link type="text/css" href="/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="/css/layout.css" rel="stylesheet" />
    <link type="text/css" href="/css/theme.css" rel="stylesheet" />
    <link type="text/css" href="/css/dev.css" rel="stylesheet" />
    <link type="text/css" href="/css/jquery-ui.min.css" rel="stylesheet" />

    <script type='text/javascript' src="/javascript/jquery-1.7.1.min.js"></script>
    <!--script type='text/javascript' src="/javascript/bootstrap.min.js"></script-->
    <script type='text/javascript' src="/javascript/main.js"></script>
    <script type='text/javascript' src="/javascript/jquery-ui-1.8.17.js"></script>
</head>
<body id="homepage">


<div class="display_none">
    <div id="popup" title="">

    </div>
</div>


<div id="header">
    <a href="" title="">
        <img SRC="/images/cp_logo.png" alt="Control Panel" class="logo" />
    </a>
    <div id="searcharea">
        <form id="userSearch" method="post" action="">
            <input type="text" class="searchbox" id="userName" name="userName" value="" placeholder="Поиск" />
            <input type="submit" name="submit" id="submit" value="Search" class="searchbtn" />
        </form>
    </div>
</div>

<!-- Right Side/Main Content Start -->
<div id="rightside">
    <div class="contentcontainer">

        <div class="headings altheading">
            <h2>Страница администратора</h2>
        </div>
        <div class="contentbox">
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <div style="clear: both;"></div>
        </div>


    </div>
    <div id="footer">
        &copy; 2012 best-marriages.com
    </div>
</div>
<!-- Right Side/Main Content End -->

<!-- Left Dark Bar Start -->
<div id="leftside">

    <div class="user">
        <p><b>Вы зашли как:</b> <span class="username">Администратор</span></p>

        <p class="userbtn">
            <a href="/index" title="">Главная</a>
        </p>
        <p class="userbtn">
            <a href="/auth/logout" title="">Выйти</a>
        </p>
    </div>

    <div class="notifications">
        <p class="notifycount">
            <a href="/events" class="notify"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</a>
        </p>
        <p>
            <a href="/events" class="notify"> Новые уведомления </a>
        </p>
        <p class="smltxt"> Смотреть уведомления </p>
    </div>

    <ul id="nav">
        <li>
            <a class="<?php if ($_smarty_tpl->tpl_vars['controller']->value=='clients'){?>expanded<?php }else{ ?>collapsed<?php }?> heading">Клиенты</a>
            <ul class="navigation">
                <?php if ($_smarty_tpl->tpl_vars['controller']->value=='clients'&&$_smarty_tpl->tpl_vars['action']->value=='index'){?>
                    <li class="heading selected">Список клиентов</li>
                <?php }else{ ?>
                    <li>
                        <a href="/clients" title="">Список клиентов</a>
                    </li>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['controller']->value=='clients'&&$_smarty_tpl->tpl_vars['action']->value=='history'){?>
                    <li class="heading selected">История посещений</li>
                <?php }else{ ?>
                    <li>
                        <a href="/clients/history" title="">История посещений</a>
                    </li>
                <?php }?>
            </ul>
        </li>
        <li>
            <a class="collapsed heading">Продажа</a>
            <ul class="navigation">
                <li>
                    <a href="/products" title="">Товары</a>
                </li>
                <li>
                    <a href="/services" title="">Услуги</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="collapsed heading">Сотрудники</a>
            <ul class="navigation">
                <li>
                    <a href="/employee" title="">Список сотрудников</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="collapsed heading">Зарплата</a>
            <ul class="navigation">
                <li>
                    <a href="" title="">Зарплата</a>
                </li>
                <li>
                    <a href="/fines" title="">Штрафы</a>
                </li>
                <li>
                    <a href="/bonus" title="">Премии</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="collapsed heading">Касса</a>
            <ul class="navigation">
                <li>
                    <a href="" title="">Выручка</a>
                </li>
                <li>
                    <a href="" title="">Учет</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="collapsed heading">Маркетинг</a>
            <ul class="navigation">
                <li>
                    <a href="/events " title="">События</a>
                </li>
                <li>
                    <a href="" title="">Дисконтные карты</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
</body>
</html>
<?php }} ?>