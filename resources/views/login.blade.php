@extends('layout.all')

@section('title', "Оставить заявку")

@section('content')

    <x-all-navigation :page="false"></x-all-navigation>

    <section class="descpBlock">
        <h2 class="descpBlock__title">АВТОРИЗАЦИЯ</h2>

        <div class="descpBlock__info">
            <p class="descpBlock__info-text">
                Для получения информации по Вашим заявкам войдите в свой личный кабинет воспользовавшись данной формой.
            </p>
        </div>

        <form method="POST" action="" class="descpBlock__form">
            @csrf

            <div class="descpBlock__form-inputBlock">

                <label>
                    e-mail<span class="required_marker">*</span>
                    <input required type="email" name="email" placeholder="Введите e-mail...">
                </label>

                <label>
                    Пароль<span class="required_marker">*</span>
                    <input required type="text" name="ogrn" placeholder="Введите ОГРН...">
                </label>

                <button type="submit" class="descpBlock__form-inputBlock-btn btn">Авторизация</button>
            </div>

        </form>

    </section>

    <div class="imgBlock">
        <img src="img/request.jpg" alt="">
    </div>

@endsection
