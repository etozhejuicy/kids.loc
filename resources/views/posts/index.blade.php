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
            <div class="section-news-title text-left text-md-center">
                <h3 class="h-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0s">
                    Новости
                </h3>
            </div>
            <div class="section-news-content">
                <div class="row">
                    @for ($i = 1; $i < 20; $i ++)
                        @include('posts.item')
                        @endfor
                        </div>
                </div>
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