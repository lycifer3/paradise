<h2>{if $bonusType == 1}Премия{else}Штраф{/if}</h2>
<br>
<table class="formTable">
    <tr>
        <td  width="260">
            {foreach from=$errors item=error}
                <span class="error">{$error}</span><br />
            {/foreach}
            <form class="middle" action="" method="POST">
                </br>
                <fieldset>
                    <div class="input-prepend">
                        <label>Дата:</label>
                        <span class="add-on"><i class="icon-calendar"></i></span>
                        <input class="span2 formInput" type="text" name="bonus_date" placeholder="Дата" autocomplete="off" id="datepicker">
                    </div>
                    <div class="input-prepend">
                        <label>Сотрудник:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formSelect" name="employee_id">
                            {foreach from=$employees item=employee}
                                <option value="{$employee->employee_id}">{$employee->employee_surname} {$employee->employee_name}</option>
                            {/foreach}
                        </select>
                    </div>

                    <div class="input-prepend">
                        <label>Причина:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="bonus_reason" value="" placeholder="Причина">
                    </div>

                    <div class="input-prepend">
                        <label>Сумма:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="bonus_sum" value="" placeholder="Сумма">
                    </div>

                    <div class="input-prepend">
                        <input type="submit" class="btn btn-warning saveButtons" value="{if $bonusType == 1}Выписать премию{else}Оштрафовать{/if}">
                    </div>

                </fieldset>
            </form>
        </td>
        <td width="220">
            &nbsp;
        </td>
    </tr>
</table>