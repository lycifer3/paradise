<a href="/clients">Вернуться назад</a><br/><br/>
<ul class="thumbnails">
    <li class="span4">
        <div class="thumbnail">
            <br/>
            <img src="/images/image_1.jpg" class="">
            <div style="margin-left: 10px;" id="img_info">
                <br />
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
    <h3>Информация о клиенте</h3><br/>

    <table class="tableInfo">
        <tr>
            <td>ФИО:</td><td> {$user->user_surname} {$user->user_name} {$user->user_middlename}</td>
        </tr>
        <tr>
            <td>Дата рождения: </td><td> {good_date($user->user_birthday)}</td>
        </tr>
        <tr>
            <td>Email: </td><td>{$user->user_email}</td>
        </tr>
        <tr>
            <td>Skype: </td><td> {$user->user_skype}</td>
        </tr>
        <tr>
            <td>Телефон: </td><td> {$user->user_phone}</td>
        </tr>
        <tr>
            <td>Пол: </td><td>{if $user->user_gender == 1}Мужской{else}Женский{/if}</td>
        </tr>
        <tr>
            <td>Активность: </td><td>{if $user->user_activity == 1}Активен{else}Неактивен{/if}</td>
        </tr>
    </table>
</div>

<div class="clear"></div>

<br /><br />

<div>
    <h4>Новый документ:</h4><br/>
    <input type="text" class="formInput" placeholder="Название документа" /><br/>
    <input type="file"><br/>
    <input type="submit" class="btn btn-info fileButtons" value="Добавить документ">
</div>

<br/><br/>

<table class="table table-striped table-bordered table-hover adminTable">
    <tr>
        <td width="35">
            <img src="/images/design/image.png" class="documents" />
        </td>
        <td>
            Паспортные данные
        </td>
        <td>
            1024Кб
        </td>
        <td>
            <a>Просмотр</a>
        </td>
        <td>
            <a>Удалить</a>
        </td>
    </tr>
    <tr>
        <td width="35">
            <img src="/images/design/docx.png" class="documents" />
        </td>
        <td>
            Паспортные данные
        </td>
        <td>
            1024Кб
        </td>
        <td>
            <a>Скачать</a>
        </td>
        <td>
            <a>Удалить</a>
        </td>
    </tr>
    <tr>
        <td width="35">
            <img src="/images/design/zip.png" class="documents" />
        </td>
        <td>
            Паспортные данные
        </td>
        <td>
            1024Кб
        </td>
        <td>
            <a>Скачать</a>
        </td>
        <td>
            <a>Удалить</a>
        </td>
    </tr>
    <tr>
        <td width="35">
            <img src="/images/design/rar.png" class="documents" />
        </td>
        <td>
            Паспортные данные
        </td>
        <td>
            1024Кб
        </td>
        <td>
            <a>Скачать</a>
        </td>
        <td>
            <a>Удалить</a>
        </td>
    </tr>
    <tr>
        <td width="35">
            <img src="/images/design/exel.png" class="documents" />
        </td>
        <td>
            Паспортные данные
        </td>
        <td>
            1024Кб
        </td>
        <td>
            <a>Скачать</a>
        </td>
        <td>
            <a>Удалить</a>
        </td>
    </tr>
</table>