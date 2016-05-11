<script type='text/javascript' src="/javascript/clients/history.js"></script>

<h2>Список премий</h2>
<br>

<a href="/bonus/add/1" class="btn btn-success addButtons">
    <i class="icon-pencil icon-white"></i>&nbsp;&nbsp;Выписать премию
</a>

<table class="table table-striped table-bordered table-hover adminTable">
    <thead>
    <th>Дата</th>
    <th>Сумма</th>
    <th>Причина</th>
    <th>Сотрудник</th>
    </thead>
    <tbody>
    {foreach from=$bonuses item=bonus}
        <tr>
            <td>{good_date($bonus->bonus_date)}</td>
            <td>{$bonus->bonus_sum}грн</td>
            <td>{$bonus->bonus_reason}</td>
            <td>{$bonus->employee_surname} {$bonus->employee_name}</td>
        </tr>
    {/foreach}
    </tbody>
</table>

<br/>

<div class="pagination pagination-centered">
    <ul>
        {$pagination}
    </ul>
</div>