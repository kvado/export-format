# export-format
Описание формата файла для экспорта данных в сторонние системы

<h2>Сведения о домах, помещениях, комнатах, лицевых счетах, собственниках, регистрациях.</h2>

Json файл должен иметь следующую струкуру:
<pre>
{
  "houses": [
    {
      "id": "...",
      "address": "...",
      "fias_houseguid": "...",
      "oktmo": "...",
      "cadastral_number": "",
      "gis_id": "...",
      "entrances": [
        {
          "id": "...",
          "number": "...",
          "floors": "..."
        }
      ],
      "premises": [
        {
          "id": "...",
          "flat_number": "...",
          "premises_type": "...",
          "overall_area": "...",
          "living_area": "...",
          "number_of_rooms": "...",
          "entrance": "...",
          "floor": "...",
          "radio": "...",
          "number_of_tv": "...",
          "gis_id": "...",
          "elevator": "...",
          "internet": "...",
          "intercom": "...",
          "cadastral_number": "...",
          "rooms": [
            {
              "id": "...",
              "number": "...",
              "type": "...",
              "title": "...",
              "area": "...",
              "balcony_area": "...",
              "loggia_area": "...",
              "rooms_layout": "...",
              "entrance": "...",
              "rooms_height": "...",
              "floor_covering": "...",
              "comment": "...",
              "radio": "...",
              "number_of_tv": "...",
              "gis_id": "..."
            }
          ],
          "accounts": [
            {
              "id": "...",
              "account": "...",
              "date_from": "...",
              "date_to": "...",
              "registered": "...",
              "residents_count": "...",
              "saldo": "...",
              "saldo_period": "...",
              "calculated_area": "...",
              "old_account": "...",
              "property_type": "...",
              "gis_id": "...",
              "gis_zhkh_id": "...",
              "rooms_id": "...",
              "residents": [
                {
                  "id": "...",
                  "type": "...",
                  "main_payer": "...",
                  "share": "1\/2",
                  "mobile_phone_1": "...",
                  "mobile_phone_2": "...",
                  "home_phone": "...",
                  "work_phone": "...",
                  "email": "...",
                  "email2": "...",
                  "relationship": "...",
                  "registration_address": "...",
                  "living_address": "...",
                  "date_from": "...",
                  "date_to": "...",
                  "residence": [
                    {
                      "type": "...",
                      "date_from": "...",
                      "date_to": "...",
                      "from": {
                        "country": "...",
                        "region": "...",
                        "district": "...",
                        "city": "...",
                        "locality": "...",
                        "street": "...",
                        "house": "...",
                        "flat": "..."
                      },
                      "to": {
                        "country": "...",
                        "region": "...",
                        "district": "...",
                        "city": "...",
                        "locality": "...",
                        "street": "...",
                        "house": "...",
                        "flat": "..."
                      }
                    }
                  ],
                  "individual": {
                    "firstname": "...",
                    "lastname": "...",
                    "patronymic": "...",
                    "document_type": "...",
                    "document_serial": "...",
                    "document_number": "...",
                    "document_issued": "...",
                    "document_code": "...",
                    "document_issue_date": "...",
                    "ssn": "...",
                    "birthdate": "...",
                    "sex": "...",
                    "birthplace_country": "...",
                    "birthplace_region": "...",
                    "birthplace_district": "...",
                    "birthplace_city": "...",
                    "birthplace_locality": "...",
                    "citizenship": "...",
                    "military_liability": "..."
                  },
                  "entity": {
                    "title": "...",
                    "inn": "...",
                    "kpp": "...",
                    "ogrn": "...",
                    "legal_address": "...",
                    "head_fullname": "...",
                    "head_post": "...",
                    "bic": "...",
                    "bank": "...",
                    "bank_account": "...",
                    "bank_corr_account": "..."
                  }
                }
              ]
            }
          ]
        }
      ]
    }
  ]
}
</pre>
Объекта массива houses (дома), который включает в себя:


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



## <a id="array-entrances-object"></a> Описание полей оъекта в массиве `entrances`

|Поле|Название поля|Тип|Описание|
|---|---|---|---|
|number|Номер подъезда|string|---|
|floors|Количество этажей|Integer|---|

##Описание объекта в массиве premises (Помещения)

|Поле|Название поля|Тип|Описание|
|---|---|---|---|
|flat_number|Номер квартиры (помещения)|string||
|premises_type|Вид помещения|enum|Возможные варианты<ul><li>квартира</li><li>совместная квартира</li><li>коммунальная квартира</li><li>нежилое</li><li>кладовка</li><li>машиноместо</li></ul>|
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



