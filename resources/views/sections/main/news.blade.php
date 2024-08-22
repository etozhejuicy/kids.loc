<section class="section section-content section-news" id="news" data-scroll-center>
    <div class=" container">
        <div class="section-news-inner">
            <!-- Заголовок секции -->
            <div class="section-news-title text-left text-md-center">
                <h3 class="h-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0s">
                    Новости
                </h3>
            </div>
            <!-- Зона контента секции -->
            <div class="section-news-content">
                <!-- Начало списка карточек новостей -->
                <div class="row">
                    <!-- Блок со списком новостей -->
                    @include('posts.block')
                </div>
            </div>
            <!-- Кнопка Загрузить еще -->
            <div class="section-news-action">
                <button type="button" class="btn btn-white btn-wider">
                    Загрузить еще
                </button>
            </div>
        </div>
    </div>
</section>