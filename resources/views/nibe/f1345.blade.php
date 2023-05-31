@extends('layout')
@section('title', __('titles.f1345.title'))
@section('description', __('titles.f1345.description'))
@section('ogTitle' ,__('titles.f1345.ogTitle'))
@section('ogDescription', __('titles.f1345.ogDescription'))
@section('ogUrl', __('titles.f1345.ogUrl'))
@section('page', 'home')

@section('content')
<section class="breadcrumbs">
  <div class="breadcrumbs__container">
    <div class="catalog-page__breadcrumbs">
      <a href="{{ route('home', ['locale' => __('lang.current')]) }}">@lang('breadcrumbs.main')</a> -
      <a href="{{ route('nibe-catalog', ['locale' => __('lang.current')]) }}">@lang('breadcrumbs.nibe.catalog')</a> -
      <span>@lang('breadcrumbs.nibe.f1345')</span>
    </div>
  </div>
</section>
<section class="product">
  <div class="product__container">
    <div class="product__body">
      <div class="product__img">
        @if(App::isLocale('ua'))
        <img src="{{ asset('img/nibe/pumps/ua/тепловий-насос-Nibe-F1345.webp') }}" alt="Тепловий насос Nibe F1345">
        @elseif(App::isLocale('ru'))
        <img src="{{ asset('img/nibe/pumps/ru/тепловой-насос-Nibe-F1345.webp') }}" alt="Тепловой насос Nibe F1345">
        @endif
      </div>
      <div class="product__content">
        <h1 class="product__content-title">@lang('product.nibe.s1155.title')</h1>
        <p class="product__content-text">@lang('product.nibe.s1155.text')</p>
        <div class="product__content-actions">
          <button data-product="@lang('product.nibe.s1155.lead')" data-popup-id="main"
            class="product__content-btn-call link-on-popup">@lang('product.call')</button>
          <a href="#modifications" class="product__content-btn-choose ancor">@lang('product.choose')</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="modifications" class="modifications">
  <div class="modifications__container">
    <h2 class="modifications__title">@lang('product.nibe.s1255.modifications.title')</h2>
    <div class="modifications__body">
      <div class="modifications__item">
        <h3 class="modifications__text">@lang('product.nibe.f1345.60_')</h3>
        <button data-product="@lang('product.nibe.f1345.60_')" data-popup-id="main"
          class="modifications__link link-on-popup">@lang('product.nibe.s1255.modifications.link')</button>
      </div>
      <div class="modifications__item">
        <h3 class="modifications__text">@lang('product.nibe.f1345.40_')</h3>
        <button data-product="@lang('product.nibe.f1345.40_')" data-popup-id="main"
          class="modifications__link link-on-popup">@lang('product.nibe.s1255.modifications.link')</button>
      </div>
      <div class="modifications__item">
        <h3 class="modifications__text">@lang('product.nibe.f1345.60')</h3>
        <button data-product="@lang('product.nibe.f1345.60')" data-popup-id="main"
          class="modifications__link link-on-popup">@lang('product.nibe.s1255.modifications.link')</button>
      </div>
      <div class="modifications__item">
        <h3 class="modifications__text">@lang('product.nibe.f1345.40')</h3>
        <button data-product="@lang('product.nibe.f1345.40')" data-popup-id="main"
          class="modifications__link link-on-popup">@lang('product.nibe.s1255.modifications.link')</button>
      </div>
      <div class="modifications__item">
        <h3 class="modifications__text">@lang('product.nibe.f1345.30')</h3>
        <button data-product="@lang('product.nibe.f1345.30')" data-popup-id="main"
          class="modifications__link link-on-popup">@lang('product.nibe.s1255.modifications.link')</button>
      </div>
      <div class="modifications__item">
        <h3 class="modifications__text">@lang('product.nibe.f1345.24')</h3>
        <button data-product="@lang('product.nibe.f1345.24')" data-popup-id="main"
          class="modifications__link link-on-popup">@lang('product.nibe.s1255.modifications.link')</button>
      </div>
    </div>
  </div>
