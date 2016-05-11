<a href="/products">Вернуться назад</a><br/><br/>
<ul class="thumbnails">
    <li class="span4">
        <div class="thumbnail">
            <br/>
            {if !empty($product->product_photo)}
            <img src="/images/products/big_{$product->product_photo}" onerror="src='/images/default-big.png'" class="">
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
    <h3>Информация о Товаре</h3><br/>

    <table class="tableInfo">
        <tr>
            <td>Название товара:</td><td>{$product->product_name}</td>
        </tr>
        <tr>
            <td>Дата добавления товара: </td><td> {good_date($product->product_date)}</td>
        </tr>
        <tr>
            <td>Цена закупки товара: </td><td>{$product->product_price_purchases}</td>
        </tr>
        <tr>
            <td>Цена продажи товара: </td><td> {$product->product_price}</td>
        </tr>
        <tr>
            <td>Количество товара: </td><td> {$product->product_count}</td>
        </tr>
        <tr>
            <td>вес товара (в грамах): </td><td>{$product->product_gram}</td>
        </tr>
        <tr>
            <td>Описание товара: </td><td>{$product->product_description}</td>
        </tr>
        <tr>
            <td>Активность: </td><td>{if $product->product_activity == 1}Активен{else}Неактивен{/if}</td>
        </tr>
    </table>
</div>

<div class="clear"></div>



