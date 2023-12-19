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

        <form method="POST" action="{{ route('send_zayavka') }}" class="descpBlock__form">
            @csrf
            <div  class="descpBlock__form-options options">
                <label class="options__item">
                    <input class="options__input" checked type="radio" value="Юридическое лицо" name="orgforma">
                    <span class="options__text"><span>Юридическое лицо</span></span>
                </label>
                <label class="options__item">
                    <input class="options__input" type="radio" value="Физичекое лицо" name="orgforma">
                    <span class="options__text"><span>Физичекое лицо</span></span>
                </label>
            </div>

            <div class="descpBlock__form-inputBlock">
                <label>
                    Фамилия<span class="required_marker">*</span>
                    <input required type="text" name="familia" placeholder="Введите фамилию...">
                </label>

                <label>
                    Имя<span class="required_marker">*</span>
                    <input required type="text" name="name" placeholder="Введите имя...">
                </label>

                <label>
                    Отчество<span class="required_marker">*</span>
                    <input required type="text" name="othestvo" placeholder="Введите отчество...">
                </label>

                <label>
                    e-mail<span class="required_marker">*</span>
                    <input required type="email" name="email" placeholder="Введите e-mail...">
                </label>

                <label>
                    ОГРН<span class="required_marker">*</span>
                    <input required type="text" name="ogrn" placeholder="Введите ОГРН...">
                </label>

                <label>
                    ИНН<span class="required_marker">*</span>
                    <input required type="text" name="inn" placeholder="Введите ИНН...">
                </label>

                <button type="submit" class="descpBlock__form-inputBlock-btn btn">Отправить заявку</button>
            </div>

        </form>

    </section>

    <div class="imgBlock">
        <img src="img/request.jpg" alt="">
    </div>

@endsection
