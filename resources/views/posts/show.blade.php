@section('title', 'Заголовок новости - Добро пожаловать в мир книг вместе с проектом «Читай с детьми»! 📚')

@extends('layouts.app')

@section('header-class', 'header-accent-dark')

@section('head')
@vite('resources/scss/pages/posts/show.scss')
@endsection

@section('content')

<!-- видео с мероприятия -->
@include('sections.posts.video')
@endsection

@section('scripts')
@vite('resources/js/pages/posts/show.js')
@endsection