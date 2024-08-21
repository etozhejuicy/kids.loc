<footer class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="row">
                <div class="col-12 col-xl-auto">
                    <div class="footer-start footer-column">
                        <div class="row">
                            <div class="col-12">
                                <div class="block">
                                    <div class="block-title">
                                        <h4 class="h-4">
                                            Читай с детьми
                                        </h4>
                                    </div>
                                    <div class="block-content">
                                        <p class="text-1">
                                            Всероссийский конкурс социальных проектов
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12" id="contacts">
                                @include('blocks.contacts')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl">
                    <div class="footer-middle">
                        <form class="form" action="?">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-description">
                                        <p>
                                            Получайте сообщения о каждом обновлении, которое мы публикуем.
                                        </p>
                                        <p>
                                            Получайте сообщения о каждом обновлении, которое мы публикуем.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-label form-relative">
                                        <input name="email" type="text" class="form-control" rows="1" value="" id="email" placeholder="Введите ваш e-mail" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-icon btn-primary">
                                        <span class="btn-icon-text">
                                            подписаться
                                        </span>
                                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                            <use xlink:href="/sprite.svg#arrowRight"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-xl-auto">
                    <div class="footer-end">
                        <div class="row">
                            <div class="col-12">
                                <div class="footer-social">
                                    <div class="row">
                                        <div class="col-auto">
                                            <a href="javascript://" class="btn btn-sm btn-icon btn-white text-yellow">
                                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden=" true" focusable="false">
                                                    <use xlink:href="/sprite.svg#telegram"></use>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript://" class="btn btn-sm btn-icon btn-white text-yellow">
                                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                                    <use xlink:href="/sprite.svg#vk"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="footer-copyright">
                                    <div class="row">
                                        <div class="col-12">
                                            <span>© 2024 Все права защищены.</span>
                                        </div>
                                        <div class="col-12">
                                            <a href="javascript://" target="_blank">Политика конфиденциальности</a>
                                        </div>
                                        <div class="col-12">
                                            <a href="javascript://" target="_blank">Сезон 2024</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>