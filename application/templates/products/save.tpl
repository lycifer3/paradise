<a href="/products">Вернуться назад</a><br/><br/>

{if isset($product->product_id)}<h2>Редактирование товара</h2>{else}<h2>Добавление товара</h2>{/if}
<br>
<table class="formTable">
    <tr>
        <td  width="260">
            {foreach from=$errors item=error}
                <span class="error">{$error}</span></br>
            {/foreach}
            <form class="middle" action="" method="POST" enctype="multipart/form-data">
                </br>
                <fieldset>
                    <div class="input-prepend">
                        <label>Название товара:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="product_name" value="{if !empty($post.product_name)}{$post.product_name}{elseif isset($product->product_name)}{$product->product_name}{/if}" placeholder="Название товара">
                    </div>
                    <div class="input-prepend multiple">
                        <label>Описание товара:</label>
                        <textarea placeholder="Описание товара" name="product_description" class="formTextarea">{if !empty($post.product_description)}{$post.product_description}{elseif isset($product->product_description)}{$product->product_description}{/if}</textarea>
                    </div>
                    <div class="input-prepend">
                        <label>Цена закупки:</label>
                        <span class="add-on"><i class="icon-envelope"></i></span>
                        <input class="span2 formInput" type="text" name="product_price_purchases" value="{if !empty($post.product_price_purchases)}{$post.product_price_purchases}{elseif isset($product->product_price_purchases)}{$product->product_price_purchases}{/if}" placeholder="Цена закупки">
                    </div>
                    <div class="input-prepend">
                        <label>Цена продажи:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <input class="span2 formInput" type="text" name="product_price" value="{if !empty($post.product_price)}{$post.product_price}{elseif isset($product->product_price)}{$product->product_price}{/if}" placeholder="Цена продажи">
                    </div>
                    <div class="input-prepend">
                        <label>Кол-во:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <input class="span2 formInput" type="text" name="product_count" value="{if !empty($post.product_count)}{$post.product_count}{elseif isset($product->product_count)}{$product->product_count}{/if}" placeholder="Количество на складе" value="0">
                    </div>
                    <div class="input-prepend">
                        <label>Вес (граммы):</label>
                        <span class="add-on"><i class="icon-home"></i></span>
                        <input class="span2 formInput" type="text" name="product_gram" value="{if !empty($post.product_gram)}{$post.product_gram}{elseif isset($product->product_gram)}{$product->product_gram}{else}0{/if}" placeholder="Вес (граммы)">
                    </div>

                    <div class="input-prepend">
                        <label>Статус:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formSelect" name="product_activity">
                            <option value="1"{if isset($product->product_activity) AND $product->product_activity == 1}selected="selected"{/if}>Активен</option>
                            <option value="0"{if isset($product->product_activity) AND $product->product_activity == 0}selected="selected"{/if}>Неактивен</option>
                        </select>
                    </div>

                    <div class="input-prepend">
                        <label>Загрузить фото:</label>
                        <input type="file" name="productFile" />
                    </div>

                    <div class="input-prepend">
                        <input type="submit" class="btn btn-warning saveButtons" value="Сохранить">
                    </div>

                </fieldset>
            </form>
        </td>
        <td width="220">
            {if isset($product->product_photo)}
            <img src="/images/products/big_{$product->product_photo}" class="img-polaroid formAvatar">
            {else}
            <img src="/images/default-big.png" class="img-polaroid formAvatar">
            {/if}
        </td>
    </tr>
</table>