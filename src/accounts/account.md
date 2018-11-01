
#### <a id="array-accounts-object"></a>Описание объекта массива `accounts`

|Поле|Название поля|Тип|Описание|
|---|---|---|---|
|account|Номер лицевого счета|string||
|date_from|Дата открытия ЛС|[Дата](#type-date)|См. тип [Дата](#type-date)|
|date_to|Дата закрытия ЛС|[Дата](#type-date)|См. тип [Дата](#type-date)|
|registered|Количество зарегистрированных|int||
|residents_count|Количество проживающих|int||
|saldo|Начальное сальдо|decimal(10,2)||
|saldo_period|Начальное сальдо|[Дата](#type-date)||
|calculated_area|Расчетная площадь|float||
|residents|Жители(Собственники)|array|Массив с [объектами, хранящими информацию о жителях и собственниках](#array-owners-object)|
|rooms|Комнаты|array|Массив с [объектами, хранящими информацию о комнатах ЛС](#array-rooms-object)|


{include:residents/resident.md}