@extends('layouts.master')

@section('content')
<div class="main">
    <div class="breadcrumbs">
        <div class="cont">
            <a href="/">Главная</a>&#8194;/&#8194;<span>Прейскурант</span>
        </div>
    </div>
    <div class="page profile">
		<div class="cont">
			<h2 class="blc-title">Прейскурант</h2>
			<div class="order__tab">
			  <div class="order__tab-header-row">
				<div class="order__tab-col upText ">Универсальные услуги</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Диагностика для всех видов оборудования, кроме продукции Apple</div>
				<div class="order__tab-col">450 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Отвоз в пределах МКАД</div>
				<div class="order__tab-col">490 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Отвоз за МКАД, не далее 20 км</div>
				<div class="order__tab-col">740 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Привоз из-за МКАД, не далее 20 км</div>
				<div class="order__tab-col">490 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Привоз гарантийного аппарата</div>
				<div class="order__tab-col">490 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-header-row">
				<div class="order__tab-col ">Ноутбуки</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Блочный ремонт:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена любого модуля устройства</div>
				<div class="order__tab-col">2965 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Комплексная замена нескольких модулей устройства</div>
				<div class="order__tab-col">4865 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Компонентный ремонт:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена разъемов, ремонт корпуса</div>
				<div class="order__tab-col">4365 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Ремонт электронных плат с заменой BGA компонентов</div>
				<div class="order__tab-col">8865 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Ремонт информационных и питающих цепей, в том числе после залития или неквалифицированного ремонта</div>
				<div class="order__tab-col">11265 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Перепрограммирование BIOS аппаратным путем</div>
				<div class="order__tab-col">3865 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Выполнение нештатных работ с электронными платами и компонентами</div>
				<div class="order__tab-col">4365 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Профилактические работы:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Полная чистка и замена термопасты</div>
				<div class="order__tab-col">1365 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Сложная чистка устройства с применением спецсредств и оборудования (залития, насекомые, засоры песком и бетоном и т.п.)</div>
				<div class="order__tab-col">2965 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Краш-тест системы для выявления скрытых и плавающих дефектов</div>
				<div class="order__tab-col">1365 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Работы с ПО:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Восстановление ОС с сохранением данных</div>
				<div class="order__tab-col">3565 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Перенос данных при установке новой ОС</div>
				<div class="order__tab-col">1565 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Установка ОС с полным набором драйверов</div>
				<div class="order__tab-col">2565 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Нештатные работы с ПО</div>
				<div class="order__tab-col">1565 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Снятия пароля с OC, HDD, BIOS (если возможно)</div>
				<div class="order__tab-col">1965 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-header-row">
				<div class="order__tab-col upText">Apple MacBook</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Диагностика заявленной неисправности</div>
				<div class="order__tab-col">3600 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена блоков MacBook (плата, шлейф, акб, динамики, LCD)</div>
				<div class="order__tab-col">5000 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Профилактические работы, чистка</div>
				<div class="order__tab-col">5000 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Работы с программным обеспечением</div>
				<div class="order__tab-col">3000 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена аксессуаров</div>
				<div class="order__tab-col">300 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-header-row">
				<div class="order__tab-col upText">Смартфоны и планшеты</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Блочный ремонт:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена любого модуля устройства</div>
				<div class="order__tab-col">1965 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Компонентный ремонт:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Сложная замена блоков</div>
				<div class="order__tab-col">3665 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Ремонт электронных плат, включая восстановление после попадения жидкости</div>
				<div class="order__tab-col">5865 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Профилактические работы:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Чистка плат и блоков после попадания жидкости в ультразвуковой ванне</div>
				<div class="order__tab-col">2465 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Работы с ПО:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Перепрошивка</div>
				<div class="order__tab-col">1865 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Сложная перепрошивка, восстановление BOOT</div>
				<div class="order__tab-col">3365 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Восстановление/переустановка Windows</div>
				<div class="order__tab-col">2465 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-header-row">
				<div class="order__tab-col upText">Apple iPhone</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Диагностика заявленной неисправности</div>
				<div class="order__tab-col">1200 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена блоков (динамик, акб, камера)</div>
				<div class="order__tab-col">2400 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Чистка разъемов, сеток</div>
				<div class="order__tab-col">1200 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Работы с ПО (Восстановление прошивки, iCloud)</div>
				<div class="order__tab-col">900 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена аккумулятора</div>
				<div class="order__tab-col">Цена зависит от модели. </div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена экрана</div>
				<div class="order__tab-col">Цена зависит от модели. </div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Срочная замена экрана</div>
				<div class="order__tab-col">Цена зависит от модели. </div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена iPhone на новый</div>
				<div class="order__tab-col">Цена зависит от модели. </div>
			  </div>
			  <div class="order__tab-header-row">
				<div class="order__tab-col upText">Apple iPad, iPod, Watch, TV, Time Capsule, Beats</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Диагностика заявленной неисправности</div>
				<div class="order__tab-col">600 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Работы с ПО (Восстановление прошивки, iCloud)</div>
				<div class="order__tab-col">900 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Чистка разъемов, сеток</div>
				<div class="order__tab-col">1200 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена iPad на новый</div>
				<div class="order__tab-col">Цена зависит от модели. </div>
			  </div>
			  <div class="order__tab-header-row">
				<div class="order__tab-col upText">Системные блоки</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Блочный ремонт:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена любого модуля устройства</div>
				<div class="order__tab-col">1265 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Комплексная замена нескольких модулей устройства</div>
				<div class="order__tab-col">2665 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Компонентный ремонт:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена радиоэлементов</div>
				<div class="order__tab-col">2665 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена BGA компонентов</div>
				<div class="order__tab-col">4665 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Профилактические работы:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Полная чистка оборудования с заменой термопасты</div>
				<div class="order__tab-col">1265 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Работы с ПО:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Восстановление ОС с сохранением данных</div>
				<div class="order__tab-col">2765 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Перенос данных при установке новой ОС</div>
				<div class="order__tab-col">1265 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Установка ОС с полным набором драйверов</div>
				<div class="order__tab-col">1865 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Проверка и лечение ПО от вирусов</div>
				<div class="order__tab-col">1565 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Перепрограммирование BIOS программным путем</div>
				<div class="order__tab-col">1265 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Снятия пароля с OC, HDD, BIOS (если возможно)</div>
				<div class="order__tab-col">1965 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-header-row">
				<div class="order__tab-col upText">Apple Mac Pro</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Диагностика</div>
				<div class="order__tab-col">7200 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена модулей</div>
				<div class="order__tab-col">7500 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Профилактические работы, чистка</div>
				<div class="order__tab-col">7500 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Работы с программным обеспечением</div>
				<div class="order__tab-col">3000 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена аксессуаров</div>
				<div class="order__tab-col">300 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-header-row">
				<div class="order__tab-col upText">Моноблоки</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Блочный ремонт:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена любого узла, кроме материнской платы и LCD экрана</div>
				<div class="order__tab-col">3965 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена материнской платы, LCD экрана</div>
				<div class="order__tab-col">4965 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Комплексная замена нескольких модулей устройства</div>
				<div class="order__tab-col">6265 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Компонентный ремонт:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена разъемов, ремонт корпуса</div>
				<div class="order__tab-col">4965 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Ремонт электронных плат с заменой BGA компонентов</div>
				<div class="order__tab-col">10265 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Ремонт информационных и питающих цепей, в том числе после залития или неквалифицированного ремонта</div>
				<div class="order__tab-col">13865 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Перепрограммирование BIOS аппаратным путем</div>
				<div class="order__tab-col">4965 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Выполнение нештатных работ с электронными платами и компонентами</div>
				<div class="order__tab-col">5365 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Профилактические работы:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Полная чистка с заменой термопасты</div>
				<div class="order__tab-col">3965 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Сложная чистка устройства с применением спецсредств и оборудования (залития, насекомые, засоры песком и бетоном и т.п.)</div>
				<div class="order__tab-col">5465 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Краш-тест системы для выявления скрытых и плавающих дефектов</div>
				<div class="order__tab-col">2265 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Работы с ПО:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Восстановление ОС с сохранением данных</div>
				<div class="order__tab-col">4565 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Перенос данных при установке новой ОС</div>
				<div class="order__tab-col">2265 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Установка ОС с полным набором драйверов</div>
				<div class="order__tab-col">3565 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Нештатные работы с ПО</div>
				<div class="order__tab-col">2265 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Снятия пароля с OC, HDD, BIOS (если возможно)</div>
				<div class="order__tab-col">2465 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-header-row">
				<div class="order__tab-col upText">Apple iMac</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Диагностика заявленной неисправности</div>
				<div class="order__tab-col">3600 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена блоков и модулей. Чистка</div>
				<div class="order__tab-col">7500 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Работы с программным обеспечением</div>
				<div class="order__tab-col">3000 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена аксессуаров</div>
				<div class="order__tab-col">300 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-header-row">
				<div class="order__tab-col upText">Фотоаппараты компактные</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Обновление и восстановление ПО</div>
				<div class="order__tab-col">1650 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена любого модуля устройства</div>
				<div class="order__tab-col">2650 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Ремонт узлов и электронных плат</div>
				<div class="order__tab-col">3850 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Переборка объектива</div>
				<div class="order__tab-col">5250 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-header-row">
				<div class="order__tab-col upText">Фотоаппараты зеркальные</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Обновление и восстановление ПО</div>
				<div class="order__tab-col">2850 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Замена любого модуля устройства</div>
				<div class="order__tab-col">3850 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Чистка ССD матрицы</div>
				<div class="order__tab-col">3850 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Ремонт узлов и электронных плат</div>
				<div class="order__tab-col">8250 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Переборка объектива</div>
				<div class="order__tab-col">7250 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Обновлении функции Canon Log</div>
				<div class="order__tab-col">6000 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-header-row">
				<div class="order__tab-col upText">Восстановление данных</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Восстановление данных с HDD:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Восстановление загрузки ОС с диска (коррекция ошибки загрузчика)</div>
				<div class="order__tab-col">1500 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Восстановление удаленных или невидимых папок</div>
				<div class="order__tab-col">1500 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Восстановление данных после логических неисправностей (жёсткий диск физически исправен)</div>
				<div class="order__tab-col">5000 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Восстановление данных после ошибок в служебной зоне накопителя</div>
				<div class="order__tab-col">8000 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Восстановление данных после неисправности контроллера</div>
				<div class="order__tab-col">8000 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Восстановление данных после повреждения поверхности</div>
				<div class="order__tab-col">10000 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Восстановление данных после клина подшипника или обрыва обмоток двигателя</div>
				<div class="order__tab-col">15000 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Восстановление данных после неисправности блока магнитных головок</div>
				<div class="order__tab-col">15000 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Восстановление данных с RAID массивов (за один диск)</div>
				<div class="order__tab-col">15000 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Создание или настройка RAID массива</div>
				<div class="order__tab-col">5000 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Восстановление данных с флэш:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Восстановление данных после логических неисправностей</div>
				<div class="order__tab-col">5000 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Вычитывание данных на программаторе и сборка образа</div>
				<div class="order__tab-col">8000 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Вычитывание данных на программаторе и сборка образа с флэш монолитного типа</div>
				<div class="order__tab-col">24000 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Восстановление данных с SSD:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Извлечение данных из неисправных устройств</div>
				<div class="order__tab-col">24000 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Восстановление данных со смартфонов и планшетов, кроме продукции Apple:</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Извлечение данных из неисправных устройств</div>
				<div class="order__tab-col">5000 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-header-row">
				<div class="order__tab-col upText">Детекторы валют</div>
				<div class="order__tab-col"></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Обновление системного ПО штатным интерфейсом</div>
				<div class="order__tab-col">900 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Аппаратное обновление системного ПО</div>
				<div class="order__tab-col">1400 <i class="rub">i</i></div>
			  </div>
			  <div class="order__tab-row">
				<div class="order__tab-col">Ремонт и замена узлов детектора валют</div>
				<div class="order__tab-col">2 400 <i class="rub">i</i></div>
			  </div>
			</div>
			@include('layouts.callarea')
		  </div>
    </div>
</div>
@endsection