</section>
<section class="review">
  <div class="review__container">
    <h2 class="review__title">@lang('product.nibe.s1255.review.title')</h2>
    <h3 class="review__sub-title">@lang('product.nibe.s1255.review.sub_title')</h3>
    <p class="review__text">@lang('product.nibe.s1255.review.text-1')</p>
    <div class="review__row review-row-1">
      <div class="review__img">
        @if(App::isLocale('ua'))
        <img src="{{ asset('img/nibe/s1255/ua/1_.webp') }}" alt="">
        @elseif(App::isLocale('ru'))
        <img src="{{ asset('img/nibe/s1255/ru/1_.webp') }}" alt="">
        @endif
      </div>
      <p class="review__text">@lang('product.nibe.s1255.review.text-2')</p>
    </div>
    <p class="review__text">@lang('product.nibe.s1255.review.text-3')</p>
    <div class="review__row review-row-2">
      <div class="review__row-item">
        <div class="review__img">
          @if(App::isLocale('ua'))
          <img src="{{ asset('img/nibe/s1255/ua/2_.webp') }}" alt="">
          @elseif(App::isLocale('ru'))
          <img src="{{ asset('img/nibe/s1255/ru/2_.webp') }}" alt="">
          @endif
        </div>
        <p class="review__text">@lang('product.nibe.s1255.review.text-4')</p>
      </div>
      <div class="review__row-item">
        <div class="review__img">
          @if(App::isLocale('ua'))
          <img src="{{ asset('img/nibe/s1255/ua/3_.webp') }}" alt="">
          @elseif(App::isLocale('ru'))
          <img src="{{ asset('img/nibe/s1255/ru/3_.webp') }}" alt="">
          @endif
        </div>
        <p class="review__text">@lang('product.nibe.s1255.review.text-5')</p>
      </div>
      <div class="review__row-item">
        <div class="review__img">
          @if(App::isLocale('ua'))
          <img src="{{ asset('img/nibe/s1255/ua/4_.webp') }}" alt="">
          @elseif(App::isLocale('ru'))
          <img src="{{ asset('img/nibe/s1255/ru/4_.webp') }}" alt="">
          @endif
        </div>
        <p class="review__text">@lang('product.nibe.s1255.review.text-6')</p>
      </div>
    </div>
    <p class="review__text-mb24">@lang('product.nibe.s1255.review.text-7')</p>
    <div class="review__img-1">
      @if(App::isLocale('ua'))
      <img src="{{ asset('img/nibe/s1255/ua/5_.webp') }}" alt="">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset('img/nibe/s1255/ru/5_.webp') }}" alt="">
      @endif
    </div>
    <p class="review__text-mb24">@lang('product.nibe.s1255.review.text-8')</p>
    <div class="review__row review-row-3">
      <div class="review__img">
        @if(App::isLocale('ua'))
        <img src="{{ asset('img/nibe/s1255/ua/6_.webp') }}" alt="">
        @elseif(App::isLocale('ru'))
        <img src="{{ asset('img/nibe/s1255/ru/6_.webp') }}" alt="">
        @endif
      </div>
      <div class="review__img">
        @if(App::isLocale('ua'))
        <img src="{{ asset('img/nibe/s1255/ua/7_.webp') }}" alt="">
        @elseif(App::isLocale('ru'))
        <img src="{{ asset('img/nibe/s1255/ru/7_.webp') }}" alt="">
        @endif
      </div>
      <div class="review__img">
        @if(App::isLocale('ua'))
        <img src="{{ asset('img/nibe/s1255/ua/8_.webp') }}" alt="">
        @elseif(App::isLocale('ru'))
        <img src="{{ asset('img/nibe/s1255/ru/8_.webp') }}" alt="">
        @endif
      </div>
    </div>
    <p class="review__text-mb24">@lang('product.nibe.s1255.review.text-9')</p>
    <div class="review__img-2">
      @if(App::isLocale('ua'))
      <img src="{{ asset('img/nibe/s1255/ua/9_.webp') }}" alt="">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset('img/nibe/s1255/ru/9_.webp') }}" alt="">
      @endif
    </div>
    <p class="review__text-mb24">@lang('product.nibe.s1255.review.text-10')</p>
    <div class="review__row review-row-4">
      <div class="review__img">
        @if(App::isLocale('ua'))
        <img src="{{ asset('img/nibe/s1255/ua/10_.webp') }}" alt="">
        @elseif(App::isLocale('ru'))
        <img src="{{ asset('img/nibe/s1255/ru/10_.webp') }}" alt="">
        @endif
      </div>
      <div class="review__img">
        @if(App::isLocale('ua'))
        <img src="{{ asset('img/nibe/s1255/ua/11_.webp') }}" alt="">
        @elseif(App::isLocale('ru'))
        <img src="{{ asset('img/nibe/s1255/ru/11_.webp') }}" alt="">
        @endif
      </div>
    </div>
    <p class="review__text-mb24">@lang('product.nibe.s1255.review.text-11')</p>
    <div class="review__img-3">
      @if(App::isLocale('ua'))
      <img src="{{ asset('img/nibe/s1255/ua/12_.webp') }}" alt="">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset('img/nibe/s1255/ru/12_.webp') }}" alt="">
      @endif
    </div>
    <p class="review__text-mb24">@lang('product.nibe.s1255.review.text-12')</p>
    <div class="review__row review-row-5">
      <div class="review__img">
        @if(App::isLocale('ua'))
        <img src="{{ asset('img/nibe/s1255/ua/13_.webp') }}" alt="">
        @elseif(App::isLocale('ru'))
        <img src="{{ asset('img/nibe/s1255/ru/13_.webp') }}" alt="">
        @endif
      </div>
      <div class="review__img">
        @if(App::isLocale('ua'))
        <img src="{{ asset('img/nibe/s1255/ua/14_.webp') }}" alt="">
        @elseif(App::isLocale('ru'))
        <img src="{{ asset('img/nibe/s1255/ru/14_.webp') }}" alt="">
        @endif
      </div>
    </div>
    <p class="review__text-mb24">@lang('product.nibe.s1255.review.text-13')</p>
    <div class="review__img-no-wrapper">
      @if(App::isLocale('ua'))
      <img src="{{ asset('img/nibe/s1255/ua/15_.webp') }}" alt="">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset('img/nibe/s1255/ru/15_.webp') }}" alt="">
      @endif
    </div>
    <p class="review__text-mb24">@lang('product.nibe.s1255.review.text-14')</p>
    <div class="review__img-no-wrapper">
      @if(App::isLocale('ua'))
      <img src="{{ asset('img/nibe/s1255/ua/16_.webp') }}" alt="">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset('img/nibe/s1255/ru/16_.webp') }}" alt="">
      @endif
    </div>
    <p class="review__text-mb24">@lang('product.nibe.s1255.review.text-15')</p>
    <div class="review__img-no-wrapper">
      @if(App::isLocale('ua'))
      <img src="{{ asset('img/nibe/s1255/ua/17_.webp') }}" alt="">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset('img/nibe/s1255/ru/17_.webp') }}" alt="">
      @endif
    </div>
    <p class="review__text-mb24">@lang('product.nibe.s1255.review.text-16')</p>
    <div class="review__img-no-wrapper">
      @if(App::isLocale('ua'))
      <img src="{{ asset('img/nibe/s1255/ua/18_.webp') }}" alt="">
      @elseif(App::isLocale('ru'))
      <img src="{{ asset('img/nibe/s1255/ru/18_.webp') }}" alt="">
      @endif
    </div>
  </div>
