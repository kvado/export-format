
###### <a id="residence"></a>Описание объекта `residence`
|Поле|Название поля|Тип|Обязательное|Описание|
|---|---|---|---|---|
|type|Тип регистрации|enum('const','tmp')|Да|Возможные значения:<ul><li><b>const</b> - по месту жительства (постоянная)</li><li><b>tmp</b> - по месту пребывания (временная)</li></ul><br>||
|date_from|Дата начала регистрации|[Дата](#type-date)|Да|См. тип [Дата](#type-date)|
|date_to|Дата окончания регистрации|[Дата](#type-date)|Нет|См. тип [Дата](#type-date)|
|from|Регистрация|object|Нет|Объект с [листком прибытия](#from)|
|to|Регистрация|object|Нет|Объект с [листком убытия](#to)|
