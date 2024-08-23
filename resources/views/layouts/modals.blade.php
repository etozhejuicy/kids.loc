@yield('modals')

<!-- модалка регистрации -->
<div class="modal modal-form" data-modal-id="register">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title text-left">
                    Регистрация
                </div>
                <button type="button" class="modal-close" btn-close-modal></button>
            </div>
            <div class="modal-body">
                <form data-ajax-form class="row register-form" id="register_form" action="?">
                    @csrf

                    <input type="hidden" name="title" value="Регистрация" />

                    <div class="col-12">
                        <div class="form-floating">
                            <input type="name" name="organization" class="form-control w-100" id="userOrganization" value="" placeholder="Организация *" />
                            <label for="userOrganization">Организация *</label>
                        </div>
                    </div>

                    <div class="col-12 col-xl-6">
                        <div class="form-floating">
                            <input type="name" name="region" class="form-control w-100" id="userRegion" value="" placeholder="Регион *" data-region />
                            <label for="userRegion">Регион *</label>
                        </div>
                    </div>

                    <div class="col-12 col-xl-6">
                        <div class="form-floating">
                            <input type="name" name="city" class="form-control w-100" id="userCity" value="" placeholder="Город *" data-city />
                            <label for="userCity">Город *</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating">
                            <input type="name" name="name" class="form-control w-100" id="userName" value="" placeholder="ФИО" />
                            <label for="userName">ФИО</label>
                        </div>
                    </div>

                    <div class="col-12 col-xl-6">
                        <div class="form-floating">
                            <input type="text" name="phone" class="form-control w-100" id="userPhone" value="" placeholder="Телефон" />
                            <label for="userPhone">Телефон</label>
                        </div>
                    </div>

                    <div class="col-12 col-xl-6">
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control w-100" id="userEmail" value="" placeholder="E-mail" />
                            <label for="userEmail">E-mail</label>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="form-check form-check-center">
                            <input class="form-check-input" name="userAgreement" type="checkbox" id="agreement">
                            <label class="form-check-label text-1" for="agreement">
                                Я согласен на обработку данных
                            </label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="modal-footer">
                            <div class="row g-4 align-items-start align-items-md-center justify-content-end">
                                <div class="col-12 col-md-auto">
                                    <button type="submit" class="btn btn-outline-primary rounded-pill w-100">
                                        Регистрация
                                    </button>
                                </div>
                                <div class="col-12 col-md">
                                    <span class="text-1">
                                        Уже есть аккаунт?
                                    </span>
                                    <a href="javascript://" class="text-primary text-1" data-modal-open="login" btn-modal-close>Авторизируйтесь!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- модалка регистрации -->

<!-- модалка входа -->
<div class="modal modal-form modal-narrow" data-modal-id="login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title text-left">
                    Войти
                </div>
                <button type="button" class="modal-close" btn-close-modal></button>
            </div>
            <div class="modal-body">
                <form data-ajax-form class="row register-form" id="login_form" action="?">
                    @csrf

                    <input type="hidden" name="remember" value="1">

                    <div class="col-12">
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control w-100" value="" placeholder="E-mail" />
                            <label for="email">E-mail</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating">
                            <input name="password" type="password" class="form-control w-100" value="" placeholder="Пароль" />
                            <label for="password">Пароль</label>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="form-check form-check-center">
                            <input class="form-check-input" name="remember" type="checkbox" id="rememberMe" checked>
                            <label class="form-check-label text-1" for="rememberMe">
                                Запомнить меня
                            </label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="modal-footer">
                            <div class="row g-4 align-items-center-center justify-content-end">
                                <div class="col-7 col-md-8">
                                    <button type="submit" class="btn btn-outline-primary rounded-pill w-100">
                                        Войти
                                    </button>
                                </div>
                                <div class="col-5 col-md-4 d-flex align-self-center">
                                    <a href="javascript://" class="text-1" data-modal-open="forgotPassword" btn-modal-close>Забыли пароль?</a>
                                </div>
                                <div class="col-12">
                                    <span class="text-1">
                                        Нет аккаунта?
                                    </span>
                                    <a href="javascript://" class="text-primary text-1" data-modal-open="register" btn-modal-close>Зарегистрируйтесь!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- модалка входа -->

<!-- модалка забыли пароль -->
<div class="modal modal-form modal-narrow" data-modal-id="forgotPassword">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title text-left">
                    Забыли пароль?
                </div>
                <button type="button" class="modal-close" btn-close-modal></button>
            </div>
            <div class="modal-body">
                <form data-ajax-form class="row register-form" id="login_form" action="?">
                    @csrf

                    <input type="hidden" name="remember" value="1">

                    <div class="col-12">
                        <div class="text-1">
                            Введите электронный адрес, на который<br>
                            зарегистрирован аккаунт. Мы вышлем письмо<br>
                            с возможностью восстановления.
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control w-100" value="" placeholder="E-mail" required autofocus />
                            <label for="email">E-mail</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="modal-footer">
                            <div class="row g-4 align-items-center justify-content-center">
                                <div class="col-12 col-md-auto">
                                    <button type="submit" class="btn btn-outline-primary rounded-pill w-100">
                                        Отправить
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- модалка забыли пароль -->

<!-- В случае успеха чего-либо -->
<div class="modal modal-narrow" data-modal-id="success">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title text-left">
                    <div class="fw-700 text-uppercase">
                        Успех!
                    </div>
                </div>
                <button type="button" class="modal-close" btn-close-modal></button>
            </div>
            <div class="modal-body">
                <p>
                    Текст описания успеха :)
                </p>
            </div>
            <div class="modal-footer">
                <div class="row g-3">
                    <div class="col-12">
                        <button btn-close-modal type="button" class="btn btn-outline-black w-100">
                            Закрыть
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- В случае успеха чего-либо -->