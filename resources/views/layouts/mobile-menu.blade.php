<div class="menu menu-mobile menu-mobile-accent menu-mobile-accent-dark">
    <div class="menu-mobile-wrapper">
        <div class="menu-header" scroll-fixed>
            <div class="container">
                <div class="menu-header-inner">
                    <div class="row justify-content-between">
                        <!-- Кнопка закрытия мобильного меню -->
                        <div class="col-auto">
                            <div class="menu-header-buttons">
                                <button type="button" class="btn btn-sm btn-icon btn-white" data-menu-close="">
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                        <use xlink:href="/sprite.svg#cross"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- Кнопка закрытия мобильного меню -->

                        <!-- Логотип с ссылкой на главную страницу -->
                        <div class="col">
                            <div class="menu-header-logo lazyload" data-expand="-10">
                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                    <use xlink:href="/sprite.svg#logo"></use>
                                </svg>
                                <a href="{{ Route('index') }}" class="stretched-link"></a>
                            </div>
                        </div>
                        <!-- Логотип с ссылкой на главную страницу -->

                        <!-- Зона остальных кнопок справа в шапке -->
                        <div class="col-auto">
                            <div class="menu-header-buttons">
                                <a href="javascript://" class="btn btn-sm btn-icon btn-white">
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                        <use xlink:href="/sprite.svg#search"></use>
                                    </svg>
                                </a>
                                <a href="javascript://" class="btn btn-sm btn-icon btn-white" data-modal-open="register">
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                        <use xlink:href="/sprite.svg#signout"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!-- Зона остальных кнопок справа в шапке -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Навигация -->
        <div class="menu-navigation">
            <div class="container">
                <ul class="nav nav-vertical">
                    @include('layouts.navigation')
                </ul>
            </div>
        </div>
        <!-- Навигация -->

        <!-- Нижняя часть мобильного меню -->
        <div class="menu-footer">
            <div class="container">
                <!-- Блок контактов -->
                <div class="contacts-block">
                    @include('blocks.contacts')
                </div>
                <!-- Блок контактов -->
            </div>
        </div>
        <!-- Кнопки соц-сетей -->
        <div class="menu-social">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-auto">
                        <a href="javascript://" target="_blank" class="btn btn-sm btn-icon btn-white text-yellow">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden=" true" focusable="false">
                                <use xlink:href="/sprite.svg#telegram"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="javascript://" target="_blank" class="btn btn-sm btn-icon btn-white text-yellow">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                <use xlink:href="/sprite.svg#vk"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Кнопки соц-сетей -->
        <!-- Нижняя часть мобильного меню -->
    </div>
</div>