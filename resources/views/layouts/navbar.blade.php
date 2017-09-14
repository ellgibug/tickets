<nav class="navbar navbar-expand-lg navbar-dark bg-primary {{ Request::is('/') ? 'fixed-top' : 'sticky-top' }}">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Tickets
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('program*') ? 'active' : '' }}" href="/#program">Наша Программа</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('speakers*') ? 'active' : '' }}" href="/#speakers">Наши Спикеры</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" {{ Request::is('sponsors*') ? 'active' : '' }} href="/#sponsors">Стать спонсором</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about*') ? 'active' : '' }}" href="{{ route('about') }}">О нас</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-link">
                    <a class="btn btn-outline-danger btn-lg" role="button" href="{{ route('login-or-register') }}">
                        Получить билет
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

