@extends('layout')
@section('title', __('titles.nibe.title'))
@section('description', __('titles.nibe.description'))
@section('ogTitle' ,__('titles.nibe.ogTitle'))
@section('ogDescription', __('titles.nibe.ogDescription'))
@section('ogUrl', __('titles.nibe.ogUrl'))
@section('page', 'home')

@section('content')
<section class="breadcrumbs">
  <div class="breadcrumbs__container">
    <div class="catalog-page__breadcrumbs">
      <a href="{{ route('home', ['locale' => __('lang.current')]) }}">@lang('breadcrumbs.main')</a> -
      <span>@lang('breadcrumbs.nibe.catalog')</span>
    </div>
  </div>
</section>
<section class="catalog-page">
  <div class="catalog-page__container">
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
              <img src="{{ asset('img/nibe/pumps/ua/тепловий-насос-Nibe-S1255.webp') }}"
                alt="Тепловий насос Nibe S1255">
              @elseif(App::isLocale('ru'))
              <img src="{{ asset('img/nibe/pumps/ru/тепловой-насос-Nibe-S1255.webp') }}"
                alt="Тепловой насос Nibe S1255">
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
              <img src="{{ asset('img/nibe/pumps/ua/тепловий-насос-Nibe-S1155.webp') }}"
                alt="Тепловий насос Nibe S1155">
              @elseif(App::isLocale('ru'))
              <img src="{{ asset('img/nibe/pumps/ru/тепловой-насос-Nibe-S1155.webp') }}"
                alt="Тепловой насос Nibe S1155">
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
              <img src="{{ asset('img/nibe/pumps/ua/тепловий-насос-Nibe-F1355.webp') }}"
                alt="Тепловий насос Nibe F1355">
              @elseif(App::isLocale('ru'))
              <img src="{{ asset('img/nibe/pumps/ru/тепловой-насос-Nibe-F1355.webp') }}"
                alt="Тепловой насос Nibe F1355">
              @endif
            </div>
          </div>
          <div class="catalog-page__link">
            <a class="catalog__link"
              href="{{ route('nibe-f1355', ['locale' => __('lang.current')]) }}">@lang('catalog.link')</a>
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
              <img src="{{ asset('img/nibe/pumps/ua/тепловий-насос-Nibe-F1345.webp') }}"
                alt="Тепловий насос Nibe F1345">
              @elseif(App::isLocale('ru'))
              <img src="{{ asset('img/nibe/pumps/ru/тепловой-насос-Nibe-F1345.webp') }}"
                alt="Тепловой насос Nibe F1345">
              @endif
            </div>
          </div>
          <div class="catalog-page__link">
            <a class="catalog__link"
              href="{{ route('nibe-f1345', ['locale' => __('lang.current')]) }}">@lang('catalog.link')</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection