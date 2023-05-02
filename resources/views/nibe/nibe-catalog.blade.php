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
      <span>@lang('catalog.nibe.breadcrumb')</span>
    </div>
    <div class="catalog-page__title">
      <h1>@lang('catalog.nibe.title')</h1>
      <div class="catalog-page__row">
        <div class="catalog-page__card">
          <div class="catalog-page__body">
            <div class="catalog-page__card-content">
              <h3 class="catalog-page__card-title">@lang('catalog.nibe.cards.s1255.model')</h3>
              <div class="catalog-page__card-text">@lang('catalog.nibe.cards.s1255.text')</div>
            </div>
            <div class="catalog-page__img">
              @if(App::isLocale('ua'))
              <img src="{{ asset('img/catalog/ua/s1255_.webp') }}" alt="">
              @elseif(App::isLocale('ru'))
              <img src="{{ asset('img/catalog/ru/s1255_.webp') }}" alt="">
              @endif
            </div>
          </div>
          <div class="catalog-page__link">
            <a class="catalog__link"
              href="{{ route('nibe-s1255', ['locale' => __('lang.current')]) }}">@lang('catalog.link')</a>
          </div>
        </div>
        <div class="catalog-page__card">
          <div class="catalog-page__body">
            <div class="catalog-page__card-content">
              <h3 class="catalog-page__card-title">@lang('catalog.nibe.cards.s1155.model')</h3>
              <div class="catalog-page__card-text">@lang('catalog.nibe.cards.s1155.text')</div>
            </div>
            <div class="catalog-page__img">
              @if(App::isLocale('ua'))
              <img src="{{ asset('img/catalog/ua/s1155_.webp') }}" alt="">
              @elseif(App::isLocale('ru'))
              <img src="{{ asset('img/catalog/ru/s1155_.webp') }}" alt="">
              @endif
            </div>
          </div>
          <div class="catalog-page__link">
            <a class="catalog__link"
              href="{{ route('nibe-s1155', ['locale' => __('lang.current')]) }}">@lang('catalog.link')</a>
          </div>
        </div>
      </div>
      <div class="catalog-page__row">
        <div class="catalog-page__card">
          <div class="catalog-page__body">
            <div class="catalog-page__card-content">
              <h3 class="catalog-page__card-title">@lang('catalog.nibe.cards.f1255.model')</h3>
              <div class="catalog-page__card-text">@lang('catalog.nibe.cards.f1255.text')</div>
            </div>
            <div class="catalog-page__img">
              @if(App::isLocale('ua'))
              <img src="{{ asset('img/catalog/ua/f1255_.webp') }}" alt="">
              @elseif(App::isLocale('ru'))
              <img src="{{ asset('img/catalog/ru/f1255_.webp') }}" alt="">
              @endif
            </div>
          </div>
          <div class="catalog-page__link">
            <a class="catalog__link"
              href="{{ route('nibe-f1255', ['locale' => __('lang.current')]) }}">@lang('catalog.link')</a>
          </div>
        </div>
        <div class="catalog-page__card">
          <div class="catalog-page__body">
            <div class="catalog-page__card-content">
              <h3 class="catalog-page__card-title">@lang('catalog.nibe.cards.f1155.model')</h3>
              <div class="catalog-page__card-text">@lang('catalog.nibe.cards.f1155.text')</div>
            </div>
            <div class="catalog-page__img">
              @if(App::isLocale('ua'))
              <img src="{{ asset('img/catalog/ua/f1155_.webp') }}" alt="">
              @elseif(App::isLocale('ru'))
              <img src="{{ asset('img/catalog/ru/f1155_.webp') }}" alt="">
              @endif
            </div>
          </div>
          <div class="catalog-page__link">
            <a class="catalog__link"
              href="{{ route('nibe-f1155', ['locale' => __('lang.current')]) }}">@lang('catalog.link')</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection