@section('title', 'Новости - Добро пожаловать в мир книг вместе с проектом «Читай с детьми»! 📚')

@extends('layouts.app')

@section('header-class', 'header-accent-dark')

@section('head')
@vite('resources/scss/pages/posts/index.scss')
@endsection

@section('content')
<section class="section section-content section-news">
    <div class="container">
        <div class="section-news-inner">
            <!-- Заголовок секции -->
            <div class="section-news-title text-left text-md-center">
                <h3 class="h-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0s">
                    Новости
                </h3>
            </div>
            <!-- Зона контента -->
            <div class="section-news-content">
                <!-- Начало списка новостей -->
                <div class="row">
                    <!-- Список новостей -->
                    @include('posts.block')
                </div>
            </div>
            <!-- Кнопка Загрузить ещё -->
            <div class="section-news-action">
                <button type="button" class="btn btn-white btn-wider">
                    Загрузить еще
                </button>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
@vite('resources/js/pages/posts/index.js')
@endsection