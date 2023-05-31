@extends('layout')
@section('title', __('titles.liveheat.title'))
@section('description', __('titles.liveheat.description'))
@section('ogTitle' ,__('titles.liveheat.ogTitle'))
@section('ogDescription', __('titles.liveheat.ogDescription'))
@section('ogUrl', __('titles.liveheat.ogUrl'))
@section('page', 'home')

@section('content')
<section class="breadcrumbs">
  <div class="breadcrumbs__container">
    <div class="catalog-page__breadcrumbs">
      <a href="{{ route('home', ['locale' => __('lang.current')]) }}">@lang('breadcrumbs.main')</a> -
      <span>@lang('breadcrumbs.liveheat.catalog')</span>
    </div>
  </div>
</section>
<section class="catalog-page">
  <div class="catalog-page__container">
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
              <img src="{{ asset('img/home/ua/теплові-насоси-Liveheat.webp') }}" alt="Теплові насоси Liveheat">
              @elseif(App::isLocale('ru'))
              <img src="{{ asset('img/home/ru/тепловые-насосы-Liveheat.webp') }}" alt="Тепловые насосы Liveheat">
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
              <img src="{{ asset('img/home/ua/Liveheat-тепловий-насос.webp') }}" alt="Liveheat тепловий насос">
              @elseif(App::isLocale('ru'))
              <img src="{{ asset('img/home/ru/Liveheat-тепловой-насос.webp') }}" alt="Liveheat тепловой насос">
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