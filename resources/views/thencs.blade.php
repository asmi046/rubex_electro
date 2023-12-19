@extends('layout.all')

@section('title', "Оставить заявку")

@section('content')

    <x-all-navigation :page="false"></x-all-navigation>

    <section class="descpBlock">
        <h2 class="descpBlock__title">БЛАГОДАРИМ ЗА ЗАЯВКУ</h2>

        <div class="descpBlock__info">
            <p class="descpBlock__info-text">
                Ваша заявка будет обработана в кстановленные сроки и наши специалисты свяжутся с Вами.
            </p>
        </div>

    </section>

    <div class="imgBlock">
        <img src="img/request.jpg" alt="">
    </div>

@endsection
