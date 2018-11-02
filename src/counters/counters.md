## <a id="counters"></a> Описание файла о сведениях об общедомовых и квартирных счетчиках и истории показаний по ним

Json файл должен иметь следующую струкуру:
<pre>
{include-json:counters/counters.json}
</pre>


### <a id="counters-array"></a> Описание полей файла


|Поле|Название поля|Тип|Описание|
|---|---|---|---|
|id|Идентификатор в КВАДО.РУ|int||
|houses_cards_id|Идентификатор дома в КВАДО.РУ|int|Для общедомовых приборов учета |
|flats_id|Идентификатор помещения в КВАДО.РУ|int|Для квартирных приборов учета|
|rooms_id|Идентификатор комнаты в КВАДО.РУ|int|Для индивидуальных приборов учета в коммунальных квартирах|
|type|Тип счетчика|enum|Варианты значений:<ul><li>ХВС</li><li>ГВС</li><li>Эл. однотарифный</li><li>Эл. двухтарифный</li><li>Эл. трехтарифный</li><li>Газ</li><li>Отопление</li></ul>|
|title|Название (описание) счетчика|string|Текстовые данные|
|serial|Заводской номер|string|Текстовые данные|
|brand|Марка счетчика|string|Текстовые данные|
|model|Модель счетчика|string|Текстовые данные|
|install_date|Дата установки счетчика|[Дата](#type-date)|См. тип [Дата](#type-date)|
|stamp_date|Дата опломбировки счетчика|[Дата](#type-date)|См. тип [Дата](#type-date)|
|check_date|Дата следующей поверки|[Дата](#type-date)|См. тип [Дата](#type-date)|
|replace_date|Дата замены (вывода из эксплуатации)|[Дата](#type-date)|См. тип [Дата](#type-date)|
|ratio|Коэффициент трансформации (для счетчиков электроэнергии)|int|Поле необходимо только для общедомовых приборов учета|
|loss_ratio|Коэффициент потери (для счетчиков электроэнергии)|int|Поле необходимо только для общедомовых приборов учета|
|unit|Единица измерения (для счетчика отопления)|enum|Для счетчиков отопления, возможные значения:<br />- Гкал<br />- кВт/ч<br />- МВт/ч|
|capacity|Разрядность счетчика|int||
|values|Показания по счетчику|array|[Массив объектов с показаниями](#meters-values-object)|
