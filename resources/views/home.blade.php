@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle' ,__('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))
@section('page', 'home')

@section('content')

<section class="main">
    <div class="main__container">
        <div class="main__body">
            <div class="main__content">
                <h1>@lang('home.main.title')</h1>
                <button data-popup-id="main" class="main__btn link-on-popup">@lang('home.main.btn')</button>
            </div>
            <div class="main__img">
                <div class="main__img-bg"></div>
                @if(App::isLocale('ua'))
                <img src="{{ asset('img/home/ua/1_ua.webp') }}" alt="">
                @elseif(App::isLocale('ru'))
                <img src="{{ asset('img/home/ru/1_ru.webp') }}" alt="">
                @endif

            </div>
            <div data-popup-id="main" class="main__btn-mobile link-on-popup">@lang('home.main.btn')</div>
        </div>
    </div>
</section>




<a href="{{ route('form', ['locale' => __('lang.current')]) }}">LINK TO FORM</a>


@endsection