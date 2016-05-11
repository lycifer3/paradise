{if isset($service->service_id)}<h2>Редактирование услуги</h2>{else}<h2>Добавление услуги</h2>{/if}

<a href="/services">Вернуться назад</a><br/><br/>

<br>
<table class="formTable">
    <tr>
        <td  width="260">
            {foreach from=$errors item=error}
                <span class="error">{$error}</span></br>
            {/foreach}
            <form class="middle" action="" method="POST">
                </br>
                <fieldset>
                    <div class="input-prepend">
                        <label>Название услуги:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="service_name" value="{if !empty($post.service_name)}{$post.service_name}{elseif !empty($service->service_name)}{$service->service_name}{/if}" placeholder="Название услуги">
                    </div>
                    <div class="input-prepend multiple">
                        <label>Описание услуги:</label>
                        <textarea placeholder="Описание услуги" name="service_description" class="formTextarea">{if !empty($post.service_description)}{$post.service_description}{elseif !empty($service->service_description)}{$service->service_description}{/if}</textarea>
                    </div>
                    <div class="input-prepend">
                        <label>Цена продажи:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <input class="span2 formInput" type="text" name="service_price" value="{if !empty($post.service_price)}{$post.service_price}{elseif !empty($service->service_price)}{$service->service_price}{/if}" placeholder="Цена продажи">
                    </div>

                    <div class="input-prepend">
                        <label>Статус:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formSelect" name="service_activity">
                            <option value="1" {if isset($service->service_activity) AND $service->service_activity == 1}selected="selected"{/if}>Активна</option>
                            <option value="0" {if isset($service->service_activity) AND $service->service_activity == 0}selected="selected"{/if}>Неактивна</option>
                        </select>
                    </div>

                    <div class="input-prepend">
                        <input type="submit" class="btn btn-warning saveButtons" value="Сохранить">
                    </div>

                </fieldset>
            </form>
        </td>
    </tr>
</table>