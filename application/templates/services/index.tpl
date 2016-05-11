<script type='text/javascript' src="/javascript/services/index.js"></script>

<h2>Список услуг</h2>
<br>

<a href="/services/save" class="btn btn-success addButtons">
    <i class="icon-pencil icon-white"></i>&nbsp;&nbsp;Добавить услугу
</a>

<table class="table table-striped table-bordered table-hover adminTable">
    <thead>
    <th>Название</th>
    <th>Цена</th>
    <th>Активность</th>
    <th>Действие</th>
    </thead>
    <tbody>
    {foreach from=$services item=service}
        <tr>
            <td>
                <a href="/services/view/{$service->service_id}">{$service->service_name}</a>
            </td>
            <td>{$service->service_price}грн</td>
            <td>
                <span class="label label-{if $service->service_activity == 1}success{else}important{/if}">{if $service->service_activity == 1}Активна{else}Неактивна{/if}
                </span>
            </td>
            <td width="120">
                <a href="/services/save/{$service->service_id}" class="btn btn-warning actionButtons">
                    <i class="icon-pencil icon-white"></i>
                </a>
                <a href="" class="btn btn-danger actionButtons deleteService" data-service-id="{$service->service_id}">
                    <i class="icon-trash icon-white"></i>
                </a>
            </td>
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