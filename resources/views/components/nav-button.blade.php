<ul class="titleBlock__list">
    <li class="titleBlock__list-item">
        <a href="{{route('home')}}" @class(['titleBlock__list-item-link', 'btn', 'active' => Route::currentRouteName() == "home"])>Главная</a>
    </li>
    <li class="titleBlock__list-item">
        <a href="{{route('reports')}}" @class(['titleBlock__list-item-link', 'btn', 'active' => Route::currentRouteName() == "reports"])>Отчеты</a>
    </li>
    <li class="titleBlock__list-item">
        <a href="{{route('zayavka')}}" @class(['titleBlock__list-item-link', 'btn', 'active' => Route::currentRouteName() == "zayavka"])>Подать заявку</a>
    </li>
    <li class="titleBlock__list-item">
        <a href="{{route('auth')}}" @class(['titleBlock__list-item-link', 'btn', 'active' => Route::currentRouteName() == "auth"])>Войти в систему</a>
    </li>
</ul>
