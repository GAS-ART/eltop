@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle' ,__('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))
@section('page', 'home')

@section('content')
<section class="breadcrumbs">
  <div class="breadcrumbs__container">
    <div class="catalog-page__breadcrumbs">
      <a href="{{ route('home', ['locale' => __('lang.current')]) }}">@lang('breadcrumbs.main')</a> -
      <a href="{{ route('nibe-catalog', ['locale' => __('lang.current')]) }}">@lang('breadcrumbs.nibe.catalog')</a> -
      <a href="{{ route('nibe-s1255', ['locale' => __('lang.current')]) }}">@lang('breadcrumbs.nibe.s1255')</a> -
      <span>@lang('breadcrumbs.nibe.nibe-s1255-6kw-400V')</span>
    </div>
  </div>
</section>
<section class="product">
  <div class="product__container">
    <div class="product__body">
      <div class="product__img">
        @if(App::isLocale('ua'))
        <img src="{{ asset('img/catalog/ua/s1255_.webp') }}" alt="">
        @elseif(App::isLocale('ru'))
        <img src="{{ asset('img/catalog/ru/s1255_.webp') }}" alt="">
        @endif
      </div>
      <div class="product__content">
        <h1 class="product__content-title">@lang('product.nibe.s1255.modifications.6.title')</h1>
        <p class="product__content-text main-product">@lang('product.nibe.s1255.modifications.6.text')</p>
        <div class="product__icons">
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/1.svg')}}" alt="">
          </div>
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/2.svg')}}" alt="">
          </div>
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/3.svg')}}" alt="">
          </div>
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/4.svg')}}" alt="">
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
            <img src="{{asset('/img/product/icons/8.svg')}}" alt="">
          </div>
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/9.svg')}}" alt="">
          </div>
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/10.svg')}}" alt="">
          </div>
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/11.svg')}}" alt="">
          </div>
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/12.svg')}}" alt="">
          </div>
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/13.svg')}}" alt="">
          </div>
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/14.svg')}}" alt="">
          </div>
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/15.svg')}}" alt="">
          </div>
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/16.svg')}}" alt="">
          </div>
          <div class="product__icon">
            <img src="{{asset('/img/product/icons/17.svg')}}" alt="">
          </div>
        </div>
        <div class="product__content-actions">
          <button data-product="@lang('product.nibe.s1255.modifications.6.title')" data-popup-id="main"
            class="product__content-btn-call link-on-popup">@lang('product.call')</button>
          <button data-product="@lang('product.nibe.s1255.modifications.6.title')" data-popup-id="main"
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
          <li class="tabs__list-item">
            <p data-tab-name="tab-2" class="tabs__list-text" role="tab">
              @lang('product.nibe.s1255.modifications.6.tabs.technical_data.title')</p>
          </li>
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
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nihil sed error, provident aliquam nemo quis sint
          rem nesciunt dolor, corporis consequatur unde, pariatur nisi dolorem voluptatibus ipsam alias consequuntur?
          Dolores quod atque nobis doloribus laudantium totam autem ducimus quisquam eos vel, neque aliquid. Quidem,
          veritatis blanditiis dolorem sapiente voluptatibus consequatur vero corrupti sed laborum impedit odit! Ullam,
          odit debitis.
          Quasi, perferendis? Alias, enim incidunt. Inventore, temporibus error! Deserunt vitae praesentium aliquam
          exercitationem, quos totam tempore cum facilis architecto impedit in numquam repudiandae omnis rerum labore
          veritatis odit quam non!
          Necessitatibus quas consectetur nesciunt a, maiores obcaecati sint quae dolorum tempore blanditiis minima
          quidem sed doloremque! Molestiae vel eveniet quia earum, quam expedita perspiciatis ullam nesciunt magni cum
          ipsum nam.
          Temporibus, assumenda ducimus, ab inventore accusamus dignissimos eveniet ipsam tenetur dolore nesciunt
          debitis quod corrupti id culpa dicta maiores voluptates odit perferendis, possimus recusandae. Voluptatum aut
          ut officiis possimus. Sapiente.
          Aspernatur, nulla sint! Doloremque, vero fugit? Nemo fuga nulla odit voluptatibus recusandae necessitatibus,
          numquam laborum, neque inventore quidem nobis est tenetur hic, quaerat dolorem quas. Blanditiis incidunt illum
          a at.
          Eius laudantium doloremque perferendis nulla deserunt dolores voluptate cupiditate dolorem ipsum vel quos sint
          reiciendis ullam ad culpa labore odit, nisi numquam ducimus suscipit aut neque animi facere! Tenetur,
          corporis!
          Maxime, aperiam? Quia perspiciatis provident modi nobis aliquid atque sit est nisi maxime aspernatur! Eos,
          unde. Aspernatur, soluta asperiores. Tempore reprehenderit porro sunt eum, laborum eos ut numquam est
          voluptatibus?
          Quidem cupiditate ut similique necessitatibus optio quas natus culpa neque voluptates asperiores atque, vitae,
          excepturi adipisci autem facilis ex sint ea assumenda debitis doloribus provident non. Magnam rem eos in.
          Praesentium, repudiandae iusto? Aperiam voluptatem totam veniam corporis obcaecati, officia vero minus rerum
          at magni et, eaque repudiandae temporibus a accusamus reiciendis placeat dolor quasi! Deleniti necessitatibus
          harum reiciendis voluptatibus.
        </div>
        <div role="tabpanel" class="tabs__tab tab-2">
          <div class="tabs__technical-data technical-data">
            <table>
              <thead>
                <tr>
                  <th scope="col">@lang('product.nibe.s1255.modifications.6.tabs.technical_data.sub-title.name')</th>
                  <th scope="col">@lang('product.nibe.s1255.modifications.6.tabs.technical_data.sub-title.measure')</th>
                  <th scope="col">@lang('product.nibe.s1255.modifications.6.tabs.technical_data.sub-title.value')</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>@lang('product.nibe.s1255.modifications.6.tabs.technical_data.1.name')</е>
                  <td>@lang('product.nibe.s1255.modifications.6.tabs.technical_data.1.measure')</td>
                  <td>@lang('product.nibe.s1255.modifications.6.tabs.technical_data.1.value')</td>
                </tr>
                <tr>
                  <td>@lang('product.nibe.s1255.modifications.6.tabs.technical_data.2.name')</е>
                  <td>@lang('product.nibe.s1255.modifications.6.tabs.technical_data.2.measure')</td>
                  <td>@lang('product.nibe.s1255.modifications.6.tabs.technical_data.2.value')</td>
                </tr>
                <tr>
                  <td>@lang('product.nibe.s1255.modifications.6.tabs.technical_data.3.name')</е>
                  <td>@lang('product.nibe.s1255.modifications.6.tabs.technical_data.3.measure')</td>
                  <td>@lang('product.nibe.s1255.modifications.6.tabs.technical_data.3.value')</td>
                </tr>
                <tr>
                  <td>@lang('product.nibe.s1255.modifications.6.tabs.technical_data.4.name')</е>
                  <td>@lang('product.nibe.s1255.modifications.6.tabs.technical_data.4.measure')</td>
                  <td>@lang('product.nibe.s1255.modifications.6.tabs.technical_data.4.value')</td>
                </tr>
                <tr>
                  <td>@lang('product.nibe.s1255.modifications.6.tabs.technical_data.5.name')</е>
                  <td>@lang('product.nibe.s1255.modifications.6.tabs.technical_data.5.measure')</td>
                  <td>@lang('product.nibe.s1255.modifications.6.tabs.technical_data.5.value')</td>
                </tr>
                <tr>
                  <td>@lang('product.nibe.s1255.modifications.6.tabs.technical_data.6.name')</е>
                  <td>@lang('product.nibe.s1255.modifications.6.tabs.technical_data.6.measure')</td>
                  <td>@lang('product.nibe.s1255.modifications.6.tabs.technical_data.6.value')</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div role="tabpanel" class="tabs__tab tab-3">
          <div class="tabs__characteristics characteristics">
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.nibe.s1255.modifications.6.tabs.characteristics.1-title')</div>
              <div class="characteristics__item">@lang('product.nibe.s1255.modifications.6.tabs.characteristics.1-text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.nibe.s1255.modifications.6.tabs.characteristics.2-title')</div>
              <div class="characteristics__item">@lang('product.nibe.s1255.modifications.6.tabs.characteristics.2-text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.nibe.s1255.modifications.6.tabs.characteristics.3-title')</div>
              <div class="characteristics__item">@lang('product.nibe.s1255.modifications.6.tabs.characteristics.3-text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.nibe.s1255.modifications.6.tabs.characteristics.4-title')</div>
              <div class="characteristics__item">@lang('product.nibe.s1255.modifications.6.tabs.characteristics.4-text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.nibe.s1255.modifications.6.tabs.characteristics.5-title')</div>
              <div class="characteristics__item">@lang('product.nibe.s1255.modifications.6.tabs.characteristics.5-text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.nibe.s1255.modifications.6.tabs.characteristics.6-title')</div>
              <div class="characteristics__item">@lang('product.nibe.s1255.modifications.6.tabs.characteristics.6-text')
              </div>
            </div>
            <div class="characteristics__items">
              <div class="characteristics__item">
                @lang('product.nibe.s1255.modifications.6.tabs.characteristics.7-title')</div>
              <div class="characteristics__item">@lang('product.nibe.s1255.modifications.6.tabs.characteristics.7-text')
              </div>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tabs__tab tab-4">
          <div class="tabs__documents documents">
            <div class="documents_items">
              <img src="{{asset('img/product/icons/pdf.svg')}}" alt="">
              <a href="/docs/1245, 1255 универсальная.pdf"
                download>@lang('product.nibe.s1255.modifications.6.tabs.documents.1')</a>
            </div>
            <div class="documents_items">
              <img src="{{asset('img/product/icons/pdf.svg')}}" alt="">
              <a href="/docs/1145, 1245, 1155, 1255, 1345, 1355 универсальная.pdf"
                download>@lang('product.nibe.s1255.modifications.6.tabs.documents.2')</a>
            </div>
            <div class="documents_items">
              <img src="{{asset('img/product/icons/pdf.svg')}}" alt="">
              <a href="/docs/1245, 1255 + SPA.pdf"
                download>@lang('product.nibe.s1255.modifications.6.tabs.documents.3')</a>
            </div>
            <div class="documents_items">
              <img src="{{asset('img/product/icons/pdf.svg')}}" alt="">
              <a href="/docs/1245, 1255 + активное охлаждение (4 трубы).pdf"
                download>@lang('product.nibe.s1255.modifications.6.tabs.documents.4')</a>
            </div>
            <div class="documents_items">
              <img src="{{asset('img/product/icons/pdf.svg')}}" alt="">
              <a href="/docs/Руководство монтажника S 1255.pdf"
                download>@lang('product.nibe.s1255.modifications.6.tabs.documents.5')</a>
            </div>
            <div class="documents_items">
              <img src="{{asset('img/product/icons/pdf.svg')}}" alt="">
              <a href="/docs/Каскадні і гібридні підключення повітря-вода ТН F і S.pdf"
                download>@lang('product.nibe.s1255.modifications.6.tabs.documents.6')</a>
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