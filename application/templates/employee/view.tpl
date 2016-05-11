<a href="/employee">Вернуться назад</a><br/><br/>
<ul class="thumbnails">
    <li class="span4">
        <div class="thumbnail">
            <br/>
            {if !empty($employee->employee_files)}
                <img src="/images/employee/big_{$employee->employee_files}" onerror="src='/images/default-big.png'" class="">
            {else} <img src="/images/default-big.png" class="">
            {/if}
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
            <td>ФИО:</td><td> {$employee->employee_surname} {$employee->employee_name} {$employee->employee_middlename}</td>
        </tr>
        <tr>
            <td>Дата рождения: </td><td> {good_date($employee->employee_birthday)}</td>
        </tr>
        <tr>
            <td>Email: </td><td>{$employee->employee_email}</td>
        </tr>
        <tr>
            <td>Skype: </td><td> {$employee->employee_skype}</td>
        </tr>
        <tr>
            <td>Телефон: </td><td> {$employee->employee_phone}</td>
        </tr>
        <tr>
            <td>Паспртные данные: </td><td> {$employee->employee_pasport}</td>
        </tr>
        <tr>
            <td>Идентификационный код: </td><td> {$employee->employee_code}</td>
        </tr>
        <tr>
            <td>Пол: </td><td>{if $employee->employee_gender == 1}Мужской{else}Женский{/if}</td>
        </tr>
        <tr>
            <td>Активность: </td><td>{if $employee->employee_activity == 1}Активен{else}Неактивен{/if}</td>
        </tr>
    </table>
</div>

<br /><br />

<div>
    <h4>Новый документ:</h4><br/>
    {foreach from=$errors item=error}
        <span class="error">{$error}</span>
    {/foreach}
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" class="formInput" name="document_name" placeholder="Название документа" /><br/>
        <input type="file" name="employeeFile"><br/>
        <input type="submit" class="btn btn-info fileButtons" value="Добавить документ">
    </form>
</div>

<br/><br/>

<table class="table table-striped table-bordered table-hover adminTable">
    {foreach from=$documents item=document}
        <tr>
            <td width="35">
                <img src="/images/design/{$document->document_extension}.png" class="documents" />
            </td>
            <td>
                {$document->document_name}
            </td>
            <td>
                1024Кб
            </td>
            <td>
                <a href="/images/employee/documents/{$document->document_file}">Скачать</a>
            </td>
            <td>
                <a href="/employee/deleteDocument/{$document->document_id}/{$document->document_file}">Удалить</a>
            </td>
        </tr>
    {/foreach}
</table>