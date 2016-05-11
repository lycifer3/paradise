<h2>Редактирование клиента</h2>
<br>
<table class="formTable">
    <tr>
        <td  width="260">
            <form class="middle" action="" method="POST">
                </br>
                <fieldset>
                    <div class="input-prepend">
                        <label>Фамилия:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="user_surname" placeholder="Фамилия клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Имя:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="user_name" placeholder="Имя клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Отчество:</label>
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input class="span2 formInput" type="text" name="user_middlename" placeholder="Отчество клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Дата рождения:</label>
                        <span class="add-on"><i class="icon-calendar"></i></span>
                        <input class="span2 formInput" type="text" name="user_birthday" placeholder="Дата рождения клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Email:</label>
                        <span class="add-on"><i class="icon-envelope"></i></span>
                        <input class="span2 formInput" type="text" name="user_email"  placeholder="Email клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Skype:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <input class="span2 formInput" type="text" name="user_skype" placeholder="Skype клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Телефон:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <input class="span2 formInput" type="text" name="user_phone" placeholder="Телефон клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Страна:</label>
                        <span class="add-on"><i class="icon-home"></i></span>
                        <input class="span2 formInput" type="text" name="user_country" value="Украина" placeholder="Страна клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Город:</label>
                        <span class="add-on"><i class="icon-home"></i></span>
                        <input class="span2 formInput" type="text" name="user_city" value="Киев" placeholder="Город клиента">
                    </div>
                    <div class="input-prepend">
                        <label>Пол:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formSelect" name="user_gender">
                            <option value="1">Мужской</option>
                            <option value="2" selected="selected">Женский</option>
                        </select>
                    </div>

                    <div class="input-prepend">
                        <label>Статус:</label>
                        <span class="add-on"><i class="icon-info-sign"></i></span>
                        <select class="span2 formSelect" name="user_activity">
                            <option value="1">Активен</option>
                            <option value="0">Неактивен</option>
                        </select>
                    </div>

                    <div class="input-prepend">
                        <label>Загрузить фото:</label>
                        <input type="file" name="userFile" />
                    </div>

                    <div class="input-prepend">
                        <input type="submit" class="btn btn-warning saveButtons" value="Сохранить">
                    </div>

                </fieldset>
            </form>
        </td>
        <td width="220">
            <img src="/images/image_1.jpg" class="img-polaroid formAvatar">
        </td>
    </tr>
</table>