##### <a id="array-rooms-object"></a>Описание объекта массива `rooms`

|Поле|Название поля|Тип|Описание|
|---|---|---|---|
|number|Номер комнаты|string||
|type|Тип комнаты|enum|Возможные значения<ul><li>Жилая комната</li><li>Кухня</li><li>Кухня-столовая</li><li>Туалет</li><li>Ванная</li><li>Прихожая</li><li>Коридор</li><li>Кладовая</li><li>Жилая комната-кухня</li><li>Совмещенный санузел</li></ul>|
|title|Название комнаты|string||
|area|Площадь|float||
|balcony_area|Площадь балкона|float||
|loggia_area|Площадь лоджии|float||
|rooms_height|Высота потолка|float||
|rooms_layout|Планировка комнаты|enum|Возможные значения<ul><li>Изолированная</li><li>Смежная</li><li>Смежно-изолированная</li></ul>|
|entrance|Вход|enum|Возможные значения<ul><li>Из коридора</li><li>Из прихожей</li><li>Из комнаты</li></ul>|
|floor_covering|Покрытие пола|enum|Возможные значения<ul><li>Керамическая плитка</li><li>Паркет</li><li>Паркетная доска</li><li>Линолеум</li><li>Ламинат</li></ul>|
|comment|Примечание|string||
|radio|Наличие радио|enum|Возможные значения <ul><li>нет</li><li>есть</li>|
|number_of_tv|Количество ТВ антенн|int||
|gis_id|Идентификатор в ГИС ЖКХ|sting||


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
|old_account|Старый лицевой счет|string||
|property_type|Тип собственности|enum|<ul><li>Частная физ. лицо</li><li>Частная юр. лицо</li><li>Муниципальная</li><li>Государственная</li><li>Свободное помещение</li><li>Застройщик</li></ul>|
|gis_id||string|Единый лицевой счет ГИС ЖКХ|
|gis_zhkh_id||string|Идентификатор ЖКУ ГИС ЖКХ|
|rooms_id||int|id комнаты, если ЛС привязан к комнате (указывается для коммунальной квартиры)|
|residents|Жители(Собственники)|array|Массив с [объектами, хранящими информацию о жителях и собственниках](#array-owners-object)|



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
|relationship|enum|string|Возможные значения:<ul><li>собственник</li><li>наниматель</li><li>квартирант</li><li>муж</li><li>жена</li><li>сын</li><li>дочь</li><li>брат</li><li>сестра</li><li>дедушка</li><li>бабушка</li><li>зять</li><li>тесть</li><li>теща</li><li>свекор</li><li>свекровь</li><li>шурин</li><li>свояченица</li><li>невестка</li><li>деверь</li><li>золовка</li><li>мать</li><li>отец</li><li>внук</li><li>внучка</li><li>опекаемый(ая)</li><li>падчерица</li><li>пасынок</li><li>племянник</li><li>племянница</li><li>нет родственных отношений</li></ul>|
|registration_address|Адрес регистрации|string||
|living_address|Адрес места жительства|string||
|date_from|дата начала учета|[Дата](#type-date)|См. тип [Дата](#type-date)
|date_to|дата окончания учета|[Дата](#type-date)|См. тип [Дата](#type-date)
|residence|Регистрация|object|Объект с [данными о регистрации, если физ. лицо](#residence)|
|individual|Физ. лицо|object|Объект с [данными о владельце, если физ. лицо](#individual-object)|
|entity|Юр. лицо|object|Объект с [данными о владельце, если юр. лицо](#entity-object)|


###### <a id="residence"></a>Описание объекта `residence`
|Поле|Название поля|Тип|Обязательное|Описание|
|---|---|---|---|---|
|type|Тип регистрации|enum('const','tmp')|Да|Возможные значения:<ul><li><b>const</b> - по месту жительства (постоянная)</li><li><b>tmp</b> - по месту пребывания (временная)</li></ul><br>||
|date_from|Дата начала регистрации|[Дата](#type-date)|Да|См. тип [Дата](#type-date)|
|date_to|Дата окончания регистрации|[Дата](#type-date)|Нет|См. тип [Дата](#type-date)|
|from|Регистрация|object|Нет|Объект с [листком прибытия](#from)|
|to|Регистрация|object|Нет|Объект с [листком убытия](#to)|


###### <a id="from"></a>Описание объекта `from`
|Поле|Название поля|Тип|Обязательное|Описание|
|---|---|---|---|---|
|country|Страна|string|Нет||
|region|Страна|string|Нет||
|district|Страна|string|Нет||
|city|Страна|string|Нет||
|locality|Страна|string|Нет||
|street|Страна|string|Нет||
|house|Страна|string|Нет||
|flat|Страна|string|Нет||

###### <a id="to"></a>Описание объекта `to`
|Поле|Название поля|Тип|Обязательное|Описание|
|---|---|---|---|---|
|country|Страна|string|Нет||
|region|Страна|string|Нет||
|district|Страна|string|Нет||
|city|Страна|string|Нет||
|locality|Страна|string|Нет||
|street|Страна|string|Нет||
|house|Страна|string|Нет||
|flat|Страна|string|Нет||


###### <a id="individual-object"></a>Описание объекта `individual`

|Поле|Название поля|Тип|Описание|
|---|---|---|---|
|firstname|Имя|string||
|lastname|Фамилия|string||
|patronymic|Отчество|string||
|document_type|Тип документа|string|<ul><li>Паспорт гражданина РФ</li><li>Паспорт гражданина СССР</li><li>Паспорт гражданина иностранного государства</li><li>Общегражданский заграничный паспорт</li><li>Заграничный паспорт Министерства морского флота</li><li>Дипломатический паспорт</li><li>Паспорт моряка (удостоверение личности моряка)</li><li>Военный билет военнослужащего</li><li>Временное удостоверение, выданное взамен военного билета</li><li>Удостоверение личности офицера МО РФ, МВД РФ и других воинских формирований с приложением справки о прописке (регистрации) Ф-33</li><li>Свидетельство о рождении</li><li>Свидетельство о рассмотрении ходатайства о признании беженцем на территории РФ по существу</li><li>Вид на жительство иностранного гражданина или лица без гражданства</li><li>Справка об освобождении из мест лишения свободы</li><li>Временное удостоверение личности гражданина РФ</li><li>Удостоверение вынужденного переселенца</li><li>Разрешение на временное проживание в РФ</li><li>Удостоверение беженца в РФ</li><li>Свидетельство о рассмотрении ходатайства о признании лица вынужденным переселенцем</li><li>Свидетельство о предоставлении временного убежища на территории РФ</li><li>Другой документ</li></ul>|
|document_serial|Серия документа|string||
|document_number|Номер документа|string||
|document_issued|Кем выдан|string||
|document_code|Код подразделения|string||
|document_issue_date|Дата выдачи|[Дата](#type-date)|См. тип [Дата](#type-date)|
|ssn|СНИЛС|string|Нет||
|birthdate|Дата рождения|[Дата](#type-date)|См. тип [Дата](#type-date)|
|sex|пол|string|Нет||
|birthplace_country|Страна рождения|string|
|birthplace_region|Регион рождения|string|
|birthplace_district|Район рождения|string|
|birthplace_city|Город рождения|string|
|birthplace_locality|Населенный пункт рождения|string|
|citizenship|Гражданство|string|
|military_liability|Отношение к воинской обязанности|string|




###### <a id="entity-object"></a>Описание объекта массива `entity`

|Поле|Название поля|Тип|Описание|
|---|---|---|---|
|title|Наименование физ. лица|string||
|inn|ИНН|string||
|kpp|КПП|string||
|ogrn|ОГРН|string||
|legal_address|Юридический адрес|string||
|head_fullname|ФИО руководителя|string||
|head_post|Должность руководителя|string||
|bic|Банковский индивидуальный код|string||
|bank|Наименование банка|string||
|bank_account|Расчетный счет|string||
|bank_corr_account|Корреспондентский счет|string||



## <a id="custom-types"></a>Пользовательские типы

|Тип|Описание|
|---|---|
|<a id="type-date"></a>Дата|Дата я вляется строкой `string` в формате `ГГГГ-ММ-ДД`.<br />Например: "2017-04-12"|
|<a id="type-date-time"></a>ДатаВремя|ДатаВремя я вляется строкой `string` в формате `ГГГГ-ММ-ДД ЧАС:МИН:СЕК`.<br />Например: "2017-04-23 08:04:09"|
|<a id="type-period"></a>Период|Период я вляется строкой `string` в формате `ГГГГ-ММ-01`, `-01` в конце.<br />Например: "2017-04-01"|
|<a id="type-meter-value"></a>Показания счетчика|Показания счетчика описываются объектом где:<ul><li>Ключ - ставка, по которой подано показание;</li><li>Значение - показание, decimal(10,3) "максимум 10 знаков, из низ 3 после запятой".</li></ul>Возможные значения ключей:<ul><li>"B" - базовая ставка (для всех однотарифных счетчиков)</li><li>"T1" и "T2" - ставки для электроэнергии двухтарифной</li><li>"T1", "T2" и "T3" - ставки для электроэнергии трехтарифной</li></ul>|