@extends('layout')
@section('title', __('titles.fwwhcd150c.title'))
@section('description', __('titles.fwwhcd150c.description'))
@section('ogTitle' ,__('titles.fwwhcd150c.ogTitle'))
@section('ogDescription', __('titles.fwwhcd150c.ogDescription'))
@section('ogUrl', __('titles.fwwhcd150c.ogUrl'))
@section('page', 'home')

@section('content')
<section class="breadcrumbs">
  <div class="breadcrumbs__container">
    <div class="catalog-page__breadcrumbs">
      <a href="{{ route('home', ['locale' => __('lang.current')]) }}">@lang('breadcrumbs.main')</a> -
      <a
        href="{{ route('liveheat-catalog', ['locale' => __('lang.current')]) }}">@lang('breadcrumbs.liveheat.catalog')</a>
      -
      <span>@lang('breadcrumbs.liveheat.150')</span>
    </div>
  </div>
</section>
<section class="product">
  <div class="product__container">
    <div class="product__body">
      <div class="product__img">
        @if(App::isLocale('ua'))
        <img src="{{ asset('img/home/ua/теплові-насоси-Liveheat.webp') }}" alt="Теплові насоси Liveheat 60кв">
        @elseif(App::isLocale('ru'))
        <img src="{{ asset('img/home/ru/тепловые-насосы-Liveheat.webp') }}" alt="Тепловые насосы Liveheat 60кв">
        @endif
      </div>
      <div class="product__content">
        <h1 class="product__content-title">@lang('product.liveheat.150.title')</h1>
        <p class="product__content-text main-product">@lang('product.liveheat.150.text')</p>
        <div class="product__icons">
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/3.svg')}}" alt="">
          </div>
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/5.svg')}}" alt="">
          </div>
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/6.svg')}}" alt="">
          </div>
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/7.svg')}}" alt="">
          </div>
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/10.svg')}}" alt="">
          </div>
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/12.svg')}}" alt="">
          </div>
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/15.svg')}}" alt="">
          </div>
        </div>
        <div class="product__content-actions">
          <button data-product="LIVEHEAT FIWHCD150C" data-popup-id="main"
            class="product__content-btn-call link-on-popup">@lang('product.call')</button>
          <button data-product="LIVEHEAT FIWHCD150C" data-popup-id="main"
            class="product__content-btn-choose link-on-popup">@lang('product.choose')</button>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="tabs">
  <div class="tabs__container">
    <div class="tabs__body">
      <nav class="tabs__nav">
        <ul class="tabs__list">
          <li class="tabs__list-item active">
            <p data-tab-name="tab-1" class="tabs__list-text" role="tab">
              @lang('product.nibe.s1255.modifications.6.tabs.review.title')</p>
          </li>
          {{-- <li class="tabs__list-item">
            <p data-tab-name="tab-2" class="tabs__list-text" role="tab">
              @lang('product.nibe.s1255.modifications.6.tabs.technical_data.title')</p>
          </li> --}}
          <li class="tabs__list-item">
            <p data-tab-name="tab-3" class="tabs__list-text" role="tab">
              @lang('product.nibe.s1255.modifications.6.tabs.characteristics.title')</p>
          </li>
          <li class="tabs__list-item">
            <p data-tab-name="tab-4" class="tabs__list-text" role="tab">
              @lang('product.nibe.s1255.modifications.6.tabs.documents.title')</p>
          </li>
        </ul>
      </nav>
      <div class="tabs__content">
        <div role="tabpanel" class="tabs__tab tab-1 active">
          <div class="review">
            <div class="review__item">
              <h3>@lang('product.liveheat.review.1_title')</h3>
              <div class="review__img">
                @if(App::isLocale('ua'))
                <img src="{{ asset('img/liveheat/ua/60/1_.webp') }}" alt="">
                <img class="review__img-logo" src="{{asset('img/home/ua/liveheat.svg')}}" alt="">
                @elseif(App::isLocale('ru'))
                <img src="{{ asset('img/liveheat/ru/60/1_.webp') }}" alt="">
                <img class="review__img-logo" src="{{asset('img/home/ru/liveheat.svg')}}" alt="">
                @endif
              </div>
            </div>
            <div class="review__item">
              <h3>@lang('product.liveheat.review_60.2_title')</h3>
              <p>@lang('product.liveheat.review_60.2_text')</p>
              <div class="review__img">
                @if(App::isLocale('ua'))
                <img src="{{ asset('img/liveheat/ua/60/2_.webp') }}" alt="">
                @elseif(App::isLocale('ru'))
                <img src="{{ asset('img/liveheat/ru/60/2_.webp') }}" alt="">
                @endif
              </div>
            </div>
            <div class="review__item">
              <h3>@lang('product.liveheat.review_60.3_title')</h3>
              <p>@lang('product.liveheat.review_60.3_text')</p>
              <div class="review__img">
                @if(App::isLocale('ua'))
                <img src="{{ asset('img/liveheat/ua/60/3_.webp') }}" alt="">
                @elseif(App::isLocale('ru'))
                <img src="{{ asset('img/liveheat/ru/60/3_.webp') }}" alt="">
                @endif
              </div>
            </div>
            <div class="review__item">
              <h3>@lang('product.liveheat.review_60.4_title')</h3>
              <p>@lang('product.liveheat.review_60.4_text')</p>
              <div class="review__img">
                @if(App::isLocale('ua'))
                <img src="{{ asset('img/liveheat/ua/60/4_.webp') }}" alt="">
                @elseif(App::isLocale('ru'))
                <img src="{{ asset('img/liveheat/ru/60/4_.webp') }}" alt="">
                @endif
              </div>
            </div>
            {{-- <div class="review__item">
              <h3>@lang('product.liveheat.review.5_title')</h3>
              <div class="review__img">
                @if(App::isLocale('ua'))
                <img src="{{ asset('img/liveheat/ua/5_.webp') }}" alt="">
                @elseif(App::isLocale('ru'))
                <img src="{{ asset('img/liveheat/ru/5_.webp') }}" alt="">
                @endif
              </div>
            </div>
            <div class="review__item">
              <h3>@lang('product.liveheat.review.6_title')</h3>
              <p>@lang('product.liveheat.review.6_text')</p>
              <div class="review__img">
                @if(App::isLocale('ua'))
                <img src="{{ asset('img/liveheat/ua/6_.webp') }}" alt="">
                @elseif(App::isLocale('ru'))
                <img src="{{ asset('img/liveheat/ru/6_.webp') }}" alt="">
                @endif
              </div>
            </div> --}}
          </div>
        </div>
        <div role="tabpanel" class="tabs__tab tab-3">
          <div class="tabs__characteristics characteristics">
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.1_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.1_text')
              </div>
            </div>
            <div class="characteristics__items-title">
              @lang('product.liveheat.150.characteristics.10-35.title')
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.10-35.1_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.10-35.1_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.10-35.2_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.10-35.2_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.10-35.3_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.10-35.3_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.10-35.4_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.10-35.4_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.10-35.5_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.10-35.5_text')
              </div>
            </div>
            <div class="characteristics__items-title">
              @lang('product.liveheat.150.characteristics.10-45.title')
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.10-45.1_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.10-45.1_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.10-45.2_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.10-45.2_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.10-45.3_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.10-45.3_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.10-45.4_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.10-45.4_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.10-45.5_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.10-45.5_text')
              </div>
            </div>
            <div class="characteristics__items-title">
              @lang('product.liveheat.150.characteristics.15-45.title')
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.15-45.1_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.15-45.1_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.15-45.2_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.15-45.2_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.15-45.3_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.15-45.3_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.15-45.4_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.15-45.4_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.15-45.5_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.15-45.5_text')
              </div>
            </div>
            <div class="characteristics__items-title">
              @lang('product.liveheat.150.characteristics.30-7.title')
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.30-7.1_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.30-7.1_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.30-7.2_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.30-7.2_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.30-7.3_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.30-7.3_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.30-7.4_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.30-7.4_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.30-7.5_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.30-7.5_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.30-7.6_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.30-7.6_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.30-7.7_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.30-7.7_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.30-7.8_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.30-7.8_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.30-7.9_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.30-7.9_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.30-7.10_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.30-7.10_text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.liveheat.150.characteristics.30-7.11_title')</div>
              <div class="characteristics__item">@lang('product.liveheat.150.characteristics.30-7.11_text')
              </div>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tabs__tab tab-4">
          <div class="tabs__documents documents">
            <div class="documents_items">
              <img src="{{asset('img/product/icons/pdf.svg')}}" alt="">
              <a href="#" download>@lang('product.liveheat.150.docs_link')</a>
            </div>
          </div>
        </div>
      </div>
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