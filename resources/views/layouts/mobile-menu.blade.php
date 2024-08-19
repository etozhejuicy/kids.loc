<div class="menu menu-mobile menu-mobile-accent menu-mobile-accent-dark" data-lenis-prevent>
    <div class="menu-mobile-wrapper">
        <div class="menu-header" scroll-fixed>
            <div class="container">
                <div class="menu-header-inner">
                    <div class="row justify-content-between">
                        <div class="col-auto">
                            <div class="menu-header-buttons">
                                <button type="button" class="btn btn-sm btn-icon btn-white" data-menu-close="">
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                        <use xlink:href="/sprite.svg#cross"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="menu-header-logo lazyload" data-expand="-10">
                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                    <use xlink:href="/sprite.svg#logo"></use>
                                </svg>
                                <a href="{{ Route('index') }}" class="stretched-link"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="menu-header-buttons">
                                <div class="d-none d-xl-flex">
                                    <a href="javascript://" class="btn btn-primary py-4 px-5 text-uppercase">Регистрация</a>
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
        </div>
        <div class="menu-navigation">
            <div class="container">
                <ul class="nav nav-vertical">
                    @include('layouts.navigation')
                </ul>
            </div>
        </div>
        <div class="menu-footer">
            <div class="container">
                <div class="contacts-block">
                    <div class="row">
                        <div class="col-12">
                            <div class="menu-title">
                                <h4 class="h-4">
                                    Свяжитесь с нами
                                </h4>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="menu-contacts">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="tel:+7(999)999-99-99" class="text-3 fw-300">+7(999)999-99-99</a>
                                    </div>
                                    <div class="col-12">
                                        <a href="mailto:email@gmail.com" class="text-3 fw-300">email@gmail.com</a>
                                    </div>
                                    <div class="col-12">
                                        <span class="text-3 fw-300">
                                            Москва, Краснопресненская набережная, д. 12
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-social">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-auto">
                        <a href="javascript://" class="btn btn-sm btn-icon text-yellow">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden=" true" focusable="false">
                                <use xlink:href="/sprite.svg#telegram"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="javascript://" class="btn btn-sm btn-icon text-yellow">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                <use xlink:href="/sprite.svg#vk"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>