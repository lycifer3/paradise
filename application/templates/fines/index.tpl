<script type='text/javascript' src="/javascript/clients/history.js"></script>

<h2>Список штрафов</h2>
<br>

<a href="/bonus/add/2" class="btn btn-success addButtons">
    <i class="icon-pencil icon-white"></i>&nbsp;&nbsp;Оштрафовать
</a>

<table class="table table-striped table-bordered table-hover adminTable">
    <thead>
    <th>Дата</th>
    <th>Сумма</th>
    <th>Причина</th>
    <th>Сотрудник</th>
    </thead>
    <tbody>
    {foreach from=$fines item=fine}
        <tr>
            <td>{good_date($fine->bonus_date)}</td>
            <td>{$fine->bonus_sum}грн</td>
            <td>{$fine->bonus_reason}</td>
            <td>{$fine->employee_surname} {$fine->employee_name}</td>
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