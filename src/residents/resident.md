
##### <a id="array-owners-object"></a>Описание объекта массива `residents`

|Поле|Название поля|Тип|Описание|
|---|---|---|---|
|type|Тип жителя(собственника)|enum|Возможные значения:<ul><li>физ. лицо</li><li>юр. лицо</li></ul>|
|main_payer|Основной плательщик|enum|Возможные значения:<ul><li>Да</li><li>Нет</li></ul>|
|share|Доля собственности|string|В формате «142/584», «1/2», «1/1»|
|mobile_phone_1|Мобильный телефон|string||
|mobile_phone_2|Мобильный телефон|string||
|home_phone|Домашний телефон|string||
|work_phone|Рабочий телефон|string||
|email|Email|string||
|email2|Email|string||
|relationship|Родственное отношение|string|Возможные значения:<ul><li>собственник</li><li>наниматель</li><li>квартирант</li><li>муж</li><li>жена</li><li>сын</li><li>дочь</li><li>брат</li><li>сестра</li><li>дедушка</li><li>бабушка</li><li>зять</li><li>тесть</li><li>теща</li><li>свекор</li><li>свекровь</li><li>шурин</li><li>свояченица</li><li>невестка</li><li>деверь</li><li>золовка</li><li>мать</li><li>отец</li><li>внук</li><li>внучка</li><li>опекаемый(ая)</li><li>падчерица</li><li>пасынок</li><li>племянник</li><li>племянница</li><li>нет родственных отношений</li></ul>|
|flats_relation|Отношение к помещению|string|Возможные значения:<ul><li>Собственник</li><li>Житель</li><li>Наниматель (соц. найм)</li><li>Квартирант (арендатор)</li></ul>
|registration_address|Адрес регистрации|string||
|living_address|Адрес места жительства|string||
|date_from|дата начала учета|[Дата](#type-date)|См. тип [Дата](#type-date)
|date_to|дата окончания учета|[Дата](#type-date)|См. тип [Дата](#type-date)
|residence|Регистрация|object|Объект с [данными о регистрации, если физ. лицо](#residence)|
|individual|Физ. лицо|object|Объект с [данными о владельце, если физ. лицо](#individual-object)|
|entity|Юр. лицо|object|Объект с [данными о владельце, если юр. лицо](#entity-object)|

{include:residences/residence.md}

{include:individual/individual.md}

{include:entity/entity.md}