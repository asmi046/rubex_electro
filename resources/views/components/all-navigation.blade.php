<div @class(['wrapper-index' => $page, 'wrapper'])>

    <div @class(['index-navBlock' => $page, 'navBlock'])>
        <header id="header" class="header">
            <a href="{{route('home')}}" class="logo-icon header__logo"></a>
        </header>

        <section id="titleBlock"  @class(['index-titleBlock' => $page, 'titleBlock']) >

            <h1 class="@if ($page) index-titleBlock__title @else titleBlock__title @endif">
                СЕТЕВАЯ КОМПАНИЯ <br>
                RUBEX GROUP
            </h1>

            <x-nav-button></x-nav-button>

        </section>

        <x-contact-blk></x-contact-blk >
    </div>

</div>
