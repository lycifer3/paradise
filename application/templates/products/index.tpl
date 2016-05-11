<script type='text/javascript' src="/javascript/products/index.js"></script>

<h2>Список товаров</h2>
<br>

<a href="/products/save" class="btn btn-success addButtons">
    <i class="icon-pencil icon-white"></i>&nbsp;&nbsp;Добавить товар
</a>

<table class="table table-striped table-bordered table-hover adminTable">
    <thead>
    <th>Фото</th>
    <th>Название</th>
    <th>Цена</th>
    <th>Количество</th>
    <th>Вес</th>
    <th>Активность</th>
    <th>Действие</th>
    </thead>
    <tbody>
    {foreach from=$products item=product}
        <tr>
            <td width="90">
                {if !empty($product->product_photo)}
                    <img src="/images/products/small_{$product->product_photo}" onerror="src='/images/default.png'" class="img-polaroid" />
                {else}
                    <img src="/images/default.png" />
                {/if}
            </td>
            <td>
                <a href="/products/view/{$product->product_id}">{$product->product_name}</a>
            </td>
            <td>{$product->product_price}грн</td>
            <td>{$product->product_count}</td>
            <td>{$product->product_gram}грамм</td>
            <td><span class="label label-{if $product->product_activity == 1}success{else}important{/if}">{if $product->product_activity == 1}Активен{else}Неактивен{/if}</span></td>
            <td width="120">
                <a href="/products/save/{$product->product_id}" class="btn btn-warning actionButtons">
                    <i class="icon-pencil icon-white"></i>
                </a>
                <a href="" class="btn btn-danger actionButtons deleteProduct" data-product-id="{$product->product_id}">
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