<html>
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

{* JqueryUI *}
<div class="display_none">
    <div id="popup" title="">

    </div>
</div>
{* /JqueryUI *}

<div id="header">
    <a href="" title="">
        <img SRC="/images/cp_logo.png" alt="Control Panel" class="logo" />
    </a>
    <div id="searcharea">
        <form id="userSearch" method="post" action="/search">
            <input type="text" class="searchbox" autocomplete="off" id="userName" name="search" value="" placeholder="Поиск" />
            <input type="submit" name="submit" id="submit" value="Поиск" class="searchbtn" />
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
            {include file = $template}
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
            <a href="/events" class="notify">{$count}</a>
        </p>
        <p>
            <a href="/events" class="notify"> Новые уведомления </a>
        </p>
        <p class="smltxt"> Смотреть уведомления </p>
    </div>

    <ul id="nav">
        <li>
            <a class="{if $controller == 'clients'}expanded{else}collapsed{/if} heading">Клиенты</a>
            <ul class="navigation">
                {if $controller == 'clients' AND $action == 'index'}
                    <li class="heading selected">Список клиентов</li>
                {else}
                    <li>
                        <a href="/clients" title="">Список клиентов</a>
                    </li>
                {/if}

                {if $controller == 'clients' AND $action == 'history'}
                    <li class="heading selected">История посещений</li>
                {else}
                    <li>
                        <a href="/clients/history" title="">История посещений</a>
                    </li>
                {/if}
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
            </ul>
        </li>
        <li>
            <a class="collapsed heading">Маркетинг</a>
            <ul class="navigation">
                <li>
                    <a href="/events " title="">События</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
</body>
</html>