</section>
<section class="heat-pump-water-water pump">
  <div class="pump__content content-water">
    <div class="content-water__container">
      <h2>@lang('home.water.title')</h2>
      <div class="content-water__text">
        <p class="content-water__text-item">@lang('home.water.content.1')</p>
        <p class="content-water__text-item">@lang('home.water.content.2')</p>
      </div>
    </div>
  </div>
  <div class="pump__presentation presentation-pump">
    <div class="presentation-pump__container">
      <div class="presentation-pump__body _animate">
        <div class="presentation-pump__img-wrapper">
          <div class="presentation-pump__img">
            <div class="presentation-pump__dot-lt"><span></span></div>
            <div class="presentation-pump__dot-lb"><span></span></div>
            <div class="presentation-pump__dot-rt"><span></span></div>
            <div class="presentation-pump__dot-rb"><span></span></div>
            <div class="presentation-pump__bg"></div>
            @if(App::isLocale('ua'))
            <img src="{{ asset('img/home/ua/5_.webp') }}" alt="">
            @elseif(App::isLocale('ru'))
            <img src="{{ asset('img/home/ua/5_.webp') }}" alt="">
            @endif
          </div>
        </div>
        <div class="presentation-pump__cards">
          <h3>@lang('home.water.card.title')</h3>
          <div class="presentation-pump__card">
            <div class="presentation-pump__card-item card-left">
              @lang('home.water.card.1')
            </div>
            <div class="presentation-pump__card-item card-right">
              @lang('home.water.card.3')
            </div>
          </div>
          <div class="presentation-pump__card">
            <div class="presentation-pump__card-item card-left">
              @lang('home.water.card.2')
            </div>
            <div class="presentation-pump__card-item card-right">
              @lang('home.water.card.4')
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<section class="ground-water-heat-pump pump">
  <div class="pump__content content-water">
    <div class="content-water__container">
      <h2>@lang('home.ground.title')</h2>
      <div class="content-water__text">
        <p class="content-water__text-item">@lang('home.ground.content.1')</p>
        <p class="content-water__text-item">@lang('home.ground.content.2')</p>
      </div>
    </div>
  </div>
  <div class="pump__presentation presentation-pump">
    <div class="presentation-pump__container">
      <div class="presentation-pump__body _animate">
        <div class="presentation-pump__img-wrapper">
          <div class="presentation-pump__img ground">
            <div class="presentation-pump__dot-lt"><span></span></div>
            <div class="presentation-pump__dot-lb"><span></span></div>
            <div class="presentation-pump__dot-rt"><span></span></div>
            <div class="presentation-pump__dot-rb"></div>
            <div class="presentation-pump__bg"></div>
            @if(App::isLocale('ua'))
            <img src="{{ asset('img/home/ua/5_.webp') }}" alt="">
            @elseif(App::isLocale('ru'))
            <img src="{{ asset('img/home/ua/5_.webp') }}" alt="">
            @endif
          </div>
        </div>
        <div class="presentation-pump__cards ground">
          <h3>@lang('home.ground.card.title')</h3>
          <div class="presentation-pump__card">
            <div class="presentation-pump__card-item card-left">
              @lang('home.ground.card.1')
            </div>
            <div class="presentation-pump__card-item card-right">
              @lang('home.ground.card.3')
            </div>
          </div>
          <div class="presentation-pump__card">
            <div class="presentation-pump__card-item card-left">
              @lang('home.ground.card.2')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection