
Описание полей объекта массива `houses`

|Поле|Название поля|Тип|Описание|
|---|---|---|---|
|address|Адрес дома|string||
|fias_houseguid|Код дома по ФИАС|string||
|oktmo|Код ОКТМО|string||
|cadastral_number|Кадастровый номер дома|string||
|gis_id|Идентификатор дома в ГИС ЖКХ|string||
|entrances|Подъезды|array|Массив с [объектами, хранящими информацию о подъездах](#array-entrances-object)|
|premises|Помещения|array|Массив с [объектами, хранящими информацию о помещениях](#array-premises-object)|


{include:entrances/entrance.md}
{include:premise/premise.md}