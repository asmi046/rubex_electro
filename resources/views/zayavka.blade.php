@extends('layout.all')

@section('title', "Оставить заявку")

@section('content')

    <x-all-navigation :page="false"></x-all-navigation>

    <section class="descpBlock">
        <h2 class="descpBlock__title">ПОДАТЬ ЗАЯВКУ</h2>

        <div class="descpBlock__info">
            <p class="descpBlock__info-text">
                Уважаемые потребители, для того чтобы подать заявку на подключение к электро сетям нашей компании Вам
                необходимо зарегистрироваться
                в системе. После регистрации на указанный Вами почтовый ящик будут высланы логин и пароль для входа в систему.
            </p>
        </div>

        <form action="#" class="descpBlock__form">

            <div class="descpBlock__form-options options">
                <label class="options__item">
                    <input class="options__input" checked type="radio" value="1" name="form[option]">
                    <span class="options__text"><span>Юридическое лицо</span></span>
                </label>
                <label class="options__item">
                    <input class="options__input" type="radio" value="2" name="form[option]">
                    <span class="options__text"><span>Физичекое лицо</span></span>
                </label>
            </div>

            <div class="descpBlock__form-inputBlock">
                <input type="text" name="form[]" data-error="Ошибка" placeholder="Фамилия*"
                    class="descpBlock__form-inputBlock-input input">
                <input type="text" name="form[]" data-error="Ошибка" placeholder="Имя*"
                    class="descpBlock__form-inputBlock-input input">
                <input type="text" name="form[]" data-error="Ошибка" placeholder="Отчество*"
                    class="descpBlock__form-inputBlock-input input">
                <input type="text" name="form[]" data-error="Ошибка" placeholder="e-mail*"
                    class="descpBlock__form-inputBlock-input input">
                <input type="text" name="form[]" data-error="Ошибка" placeholder="ОГРН*"
                    class="descpBlock__form-inputBlock-input input">
                <input type="text" name="form[]" data-error="Ошибка" placeholder="ИНН*"
                    class="descpBlock__form-inputBlock-input input">
                <button class="descpBlock__form-inputBlock-btn btn">Отправить заявку</button>
            </div>

        </form>

    </section>

    <div class="imgBlock">
        <img src="img/request.jpg" alt="">
    </div>

@endsection
