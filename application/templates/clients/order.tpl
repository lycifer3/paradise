<script type='text/javascript' src="/javascript/client/order.js"></script>

<h2>Оформление визита</h2>

<div class="order">
    <span class="title">Информация: </span>
    <hr />
    <form action="" method="POST">
        <p>Дата заказа: <span class="visitData">{good_date($visit->visit_date)}<span></p>
        <p>Клиент: <span class="visitData">{$visit->user_surname} {$visit->user_name} {$visit->user_middlename}<span></p>
        <p>Скидка: <span class="visitData">
                        {if $visit->visit_discount == 1}10%
                        {elseif $visit->visit_discount == 2}20%
                        {elseif $visit->visit_discount == 3}30%
                        {elseif $visit->visit_discount == 4}40%
                        {elseif $visit->visit_discount == 5}50%
                        {/if}
                   <span></p>

        <br />
        <span class="title">Товары: </span>
        <br /><br />

        <table class="table table-striped table-bordered table-hover adminTable orderTable">
            <thead>
                <th>Фото</th>
                <th>Название</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Сумма</th>
            </thead>
            <tbody>
            {foreach from=$products item=product}
            <tr>
                <td width="90">
                    {if !empty({$product->product_photo})}
                        <img src="/images/products/small_{$product->product_photo}" onerror="src='/images/default.png'" class="img-polaroid" />
                    {else} <img src="/images/default.png" />{/if}
                </td>
                <td>
                    <a href="">{$product->product_name}</a>
                </td>
                <td><span class="productPrice">{$product->product_price}</span>грн</td>
                <td width="40">
                    <input type="text" name="count[{$product->product_id}]" value="1" class="orderInput"/>
                </td>
                <td><span class="productSumm">{$product->product_price}</span>грн</td>
            </tr>
            {/foreach}
            </tbody>
        </table>

        <br />

        <span class="title">Услуги: </span>
        <hr />

        <ul>
            {foreach from=$services item=service}
                <li>{$service->service_name}</li>
            {/foreach}
        </ul>

        <br />

        <span class="title">Мастера: </span>
        <hr />

        <ul>
            {foreach from=$masters item=master}
                <li>{$master->employee_surname} {$master->employee_name} {$master->employee_middlename}</li>
            {/foreach}
        </ul>

        <br />

        <input type="submit" class="btn btn-info orderButtons" value="Готово">
    </form>
</div>