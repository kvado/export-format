## <a id="accruals"></a> 2. Описание файла со сведениями начислениях

Json файл должен иметь следующую струкуру:
<pre>
{include-json:accruals/accruals.json}
</pre>

### Описание объектов массива начислений

|Поле|Название поля|Тип|Описание|
|---|---|---|---|
|id|Идентификатор строки начисления в КВАДО.РУ|int||
|accounts_id|Идентификатор лицевого счета в КВАДО.РУ|int||
|period|Период начисления|[период](#type-period)|См. тип [период](#type-period)|
|utilities_id|Идентификатор услуги в КВАДО.РУ|int||
|utilities_title|Наименование услуги|string||
|calculated_by|Способ расчета для коммунальных услуг|enum|<ul><li>counter - по счетчику</li><li>average - по среднему</li><li>standard - по нормативу</li></ul>|
|bet|Ставка тарифа|enum|<ul><li>Основная</li><li>день</li><li>ночь</li><li>пик</li><li>полупик</li></ul>|
|cost|Тариф|decimal(10,2)|||
|volume|Объем (расход)|decimal(15,5)|||
|value|Сумма начислено|decimal(10,2)|||
|recalc|Сумма перерасчета|decimal(10,2)|||
|privileges|Сумма льготы|decimal(10,2)|||



