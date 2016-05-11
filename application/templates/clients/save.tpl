<script type='text/javascript' src="/javascript/client/save.js"></script>

<a href="/clients">Вернуться назад</a><br/><br/>

{if isset($user->user_id)}<h2>Редактирование клиента</h2>{else}<h2>Добавление клиента</h2>{/if}
<br>
<table class="formTable">
    <tr>
        <td  width="260">
            {if !empty($errors)}
                {foreach from=$errors item=error}
                    <span class="error">{$error}</span><br />
                {/foreach}
            {/if}
            <form class="middle" action="" method="POST" enctype="multipart/form-data">
                </br>
                <fieldset>
                    <div class="input-prepend">
                        <label>Фамилия:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="user_surname" value="{if !empty($post.user_surname)}{$post.user_surname}{elseif isset($user->user_surname)}{$user->user_surname}{/if}" placeholder="Фамилия клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Имя:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="user_name" value="{if !empty($post.user_name)}{$post.user_name}{elseif isset($user->user_name)}{$user->user_name}{/if}" placeholder="Имя клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Отчество:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="user_middlename" value="{if !empty($post.user_middlename)}{$post.user_middlename}{elseif isset($user->user_middlename)}{$user->user_middlename}{/if}" placeholder="Отчество клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Дата рождения:</label>
                        <span class="add-on"><i class="icon-calendar"></i></span>
                        <input class="span2 formInput" type="text" name="user_birthday" id="datepicker" autocomplete="off" value="{if !empty($post.user_birthday)}{$post.user_birthday}{elseif isset($user->user_birthday)}{$user->user_birthday}{/if}" placeholder="Дата рождения клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Email:</label>
                        <span class="add-on"><i class="icon-envelope"></i></span>
                        <input class="span2 formInput" type="text" name="user_email" value="{if !empty($post.user_email)}{$post.user_email}{elseif isset($user->user_email)}{$user->user_email}{/if}" placeholder="Email клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Skype:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <input class="span2 formInput" type="text" name="user_skype" value="{if !empty($post.user_skype)}{$post.user_skype}{elseif isset($user->user_skype)}{$user->user_skype}{/if}" placeholder="Skype клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Телефон:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <input class="span2 formInput" type="text" name="user_phone" value="{if !empty($post.user_phone)}{$post.user_phone}{elseif isset($user->user_phone)}{$user->user_phone}{/if}" placeholder="Телефон клиента">
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
                            <option value="1" {if isset($user->user_gender) AND $user->user_gender == 1}selected="selected"{/if}>Мужской</option>
                            <option value="2" {if isset($user->user_gender) AND $user->user_gender == 2}selected="selected"{/if}>Женский</option>
                        </select>
                    </div>

                    <div class="input-prepend">
                        <label>Статус:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formSelect" name="user_activity">
                            <option value="1" {if isset($user->user_activity) AND $user->user_activity == 1}selected="selected"{/if}>Активен</option>
                            <option value="0" {if isset($user->user_activity) AND $user->user_activity == 0}selected="selected"{/if}>Неактивен</option>
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
            {if !empty($user->user_avatar)}
            <img src="/images/clients/big_{$user->user_avatar}" onerror="src='/images/default-big.png'" class="img-polaroid formAvatar">
                {else} <img src="/images/default-big.png" class="img-polaroid formAvatar">
            {/if}
        </td>
    </tr>
</table>