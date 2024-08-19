@section('title', 'Добро пожаловать в мир книг вместе с проектом «Читай с детьми»! 📚')

@extends('layouts.app')

@section('header-class', 'header-accent-dark')

@section('head')
@vite('resources/scss/pages/index.scss')
@endsection

@section('content')
@include('sections.main.cover')
@endsection

@section('scripts')
@vite('resources/js/pages/index.js')
@endsection