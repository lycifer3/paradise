<script type='text/javascript' src="/javascript/client/index.js"></script>

<h2>Список клиентов</h2>
<br>

<a href="/clients/save" class="btn btn-success addButtons">
    <i class="icon-pencil icon-white"></i>&nbsp;&nbsp;Добавить клиента
</a>

<table class="table table-striped table-bordered table-hover adminTable">
    <thead>
        <th>Фото</th>
        <th>ФИО</th>
        <th>Телефон</th>
        <th>Email</th>
        <th>Дата рождения</th>
        <th>Активность</th>
        <th>Действие</th>
    </thead>
    <tbody>
        {foreach from=$users item=user}
        <tr>
            <td width="90">
                {if !empty($user->user_avatar)}
                    <img src="/images/clients/small_{$user->user_avatar}" onerror="src='/images/default.png'" class="img-polaroid" />
                {else}
                    <img src="/images/default.png" />
                {/if}
            </td>
            <td>
                <a href="/clients/view/{$user->user_id}">{$user->user_surname} {$user->user_name} {$user->user_middlename}&nbsp;</a>
            </td>
            <td>{$user->user_phone}&nbsp;</td>
            <td>{$user->user_email}&nbsp;</td>
            <td>{good_date($user->user_birthday)}</td>
            <td>
                <span class="label label-{if $user->user_activity == 1}success{else}important{/if}">
                    {if $user->user_activity == 1}Активен{else}Неактивен{/if}
                </span>
            </td>
            <td width="120">
                <a href="/clients/save/{$user->user_id}" class="btn btn-warning actionButtons">
                    <i class="icon-pencil icon-white"></i>
                </a>
                <a href="" class="btn btn-danger actionButtons deleteUser" data-user-id="{$user->user_id}">
                    <i class="icon-trash icon-white"></i>
                </a>
            </td>
        </tr>
        {/foreach}
    </tbody>
</table>

<br/>

<div class="pagination pagination-centered">
    {$pagination}
</div>