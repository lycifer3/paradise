<script type='text/javascript' src="/javascript/employee/index.js"></script>

<h2>Список сотрудников</h2>
<br>

<a href="/employee/save" class="btn btn-success addButtons">
    <i class="icon-pencil icon-white"></i>&nbsp;&nbsp;Добавить Сотрудника
</a>

<table class="table table-striped table-bordered table-hover adminTable">
    <thead>
    <th>Фото</th>
    <th>ФИО</th>
    <th>Телефон</th>
    <th>Email</th>
    <th>Посещение</th>
    <th>Активность</th>
    <th>Действие</th>
    </thead>
    <tbody>
        {foreach from=$employees item=employee}
            <tr>
                <td width="90">
                    {if !empty($employee->employee_files)}
                    <img src="/images/employee/small_{$employee->employee_files}" onerror="src='/images/default.png'" class="img-polaroid">
                        {else} <img src="/images/default.png" class="img-polaroid">
                    {/if}
                </td>
                <td>
                    <a href="/employee/view/{$employee->employee_id}">{$employee->employee_surname} {$employee->employee_name} {$employee->employee_middlename}&nbsp;</a>
                </td>
                <td>{$employee->employee_phone}&nbsp;</td>
                <td>{$employee->employee_email}&nbsp;</td>
                <td>{good_date($employee->employee_birthday)}</td>
                <td>
                    <span class="label label-{if $employee->employee_activity == 1}success{else}important{/if}">
                        {if $employee->employee_activity == 1}Активен{else}Неактивен{/if}
                    </span>
                </td>
                <td width="120">
                    <a href="/employee/save/{$employee->employee_id}" class="btn btn-warning actionButtons">
                        <i class="icon-pencil icon-white"></i>
                    </a>
                    <a href="" class="btn btn-danger actionButtons deleteEmployee" data-employee-id="{$employee->employee_id}">
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