<a href="/services">Вернуться назад</a><br/><br/>
<ul class="thumbnails">
    <li class="span4">
        <div class="thumbnail">
            <br/>
            <img src="/images/default-big.png" class="">
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
    <h3>Информация об Услуге</h3><br/>

    <table class="tableInfo">
        <tr>
            <td>Название услуги:</td><td>{$service->service_name}</td>
        </tr>
        <tr>
            <td>Дата добавления услуги: </td><td> {good_date($service->service_date)}</td>
        </tr>
        <tr>
            <td>Цена продажи услуги: </td><td> {$service->service_price}</td>
        </tr>
        <tr>
            <td>Описание услуги: </td><td>{$service->service_description}</td>
        </tr>
        <tr>
            <td>Активность: </td><td>{if $service->service_activity == 1}Активна{else}Неактивна{/if}</td>
        </tr>
    </table>
</div>

<div class="clear"></div>



