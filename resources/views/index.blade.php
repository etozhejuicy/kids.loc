@section('title', 'Читай с детьми')

@extends('layouts.app')

@section('header-class', 'header-accent-dark')

@section('head')
@vite('resources/scss/pages/index.scss')
@endsection

@section('content')
@include('sections.main.cover')
@include('sections.main.numbers')
@include('sections.main.target')
@include('sections.main.read')
@include('sections.main.cities')
@include('sections.main.graphic')
@include('sections.main.video')
@include('sections.main.news')
@include('sections.main.partners')
@include('sections.main.social')
@endsection

@section('scripts')
@vite('resources/js/pages/index.js')
@endsection