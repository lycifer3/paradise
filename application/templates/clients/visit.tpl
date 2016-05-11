<script type='text/javascript' src="/javascript/client/visit.js"></script>

<a href="/clients/history">Вернуться назад</a><br/><br/>

<h2>Добавление посещения</h2>
<br>
<table class="formTable">
    <tr>
        <td  width="260">
            {if !empty($errors)}
                {foreach from=$errors item=error}
                    <span class="error">{$error}</span><br />
                {/foreach}
            {/if}
            <form class="middle" action="" method="POST">
                </br>
                <fieldset>

                    <div class="input-prepend">
                        <label>Дата посещения:</label>
                        <span class="add-on"><i class="icon-calendar"></i></span>
                        <input class="span2 formInput" type="text" id="datepicker" name="visit_date" value="" placeholder="Дата посещения клиента">
                    </div>

                    <div class="input-prepend">
                        <label>Клиент:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formSelect" name="visit_client">
                            <option value="">Выбрать</option>
                            {foreach from=$users item=user}
                            <option value="{$user->user_id}">{$user->user_name} {$user->user_surname} {$user->user_middlename}</option>
                            {/foreach}
                        </select>
                    </div>

                    <div class="input-prepend multiple">
                        <label>Товары:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formMultipleSelect" name="visit_product[]" multiple="multiple">
                            {foreach from=$products item=product}
                            <option value="{$product->product_id}">{$product->product_name}</option>
                            {/foreach}
                        </select>
                    </div>

                    <div class="input-prepend multiple">
                        <label>Услуги:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formMultipleSelect" name="visit_service[]" multiple="multiple">
                            {foreach from=$services item=service}
                                <option value="{$service->service_id}">{$service->service_name}</option>
                            {/foreach}
                        </select>
                    </div>

                    <div class="input-prepend">
                        <label>Скидка:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formSelect" name="visit_discount">
                            <option value="1">10%</option>
                            <option value="2">20%</option>
                            <option value="3">30%</option>
                            <option value="4">40%</option>
                            <option value="5">50%</option>
                        </select>
                    </div>

                    <div class="input-prepend multiple">
                        <label>Мастер:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formMultipleSelect" name="visit_master[]" multiple="multiple">
                            {foreach from=$employees item=employee}
                                <option value="{$employee->employee_id}">{$employee->employee_name} {$employee->employee_surname} {$employee->employee_middlename}</option>
                            {/foreach}
                        </select>
                    </div>

                    <div class="input-prepend">
                        <input type="submit" class="btn btn-warning saveButtons" value="Дальше">
                    </div>

                </fieldset>
            </form>
        </td>
    </tr>
</table>