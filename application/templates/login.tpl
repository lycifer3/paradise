<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login</title>
    <link href="/css/layout.css" rel="stylesheet" type="text/css" />
    <link href="/css/login.css" rel="stylesheet" type="text/css" />
    <link href="/css/theme.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="logincontainer">
    <div id="loginbox">
        <div id="loginheader">
            <img SRC="/images/cp_logo_login.png" alt="Control Panel Login" />
        </div>
        <div id="innerlogin">
            <form method="POST" id="signin" action="">
                {if !empty($error)}
                    <p>Неверный логин/пароль</p><br/>
                {/if}
                <p>Ваш логин:</p>
                <div style="margin-left: -40px">
                    <dt id="login-label">&#160;</dt>
                    <dd id="login-element">
                        <input type="text" name="user_login" id="login" value="" class="logininput" autocomplete="off" />
                    </dd>
                </div>
                <br/>
                <p>Ваш пароль:</p>
                <div style="margin-left: -40px">
                    <dt id="password-label">&#160;</dt>
                    <dd id="password-element">
                        <input type="password" name="user_password" id="password" value="" class="logininput" />
                    </dd>
                </div>

                <div style="margin-left: -40px">
                    <dt id="submit-label">&#160;</dt><dd id="submit-element">
                        <input type="submit" name="submit" id="signin_submit" value="Войти" class="loginbtn" />
                    </dd>
                </div>

            </form>
        </div>
    </div>
    <img SRC="/images/login_fade.png" alt="Fade" />
</div>
</body>
</html>