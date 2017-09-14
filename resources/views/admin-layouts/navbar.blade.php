<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Основной сайт
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">Дашборд</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('*users*') ? 'active' : '' }}" href="{{ route('users.index') }}">Пользователи</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('*speakers*') ? 'active' : '' }}" href="{{ route('speakers.index') }}">Спикеры</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('*sponsors*') ? 'active' : '' }}" href="{{ route('sponsors.index') }}">Спонсоры</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('*conferences*') ? 'active' : '' }}" href="{{ route('conferences.index') }}">Конференции</a>
                </li>
            </ul>
            <ul class="navbar-nav mд-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.logout') }}">Выйти</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

