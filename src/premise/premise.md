|Поле|Название поля|Тип|Описание|
|---|---|---|---|
|flat_number|Номер квартиры (помещения)|string||
|premises_type|Вид помещения|enum|Возможные варианты<ul><li>квартира</li><li>совместная квартира</li><li>коммунальная квартира</li><li>нежилое</li><li>кладовка</li><li>машиноместо</li></ul>|
|overall_area|Общая площадь|float||
|living_area|Жилая площадь|float||
|number_of_rooms|Количество комнат|int||
|entrance|Номер подъезда|string||
|floor|Номер этажа|int||
|radio|Наличие радио|bool|`true` или `false`|
|number_of_tv|Количество ТВ-антенн|int||
|meters|Приборы учета|array|Массив с [объектами, хранящими информацию об индивидуальных приборах учета](#array-meters-object)|
|accounts|Лицевые счета|array|Массив с [объектами, хранящими данные о ЛС](#array-accounts-object) |


{include:rooms/room.md}

{include:accounts/account.md}