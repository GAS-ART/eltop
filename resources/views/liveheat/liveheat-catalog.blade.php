@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle' ,__('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))
@section('page', 'home')

@section('content')
<section class="catalog-page">
  <div class="catalog-page__container">
    <div class="catalog-page__breadcrumbs breadcrumbs">
      <a href="{{ route('home', ['locale' => __('lang.current')]) }}">@lang('main.breadcrumb')</a> -
      <span>@lang('catalog.liveheat.breadcrumb')</span>
    </div>
    <div class="catalog-page__title">
      <h1>@lang('catalog.liveheat.title')</h1>
      <div class="catalog-page__row">
        <div class="catalog-page__card">
          <div class="catalog-page__body">
            <div class="catalog-page__card-content">
              <h3 class="catalog-page__card-title">@lang('catalog.liveheat.fwwhcd150c.model')</h3>
              <div class="catalog-page__card-text">@lang('catalog.liveheat.fwwhcd150c.text')</div>
            </div>
            <div class="catalog-page__img">
              @if(App::isLocale('ua'))
              <img src="{{ asset('img/home/ua/5_.webp') }}" alt="">
              @elseif(App::isLocale('ru'))
              <img src="{{ asset('img/home/ru/5_.webp') }}" alt="">
              @endif
            </div>
          </div>
          <div class="catalog-page__link">
            <a class="catalog__link"
              href="{{ route('fwwhcd150c', ['locale' => __('lang.current')]) }}">@lang('catalog.link')</a>
          </div>
        </div>
        <div class="catalog-page__card">
          <div class="catalog-page__body">
            <div class="catalog-page__card-content">
              <h3 class="catalog-page__card-title">@lang('catalog.liveheat.fwwihcd080c.model')</h3>
              <div class="catalog-page__card-text">@lang('catalog.liveheat.fwwihcd080c.text')</div>
            </div>
            <div class="catalog-page__img">
              @if(App::isLocale('ua'))
              <img src="{{ asset('img/home/ua/6_.webp') }}" alt="">
              @elseif(App::isLocale('ru'))
              <img src="{{ asset('img/home/ru/6_.webp') }}" alt="">
              @endif
            </div>
          </div>
          <div class="catalog-page__link">
            <a class="catalog__link"
              href="{{ route('fwwihcd080c', ['locale' => __('lang.current')]) }}">@lang('catalog.link')</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection