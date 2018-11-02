### <a id="array-premises-object"></a>  Описание объекта в массиве premises (Помещения)

|Поле|Название поля|Тип|Описание|
|---|---|---|---|
|id|Идентификатор в КВАДО.РУ|int||
|flat_number|Номер квартиры (помещения)|string||
|premises_type|Вид помещения|enum|Возможные варианты<ul><li>квартира</li><li>совместная квартира</li><li>коммунальная квартира</li><li>нежилое</li><li>кладовая</li><li>машиноместо</li></ul>|
|overall_area|Общая площадь|float||
|living_area|Жилая площадь|float||
|number_of_rooms|Количество комнат|int||
|entrance|Номер подъезда|string||
|floor|Номер этажа|int||
|radio|Наличие радио|enum|Возможные значения <ul><li>нет</li><li>есть</li>|
|number_of_tv|Количество ТВ-антенн|int||
|gis_id|Идентификатор в ГИС ЖКХ|string||
|cadastral_number|Кадастровый номер помещения|string||
|elevator|Наличие лифта|enum|Возможные значения <ul><li>нет</li><li>есть</li>|
|internet|Наличие интернета|enum|Возможные значения <ul><li>нет</li><li>есть</li>|
|intercom|Наличие домофона|enum|Возможные значения <ul><li>нет</li><li>есть</li>|
|accounts|Лицевые счета|array|Массив с [объектами, хранящими данные о ЛС](#array-accounts-object) |


{include:rooms/room.md}

{include:accounts/account.md}