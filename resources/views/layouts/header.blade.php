<header class="header header-colorized" scroll-fixed>
    <div class="container">
        <div class="header-inner">
            <div class="row">
                <div class="col-auto d-block d-xl-none">
                    <div class="header-buttons">
                        <button type="button" class="btn btn-sm btn-icon btn-white" data-menu-open="">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                <use xlink:href="/sprite.svg#hamburgerMenu"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-logo lazyload" data-expand="-10">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                            <use xlink:href="/sprite.svg#logo"></use>
                        </svg>
                        <a href="{{ Route('index') }}" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col">
                    <div class="header-navigation">
                        <ul class="nav nav-horizontal">
                            @include('layouts.navigation')
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-buttons">
                        <div class="d-none d-xl-flex">
                            <a href="javascript://" class="btn btn-primary py-4 px-5">Регистрация</a>
                        </div>
                        <div class="d-flex d-xl-none">
                            <a href="javascript://" class="btn btn-sm btn-icon btn-white">
                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                    <use xlink:href="/sprite.svg#search"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="d-flex d-xl-none">
                            <a href="javascript://" class="btn btn-sm btn-icon btn-white">
                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                    <use xlink:href="/sprite.svg#signout"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>