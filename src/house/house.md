
Описание полей объекта массива `houses`

|Поле|Название поля|Тип|Описание|
|---|---|---|---|
|address|Адрес дома|String||
|fias_houseguid|Код дома по ФИАС|String||
|oktmo|Код ОКТМО|String||
|cadastral_number|Кадастровый номер дома|String||
|gis_id|Идентификатор дома в ГИС ЖКХ|String||
|entrances|Подъезды|array|Массив с [объектами, хранящими информацию о подъездах](#array-entrances-object)|
|premises|Помещения|array|Массив с [объектами, хранящими информацию о помещениях](#array-premises-object)|


{include:entrances/entrance.md}
{include:premise/premise.md}