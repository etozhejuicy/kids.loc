<!-- Колонка карточки (для flexbox) -->
<div class="col-12 col-md-6">
    <!-- Карточка -->
    <div class="news-card">
        <div class="news-card-inner">
            <!-- Область изображения -->
            <div class="news-card-cover">
                <img data-src="" class="lazyload" />
            </div>
            <div class="news-card-content">
                <!-- Дата карточки -->
                <div class="news-card-date">
                    21.08.2024 в 17:00
                </div>
                <!-- Заголовок карточки -->
                <div class="news-card-title">
                    Lorem ipsum dolor sit amet
                </div>
                <!-- Описание карточки -->
                <div class="news-card-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                </div>
                <!-- Ссылка на новость -->
                <div class="news-card-link">
                    Читать
                </div>
            </div>
        </div>
        <a href="{{ Route('posts.show') }}" target="_blank" class="stretched-link"></a>
    </div>
</div>