@extends('layout.all')

@section('title', "Отчеты о поставках тепла и электроэнергии")

@section('content')
        <x-all-navigation :page="false"></x-all-navigation>



        <section class="descpBlock">
			<h2 class="descpBlock__title">УСЛУГИ ПО ПЕРЕДАЧЕ ЭЛЕКТРИЧЕСКОЙ ЭНЕРГИИ</h2>

			<div class="descpBlock__info">
				<p class="descpBlock__info-text">
					Согласно Постановления Правительства РФ № 24 от 21.01.2004г. (в редакции 23.01.2015г. №47) раскрывается
					информация по оказанию услуг по
					передаче электрической энергии потребителям, подключённым к электрическим сетям ОАО «Курскрезинотехника».
				</p>
			</div>

			<ul class="descpBlock__list">
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('electro_report/Отчёт-1-кв.-2020г.docx')}}">Отчёт 1 квартал 2020г</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('electro_report/Информация-по-оказанию-услуг-по-передаче-электроэнергии-потребителям-на-сайт-КРТ-05-мес-2017.docx')}}">Скачать информацию по оказанию услуг по передаче электроэнергии потребителям за Май 2017г.</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('electro_report/Информация-по-оказанию-услуг-по-передаче-электроэнергии-потребителям-на-сайт-КРТ-04-мес-2017.docx')}}">Скачать информацию по оказанию услуг по передаче электроэнергии потребителям за Апрель 2017г.</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('electro_report/el06.docx')}}">Скачать информацию по оказанию услуг по передаче электроэнергии потребителям за Июнь 2017г.</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('electro_report/el18.docx')}}">Предложения ОАО “КРТ” по тарифу на передачу электроэнергии на 2018-2020гг.</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('electro_report/2017.docx')}}">Предложение ОАО “КРТ” по тарифу на технологическое присоединение к электрическим сетям ОАО “КРТ” на 2017 год</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('electro_report/el12.docx')}}">Скачать информацию по оказанию услуг по передаче электроэнергии потребителям за декабрь 2015г.</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('electro_report/Electro2014.rar')}}">Информация по передаче электроэнергии за 2014г.</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('electro_report/2014.rar')}}">Качество обслуживания потребителей электроэнергии в 2014г.</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('electro_report/tipovoi-dogovor-o-pereraspredelenii-moshnosti.docx')}}">Скачать типовой Договор о перераспределениии мощности</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('electro_report/tipovoi-dogovor-o-tech-pris-svishe-15kw-do-150kw.docx')}}">Скачать типовой Договор о технологическом присоединении свыше 15кВт и до 150кВт</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('electro_report/tipovoi-dogovor-o-tech-pris-svishe-150kw-do-670kw.docx')}}">Скачать типовой Договор о технологическом присоединении свыше 150кВт и менее 670кВт</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('electro_report/tipovoi-dogovor-o-tech-pris-fiz-lits-do-15kw.docx')}}">Скачать типовой Договор о технологическом присоединении физических лиц до 15кВт включительно</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('electro_report/tipovoi-dogovor-o-tech-pris-ur-lits-i-ip-do15kw.docx')}}">Скачать типовой Договор о технологическом присоединении юридических лиц или индивидуальных предпринимателей до 15кВт включительно</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('electro_report/pasp.xlsx')}}">Скачать Паспорт услуги на технологическое присоединение к электрическим сетям</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('electro_report/arx.docx')}}">Скачать архив ремонтов оборудования за 2012г.</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('electro_report/Информация по отпуску тепловой энергии потребителям 2023г..docx')}}">Информация по отпуску тепловой энергии потребителям 2023г.</a></li>

			</ul>

			<h2 class="descpBlock__title">УСЛУГИ ПО ОТПУСКУ ТЕПЛОВОЙ ЭНЕРГИИ</h2>

			<div class="descpBlock__info">
				<p class="descpBlock__info-text">
					Согласно Постановления Правительства РФ № 1140 от 30.12.2009г. «Об утверждении стандартов раскрытия информации
					организациями
					коммунального комплекса и субъектами естественных монополий, осуществляющих деятельность в сфере оказания
					услуг по передаче тепловой
					энергии» раскрывается информация по оказанию услуг по отпуску тепловой энергии потребителям, подключённым к
					тепловым
					сетям ОАО «Курскрезинотехника».
				</p>
			</div>

			<ul class="descpBlock__list">
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('teplo_report/Информация-по-оказанию-услуг-по-передаче-тепловой-энергии-потребителям-на-2022г.-1.pdf')}}">Информация по оказанию услуг по передаче тепловой энергии потребителям на (2022г.)</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('teplo_report/Информация-по-оказанию-услуг-по-передаче-тепловой-энергии-потребителям-на-сайт-КРТ-2021г-пост-№570.pdf')}}">Информация по оказанию услуг по передаче тепловой энергии потребителям (2021 г.)</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('teplo_report/FAS2021.xlsb')}}">Информация о величинах тарифов на 2021</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('teplo_report/Информация-по-оказанию-услуг-по-передаче-тепловой-энергии-потребителям-на-сайт-КРТ-2020г-пост-№570.pdf')}}">Информация по оказанию услуг по передаче тепловой энергии потребителям (2020 г.)</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('teplo_report/FAS2020.xlsb')}}">Информация о величинах тарифов на 2020 г.</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('teplo_report/формы-по-стандартам-4кв.2017г..docx')}}">Скачать формы по стандартам 4 квартал 2017г.</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('teplo_report/tep01.docx')}}">Скачать информацию по отпуску тепловой энергии потребителям за 1 квартал 2017 года</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('teplo_report/teplo31.docx')}}">Скачать информацию по отпуску тепловой энергии потребителям, подключенным к тепловым сетям ОАО “Курскрезинотехника” за 3 квартал 2016 года</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('teplo_report/teplo1.docx')}}">Скачать отчет по отпуску тепловой энергии потребителям за 1 квартал 2014г.</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('teplo_report/teplo2.docx')}}">Скачать отчет по отпуску тепловой энергии потребителям за 2 квартал 2014г.</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('teplo_report/tp.docx')}}">Типовой договор на поставку тепловой энергии</a></li>
				<li><a target="_blank" class="descpBlock__list-item" href="{{asset('teplo_report/Информация-по-оказанию-услуг-по-передаче-тепловой-энергии-потребителям-ОАО-Курскрезинотехника.pdf')}}">Информация по оказанию услуг по отпуску тепловой энергии потребителям тепловой энергии ОАО Курскрезинотехника с 01.12.2022г. по 31.12.2023г.</a></li>
			</ul>
{{--
			<h2 class="descpBlock__title">УСЛУГИ ПО ОТПУСКУ ТЕПЛОВОЙ ЭНЕРГИИ</h2>

			<div class="descpBlock__info">
				<p class="descpBlock__info-text">
					Согласно Постановления Правительства РФ № 1140 от 30.12.2009г. «Об утверждении стандартов раскрытия информации
					организациями
					коммунального комплекса и субъектами естественных монополий, осуществляющих деятельность в сфере оказания
					услуг по передаче тепловой
					энергии» раскрывается информация по оказанию услуг по отпуску тепловой энергии потребителям, подключённым к
					тепловым
					сетям ОАО «Курскрезинотехника».
				</p>
			</div>

			<ul class="descpBlock__list">
				<li class="descpBlock__list-item">Отчёт 1 квартал 2020г</li>
				<li class="descpBlock__list-item">Информацию по оказанию услуг по передаче электроэнергии потребителям за Май
					2017г.</li>
				<li class="descpBlock__list-item">Информацию по оказанию услуг по передаче электроэнергии потребителям за Апрель
					2017г.</li>
				<li class="descpBlock__list-item">Информацию по оказанию услуг по передаче электроэнергии потребителям за июнь
					2017г.</li>
			</ul> --}}

		</section>

        <div class="imgBlock">
			<img src="img/reports.jpg" alt="">
		</div>

@endsection
