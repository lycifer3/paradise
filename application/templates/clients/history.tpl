<script type='text/javascript' src="/javascript/clients/history.js"></script>

<h2>Список посещений</h2>
<br>

<a href="/clients/visit" class="btn btn-success addButtons">
    <i class="icon-pencil icon-white"></i>&nbsp;&nbsp;Добавить посещение
</a>

<table class="table table-striped table-bordered table-hover adminTable">
    <thead>
        <th>Дата</th>
        <th>ФИО</th>
        <th>Сумма покупки</th>
        {*<th>Действие</th>*}
    </thead>
    <tbody>
        {foreach from=$visits item=visit}
            <tr>
                <td>{good_date($visit->visit_date)}</td>
                <td>{$visit->user_surname} {$visit->user_name} {$visit->user_middlename}</td>
                <td>200грн</td>
                {*<td width="120">*}
                    {*<a href="" class="btn btn-danger actionButtons deleteUser">*}
                        {*<i class="icon-trash icon-white"></i>*}
                        {*</a>*}
                {*</td>*}
            </tr>
        {/foreach}
    </tbody>
</table>

<br/>

<div class="pagination pagination-centered">
    <ul>
        {$pagination}
        {*<li><a href="#">Первая</a></li>*}
        {*<li><a href="#">Предыдущая</a></li>*}
        {*<li><a href="#">1</a></li>*}
        {*<li><span>2</span></li>*}
        {*<li><a href="#">3</a></li>*}
        {*<li><a href="#">4</a></li>*}
        {*<li><a href="#">5</a></li>*}
        {*<li><a href="#">Следущая</a></li>*}
        {*<li><a href="#">Первая</a></li>*}
    </ul>
</div>