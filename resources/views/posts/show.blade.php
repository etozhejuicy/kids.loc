@section('title', 'Заголовок новости - Добро пожаловать в мир книг вместе с проектом «Читай с детьми»! 📚')

@extends('layouts.app')

@section('header-class', 'header-accent-dark')

@section('head')
@vite('resources/scss/pages/posts/show.scss')
@endsection

@section('content')
@include('sections.posts.cover')
@include('sections.posts.post')
@include('sections.posts.authors')
@include('sections.posts.program')
@include('sections.posts.photo')
@include('sections.posts.video')
@endsection

@section('modals')
<!-- Модалка фото -->
<div class="modal modal-media" data-modal-id="photoModal">
    <button type="button" class="modal-close" btn-close-modal></button>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <!-- Начало свайпера -->
                <div class="modal-media-swiper">
                    <!-- Слайдер медиа-контента -->
                    <div class="swiper-container swiper-media">
                        <!-- Обертка слайдера -->
                        <div class="swiper-wrapper">
                            <!-- Слайд -->
                            <div class="swiper-slide">
                                <!-- В данный блок с атрибутом [data-content] импортируем изображение вида <img src />, либо видео в формате <iframe> -->
                                <div class="modal-media-wrapper" data-content>
                                    <!-- Изображение для примера -->
                                    <img src="/assets/images/pages/posts/show/sections/photo/image.png">
                                </div>
                            </div>
                            <!-- Слайд -->
                            <div class="swiper-slide">
                                <!-- В данный блок с атрибутом [data-content] импортируем изображение вида <img src />, либо видео в формате <iframe> -->
                                <div class="modal-media-wrapper" data-content>
                                    <!-- Изображение для примера -->
                                    <img src="/assets/images/pages/posts/show/sections/photo/image.png">
                                </div>
                            </div>
                            <!-- Слайд -->
                            <div class="swiper-slide">
                                <!-- В данный блок с атрибутом [data-content] импортируем изображение вида <img src />, либо видео в формате <iframe> -->
                                <div class="modal-media-wrapper" data-content>
                                    <!-- Изображение для примера -->
                                    <img src="/assets/images/pages/posts/show/sections/photo/image.png">
                                </div>
                            </div>
                            <!-- Слайд -->
                            <div class="swiper-slide">
                                <!-- В данный блок с атрибутом [data-content] импортируем изображение вида <img src />, либо видео в формате <iframe> -->
                                <div class="modal-media-wrapper" data-content>
                                    <!-- Изображение для примера -->
                                    <img src="/assets/images/pages/posts/show/sections/photo/image.png">
                                </div>
                            </div>
                            <!-- Слайд -->
                            <div class="swiper-slide">
                                <!-- В данный блок с атрибутом [data-content] импортируем изображение вида <img src />, либо видео в формате <iframe> -->
                                <div class="modal-media-wrapper" data-content>
                                    <!-- Изображение для примера -->
                                    <img src="/assets/images/pages/posts/show/sections/photo/image.png">
                                </div>
                            </div>
                        </div>
                        <!-- Навигация слайдера -->
                        <div class="swiper-nav">
                            <!-- Кнопка Назад -->
                            <div class="swiper-btn media-btn-prev">
                                <img src="/assets/images/block/swiper/single-arrow-left.svg">
                            </div>
                            <!-- Кнопка Вперед -->
                            <div class="swiper-btn media-btn-next">
                                <img src="/assets/images/block/swiper/single-arrow-right.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@vite('resources/js/pages/posts/show.js')
@endsection