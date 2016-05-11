<table class="table table-striped table-bordered table-hover adminTable">
    <thead>
    <th>Фото</th>
    <th>ФИО</th>
    <th>Статус</th>
    </thead>
    <tbody>
        {if !empty($users)}
            {foreach from=$users item=user}
                <tr>
                    <td width="90">
                        {if !empty($user['userAvatar'])}
                            <img src="/images/{if $user['userType'] == 1}clients{else}employee{/if}/small_{$user['userAvatar']}" onerror="src='/images/default.png'" class="img-polaroid" />
                        {else}
                            <img src="/images/default.png" />
                        {/if}
                    </td>
                    <td>
                        <a href="/{if $user['userType'] == 1}clients{else}employee{/if}/view/{$user['userId']}">{$user['userName']} {$user['userSurname']}</a>
                    </td>
                    <td>{if $user['userType'] == 1}Клиент{else}Сотрудник{/if}</td>
                </tr>
            {/foreach}
        {/if}
    </tbody>
</table>