<script type='text/javascript' src="/javascript/employee/save.js"></script>

<a href="/employee">Вернуться назад</a><br/><br/>

{if isset($employee->employee_id)}<h2>Редактирование сотрудника</h2>{else}<h2>Добавление сотрудника</h2>{/if}
<br>
<table class="formTable">
    <tr>
        <td  width="260">
            {foreach from=$errors item=error}
                <span class="error">{$error}</span>
            {/foreach}
            <form class="middle" action="" method="POST" enctype="multipart/form-data">
                </br>
                <fieldset>
                    <div class="input-prepend">
                        <label>Фамилия:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="employee_surname" value="{if !empty($post.employee_surname)}{$post.employee_surname}{elseif isset($employee->employee_surname)}{$employee->employee_surname}{/if}" placeholder="Фамилия клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Имя:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="employee_name" value="{if !empty($post.employee_name)}{$post.employee_name}{elseif isset($employee->employee_name)}{$employee->employee_name}{/if}" placeholder="Имя клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Отчество:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="employee_middlename" value="{if !empty($post.employee_middlename)}{$post.employee_middlename}{elseif isset($employee->employee_middlename)}{$employee->employee_middlename}{/if}" placeholder="Отчество клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Дата рождения:</label>
                        <span class="add-on"><i class="icon-calendar"></i></span>
                        <input class="span2 formInput" type="text" name="employee_birthday" id="datepicker" autocomplete="off" value="{if !empty($post.employee_birthday)}{$post.employee_birthday}{elseif isset($employee->employee_birthday)}{$employee->employee_birthday}{/if}" placeholder="Дата рождения клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Email:</label>
                        <span class="add-on"><i class="icon-envelope"></i></span>
                        <input class="span2 formInput" type="text" name="employee_email" value="{if !empty($post.employee_email)}{$post.employee_email}{elseif isset($employee->employee_email)}{$employee->employee_email}{/if}"  placeholder="Email клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Skype:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <input class="span2 formInput" type="text" name="employee_skype" value="{if !empty($post.employee_skype)}{$post.employee_skype}{elseif isset($employee->employee_skype)}{$employee->employee_skype}{/if}" placeholder="Skype клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Телефон:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <input class="span2 formInput" type="text" name="employee_phone" value="{if !empty($post.employee_phone)}{$post.employee_phone}{elseif isset($employee->employee_phone)}{$employee->employee_phone}{/if}" placeholder="Телефон клиента">
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
                        <input class="span2 formInput" type="text" name="employee_pasport" value="{if !empty($post.employee_pasport)}{$post.employee_pasport}{elseif isset($employee->employee_pasport)}{$employee->employee_pasport}{/if}" placeholder="Паспорт клиента">
                    </div>

                    <div class="input-prepend">
                        <label>Индетификационный код:</label>
                        <span class="add-on"><i class="icon-folder-close"></i></span>
                        <input class="span2 formInput" type="text" name="employee_code" value="{if !empty($post.employee_code)}{$post.employee_code}{elseif isset($employee->employee_code)}{$employee->employee_code}{/if}" placeholder="Индетификационный код клиента">
                    </div>

                    <div class="input-prepend">
                        <label>Пол:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formSelect" name="employee_gender">
                            <option value="1"{if isset($user->user_gender) AND $user->user_gender == 1}selected="selected"{/if}>Мужской</option>
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
            {if !empty($employee->employee_files)}
            <img src="/images/employee/big_{$employee->employee_files}" class="img-polaroid formAvatar">
                {else} <img src="/images/default-big.png" class="img-polaroid formAvatar">
            {/if}
        </td>
    </tr>
</table>