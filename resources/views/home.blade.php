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
                <h1 class="_animate">@lang('home.main.title')</h1>
                <button data-product="@lang('product.main')" data-popup-id="main"
                    class="main__btn link-on-popup _animate">@lang('home.main.btn')</button>
            </div>
            <div class="main__img _animate">
                <div class="main__img-bg"></div>
                @if(App::isLocale('ua'))
                <img src="{{ asset('img/home/ua/тепловий-насос.webp') }}" alt="Тепловий насос">
                <img class="main__img-logo" src="{{ asset('img/home/ua/liveheat.svg') }}" alt="Логотип liveheat">
                @elseif(App::isLocale('ru'))
                <img src="{{ asset('img/home/ru/Тепловой-насос.webp') }}" alt="Тепловой насос">
                <img class="main__img-logo" src="{{ asset('img/home/ru/liveheat.svg') }}" alt="Логотип liveheat">
                @endif
            </div>
            <button data-product="@lang('product.main')" data-popup-id="main"
                class="main__btn-mobile link-on-popup _animate">@lang('home.main.btn')</button>
        </div>
    </div>
</section>
<section class="what">
    <div class="what__container">
        <div class="what__body">
            <div class="what__img _animate">
                @if(App::isLocale('ua'))
                <img src="{{ asset('img/home/ua/тепловий-насос-Liveheat.webp') }}" alt="Тепловий насос Liveheat">
                @elseif(App::isLocale('ru'))
                <img src="{{ asset('img/home/ru/Тепловой-насос-Liveheat.webp') }}" alt="Тепловой насос Liveheat">
                @endif
            </div>
            <div class="what__text _animate">
                <h2>@lang('home.what.title')</h2>
                <p>@lang('home.what.text')</p>
            </div>
        </div>
    </div>
</section>
<section id="advantages" class="advantages">
    <div id="advantages-ancor" class="advantages__ancor"></div>
    <div class="advantages__container">
        <div class="advantages__body">
            <h2>@lang('home.advantages.title')</h2>
            <div class="advantages__row">
                <div class="advantages__items _animate">
                    <div class="advantages__item">
                        <div class="advantages__icon">
                            <div class="advantages__icon-bg"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                fill="none">
                                <g clip-path="url(#clip0_1_435)">
                                    <path
                                        d="M22.5378 15.7848C22.4627 15.4681 22.2302 15.2135 21.9217 15.111L17.3221 13.5775L20.5887 7.04434C20.7937 6.63328 20.6711 6.13341 20.2984 5.86422C19.924 5.59597 19.4113 5.63628 19.0872 5.96215L9.71218 15.3372C9.48236 15.567 9.38805 15.8993 9.46224 16.2152C9.5373 16.5319 9.76986 16.7865 10.0784 16.889L14.678 18.4225L11.4114 24.9557C11.2063 25.3667 11.329 25.8666 11.7016 26.1358C12.0748 26.4032 12.5865 26.3641 12.9129 26.0378L22.2879 16.6628C22.5177 16.433 22.612 16.1007 22.5378 15.7848Z"
                                        fill="url(#paint0_linear_1_435)" />
                                    <path
                                        d="M16 0C11.2419 0 6.74756 2.21287 3.75 5.78306V4.75C3.75 4.23181 3.33069 3.8125 2.8125 3.8125C2.29431 3.8125 1.875 4.23181 1.875 4.75V8.73256C1.875 9.62725 3.03062 9.75531 2.8125 9.67006C2.83175 9.67006 2.85094 9.66913 2.87019 9.66825L6.62019 9.43569C7.13744 9.40362 7.53025 8.95869 7.49819 8.44231C7.46613 7.92594 7.01481 7.53687 6.50481 7.56431L4.60519 7.68244C7.23644 4.10319 11.4937 1.875 16 1.875C23.7545 1.875 30.125 8.2455 30.125 16C30.125 16.5182 30.5443 16.9375 31.0625 16.9375C31.5807 16.9375 32 16.5182 32 16C32 7.21187 24.7881 0 16 0Z"
                                        fill="url(#paint1_linear_1_435)" />
                                    <path
                                        d="M29.1298 22.3318L25.3798 22.5643C24.8626 22.5964 24.4697 23.0413 24.5018 23.5577C24.5339 24.0741 24.9953 24.4678 25.4952 24.4357L27.3948 24.3176C24.7636 27.8968 20.5063 30.125 16 30.125C8.2455 30.125 1.875 23.7545 1.875 16C1.875 15.4818 1.45569 15.0625 0.9375 15.0625C0.419312 15.0625 0 15.4818 0 16C0 24.7881 7.21187 32 16 32C20.7581 32 25.2524 29.7871 28.25 26.2169V27.25C28.25 27.7682 28.6693 28.1875 29.1875 28.1875C29.7057 28.1875 30.125 27.7682 30.125 27.25V23.2674C30.125 22.7524 29.6312 22.3035 29.1298 22.3318Z"
                                        fill="url(#paint2_linear_1_435)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_1_435" x1="9.43149" y1="15.9987" x2="22.5684"
                                        y2="15.9532" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_1_435" x1="1.86149" y1="8.46779" x2="32.0107"
                                        y2="8.17571" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_1_435" x1="-0.0135079" y1="23.5303" x2="30.1357"
                                        y2="23.2382" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                    <clipPath id="clip0_1_435">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <h3>@lang('home.advantages.1_title')</h3>
                        <p>@lang('home.advantages.1_text')</p>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                fill="none">
                                <path
                                    d="M31.9448 0.449455C31.8328 0.177477 31.5666 0 31.2728 0C3.04732 0 0 11.6975 0 16.7273C0 18.5367 0.401455 20.2269 1.19421 21.7498C1.31639 21.9854 1.55782 22.1352 1.82257 22.1411C2.07273 22.1338 2.33605 22.0088 2.46839 21.7775C4.37387 18.4844 9.77019 10.3563 18.6822 6.03785C19.0474 5.8633 19.4837 6.01309 19.6568 6.37241C19.8313 6.7346 19.68 7.17096 19.3193 7.34551C18.6473 7.67135 18.0015 8.02623 17.3688 8.39421C17.1274 8.53528 16.8931 8.68514 16.6561 8.83201C16.2997 9.05312 15.9477 9.27853 15.6044 9.5113C15.2626 9.74114 14.9251 9.97678 14.5935 10.2182C14.4902 10.2938 14.3914 10.3709 14.2895 10.4481C5.41964 17.0575 0 27.6014 0 31.2728C0 31.6742 0.325841 32.0001 0.727296 32.0001C1.12875 32.0001 1.45459 31.6742 1.45459 31.2728C1.45459 30.1004 2.25314 27.7237 3.76439 24.8888C5.95787 26.6822 8.90912 27.6364 12.3637 27.6364C21.7033 27.6364 23.6597 18.7491 24.7099 13.9739C26.1237 7.54766 29.235 3.7935 31.7862 1.24077C31.9957 1.03275 32.0568 0.721432 31.9448 0.449455Z"
                                    fill="url(#paint0_linear_1_633)" />
                                <defs>
                                    <linearGradient id="paint0_linear_1_633" x1="-0.0143486" y1="15.9982" x2="32.0134"
                                        y2="15.8238" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <h3>@lang('home.advantages.2_title')</h3>
                        <p>@lang('home.advantages.2_text')</p>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                fill="none">
                                <g clip-path="url(#clip0_1_621)">
                                    <path
                                        d="M7.72394 17.6392L7.724 17.6395C7.74381 17.6195 7.7425 17.6207 7.72394 17.6392Z"
                                        fill="url(#paint0_linear_1_621)" />
                                    <path
                                        d="M31.2907 13.2162L29.6994 12.8336C29.3534 11.3231 28.7575 9.88777 27.9245 8.55314L28.7309 7.19927C28.9507 6.83039 28.8911 6.35983 28.5881 6.05683L25.9453 3.41402C25.6423 3.11195 25.1727 3.05152 24.8028 3.2712L23.449 4.07764C22.1143 3.24464 20.679 2.6487 19.1685 2.3027L18.7859 0.711453C18.6815 0.294953 18.3072 0.00195312 17.8769 0.00195312H14.1274C13.6972 0.00195312 13.3228 0.294891 13.2184 0.711453L12.8358 2.3027C11.3253 2.6487 9.88997 3.24464 8.55534 4.07764L7.20147 3.2712C6.83259 3.05145 6.36203 3.11102 6.05903 3.41402L3.41609 6.05677C3.11309 6.35977 3.05359 6.83027 3.27328 7.1992L4.07972 8.55308C3.24672 9.8877 2.65078 11.3231 2.30478 12.8335L0.713528 13.2161C0.297028 13.3205 0.00402832 13.6949 0.00402832 14.1251V17.8746C0.00402832 18.3049 0.296966 18.6802 0.714403 18.7836L2.30565 19.1663C2.53634 20.1671 2.88353 21.1287 3.3294 22.051C4.01784 21.3597 7.47547 17.8873 7.72397 17.6391C7.71172 17.576 7.57778 16.3753 7.57422 16.1414C7.49447 11.3647 11.3419 7.56433 16.0057 7.56433C20.7015 7.56433 24.4459 11.3507 24.4282 16.0291C24.4081 20.3558 21.1788 24.0392 16.6685 24.3761C16.4734 24.3911 15.5913 24.5212 14.3617 24.2788L9.96228 28.6783C10.881 29.1215 11.839 29.4664 12.8357 29.6962L13.2183 31.2884C13.3227 31.7049 13.6971 31.9979 14.1273 31.9979H17.8768C18.3071 31.9979 18.6815 31.705 18.7858 31.2884L19.1685 29.6971C20.6789 29.3511 22.1143 28.7552 23.4489 27.9222L24.8028 28.7286C25.1698 28.9484 25.6413 28.888 25.9452 28.5858L28.588 25.943C28.891 25.64 28.9505 25.1695 28.7308 24.8006L27.9244 23.4467C28.7583 22.1121 29.3533 20.6767 29.6993 19.1653L31.2897 18.7836C31.7071 18.6802 32 18.3049 32 17.8746V14.1251C32 13.695 31.7072 13.3205 31.2907 13.2162Z"
                                        fill="url(#paint1_linear_1_621)" />
                                    <path
                                        d="M22.3449 14.2863C22.2625 13.9635 22.0134 13.7096 21.692 13.6216C21.3709 13.5335 21.0277 13.6253 20.7921 13.8608L18.653 16C17.9219 16.7312 16.7332 16.7312 16.002 16C15.2715 15.2695 15.2715 14.0795 16.002 13.349L18.142 11.209C18.3775 10.9735 18.4684 10.6297 18.3804 10.3086C18.2922 9.98759 18.0387 9.73802 17.716 9.65602C13.7606 8.65084 10.2011 11.2273 9.5483 14.7852C9.33867 15.957 9.43204 17.1241 9.81555 18.1988C9.28217 18.7322 1.0438 26.9705 0.822358 27.192C-0.27708 28.2915 -0.27708 30.0801 0.839733 31.197C1.94611 32.2457 3.64055 32.2898 4.80986 31.1796L13.8031 22.1863C15.2433 22.7003 16.8495 22.6899 18.4213 22.1353C21.2535 21.1359 23.2357 17.782 22.3449 14.2863Z"
                                        fill="url(#paint2_linear_1_621)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_1_621" x1="7.72393" y1="17.6322" x2="7.73837"
                                        y2="17.6321" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_1_621" x1="-0.0103185" y1="15.9981" x2="32.0134"
                                        y2="15.8237" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_1_621" x1="-0.0101769" y1="20.716" x2="22.5697"
                                        y2="20.593" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                    <clipPath id="clip0_1_621">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <h3>@lang('home.advantages.3_title')</h3>
                        <p>@lang('home.advantages.3_text')</p>
                    </div>
                </div>
                <div class="advantages__items _animate">
                    <div class="advantages__item">
                        <div class="advantages__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="32" viewBox="0 0 28 32"
                                fill="none">
                                <path
                                    d="M26.638 7.34397L14.5454 0.149906C14.2093 -0.0499687 13.7908 -0.0499687 13.4547 0.149906L1.36201 7.34397C1.03882 7.53628 0.840698 7.88466 0.840698 8.26072V12.3674C0.840698 21.017 5.8382 28.9172 13.6149 31.928C13.8624 32.0239 14.1373 32.024 14.3851 31.928C22.1429 28.9247 27.1593 21.0417 27.1593 12.3674V8.26072C27.1593 7.88459 26.9613 7.53628 26.638 7.34397ZM19.2698 13.6031L12.5845 20.2885C12.1679 20.705 11.4926 20.705 11.076 20.2885L8.72976 17.9423C8.3132 17.5258 8.3132 16.8503 8.72976 16.4338C9.14632 16.0173 9.82176 16.0173 10.2383 16.4338L11.8302 18.0257L17.7613 12.0946C18.1778 11.6781 18.8533 11.6781 19.2698 12.0946C19.6864 12.5112 19.6864 13.1866 19.2698 13.6031Z"
                                    fill="url(#paint0_linear_1_620)" />
                                <defs>
                                    <linearGradient id="paint0_linear_1_620" x1="0.828897" y1="15.9982" x2="27.1705"
                                        y2="15.8802" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <h3>@lang('home.advantages.4_title')</h3>
                        <p>@lang('home.advantages.4_text')</p>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                fill="none">
                                <path d="M4.5 14L1 16.0005L4.5 18.0005V14Z" fill="url(#paint0_linear_1_607)" />
                                <path d="M5 19.5005L3.5 22.0005L6.5 21.5005L5 19.5005Z"
                                    fill="url(#paint1_linear_1_607)" />
                                <path d="M6.5 26.5005L10 25.0005L7.5 23.0005L6.5 26.5005Z"
                                    fill="url(#paint2_linear_1_607)" />
                                <path d="M11.9995 28.5L14 26.0005L11.5 25.5005L11.9995 28.5Z"
                                    fill="url(#paint3_linear_1_607)" />
                                <path d="M6.5 10.5005L3.5 10.0005L5 12.5005L6.5 10.5005Z"
                                    fill="url(#paint4_linear_1_607)" />
                                <path d="M10 7.00049L6.5 5.50049L7.5 9.00049L10 7.00049Z"
                                    fill="url(#paint5_linear_1_607)" />
                                <path d="M11.9995 3.50098L11.5 6.50048L14 6.00048L11.9995 3.50098Z"
                                    fill="url(#paint6_linear_1_607)" />
                                <path
                                    d="M14.5 8C12.3783 8 10.3434 8.84285 8.84315 10.3431C7.34285 11.8434 6.5 13.8783 6.5 16C6.5 18.1217 7.34285 20.1566 8.84315 21.6569C10.3434 23.1571 12.3783 24 14.5 24V31.5H15.5V0.5H14.5V8Z"
                                    fill="url(#paint7_linear_1_607)" />
                                <path
                                    d="M31.5 15.5H28.85L31.324 13.38L30.674 12.62L27.3145 15.5H25.707L30.3535 10.8535L29.6465 10.1465L24.293 15.5H19.955C19.8805 15.0544 19.7056 14.6315 19.4435 14.2635L22.207 11.5H28V10.5H23.207L25.207 8.5H29V7.5H26.207L28.3535 5.3535L27.6465 4.6465L25.5 6.793V4H24.5V7.793L22.5 9.793V5H21.5V10.793L18.7365 13.5565C18.3685 13.2944 17.9456 13.1195 17.5 13.045V7.707L22.8535 2.3535L22.1465 1.6465L17.5 6.293V4.685L20.3795 1.325L19.6205 0.675L17.5 3.15V0.5H16.5V31.5H17.5V28.85L19.6205 31.3235L20.3795 30.6735L17.5 27.315V25.707L22.1465 30.3535L22.8535 29.6465L17.5 24.293V18.955C17.9456 18.8805 18.3685 18.7056 18.7365 18.4435L21.5 21.207V27H22.5V22.207L24.5 24.207V28H25.5V25.207L27.6465 27.3535L28.3535 26.6465L26.207 24.5H29V23.5H25.207L23.207 21.5H28V20.5H22.207L19.4435 17.7365C19.7056 17.3685 19.8805 16.9456 19.955 16.5H24.293L29.6465 21.8535L30.3535 21.1465L25.707 16.5H27.2925L30.6465 19.8535L31.3535 19.1465L28.707 16.5H31.5V15.5Z"
                                    fill="url(#paint8_linear_1_607)" />
                                <defs>
                                    <linearGradient id="paint0_linear_1_607" x1="0.998431" y1="16" x2="4.50149"
                                        y2="15.9833" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_1_607" x1="3.49865" y1="20.7503" x2="6.50122"
                                        y2="20.7307" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_1_607" x1="6.49843" y1="24.7503" x2="10.0015"
                                        y2="24.7312" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_1_607" x1="11.4989" y1="27.0001" x2="14.0011"
                                        y2="26.9887" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                    <linearGradient id="paint4_linear_1_607" x1="3.49865" y1="11.2503" x2="6.50122"
                                        y2="11.2307" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                    <linearGradient id="paint5_linear_1_607" x1="6.49843" y1="7.25029" x2="10.0015"
                                        y2="7.23121" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                    <linearGradient id="paint6_linear_1_607" x1="11.4989" y1="5.00056" x2="14.0011"
                                        y2="4.9892" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                    <linearGradient id="paint7_linear_1_607" x1="6.49596" y1="15.9982" x2="15.504"
                                        y2="15.984" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                    <linearGradient id="paint8_linear_1_607" x1="16.4933" y1="15.9982" x2="31.5066"
                                        y2="15.9587" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <h3>@lang('home.advantages.5_title')</h3>
                        <p>@lang('home.advantages.5_text')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about-us" class="about-us">
    <div id="about-us-ancor" class="about-us__ancor"></div>
    <div class="about-us__container">
        <h2>@lang('home.about-us.title')</h2>
        <div class="about-us__content">
            <div class="about-us__text">@lang('home.about-us.content.1')</div>
            <div class="about-us__text">@lang('home.about-us.content.2')</div>
        </div>
        <div class="swiper about-us__slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <h3>@lang('home.about-us.slider.1')</h3>
                    <div class="about-us__slider-img">
                        @if(App::isLocale('ua'))
                        <img src="{{ asset('img/home/ua/Встановлення-теплового-насосу-в-кафе.webp') }}"
                            alt="Встановлення теплового насосу в кафе">
                        @elseif(App::isLocale('ru'))
                        <img src="{{ asset('img/home/ru/Установка-теплового-насоса-в-кафе.webp') }}"
                            alt="Установка теплового насоса в кафе">
                        @endif
                    </div>
                </div>
                <div class="swiper-slide">
                    <h3>@lang('home.about-us.slider.2')</h3>
                    <div class="about-us__slider-img">
                        @if(App::isLocale('ua'))
                        <img src="{{ asset('img/home/ua/Встановлення-теплового-насосу-в-котеджі-київська-область.webp') }}"
                            alt="Встановлення теплового насосу в котеджі київська область">
                        @elseif(App::isLocale('ru'))
                        <img src="{{ asset('img/home/ru/Установка-теплового-насоса-в-коттедже-киевская-область.webp') }}"
                            alt="Установка теплового насоса в коттедже киевская область">
                        @endif
                    </div>
                </div>
                <div class="swiper-slide">
                    <h3>@lang('home.about-us.slider.3')</h3>
                    <div class="about-us__slider-img">
                        @if(App::isLocale('ua'))
                        <img src="{{ asset('img/home/ua/Еліватор-тепловий-насос-контури.webp') }}"
                            alt="Еліватор тепловий насос контури">
                        @elseif(App::isLocale('ru'))
                        <img src="{{ asset('img/home/ru/Элеватор-тепловой-насос-контура.webp') }}"
                            alt="Элеватор тепловой насос контура">
                        @endif
                    </div>
                </div>
                <div class="swiper-slide">
                    <h3>@lang('home.about-us.slider.3')</h3>
                    <div class="about-us__slider-img">
                        @if(App::isLocale('ua'))
                        <img src="{{ asset('img/home/ua/Еліватор-контури-теплового-насосу.webp') }}"
                            alt="Еліватор контури теплового насосу">
                        @elseif(App::isLocale('ru'))
                        <img src="{{ asset('img/home/ru/Элеватор-контура-теплового-насоса.webp') }}"
                            alt="Элеватор контура теплового насоса">
                        @endif
                    </div>
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"><span></span></div>
            <div class="swiper-button-next"><span></span></div>
        </div>
    </div>
</section>
<section class="efficiency">
    <div class="efficiency__container1920 _animate">
        <div class="efficiency__body">
            <div class="efficiency__content">
                <h2>@lang('home.efficiency.title')</h2>
                <p>@lang('home.efficiency.text')</p>
            </div>
            <div class="efficiency__img">
                @if(App::isLocale('ua'))
                <img src="{{ asset('img/home/ua/Теплові-насоси.webp') }}" alt="Теплові насоси">
                <img class="efficiency__img-logo" src="{{ asset('img/home/ua/liveheat.svg') }}" alt="Теплові насоси">
                @elseif(App::isLocale('ru'))
                <img src="{{ asset('img/home/ru/Тепловые-насосы.webp') }}" alt="Тепловые насосы">
                <img class="efficiency__img-logo" src="{{ asset('img/home/ru/liveheat.svg') }}" alt="Тепловые насосы">
                @endif
            </div>
            <div class="efficiency__picture-mobile _animate">
                @if(App::isLocale('ua'))
                <img src="{{ asset('img/home/ua/Тепловий-насос-для-дому.webp') }}" alt="Тепловий насос для дому">
                @elseif(App::isLocale('ru'))
                <img src="{{ asset('img/home/ua/Тепловой-насос-для-дома.webp') }}" alt="Тепловой-насос-для-дома">
                @endif
            </div>
        </div>
        <div class="efficiency__picture _animate">
            @if(App::isLocale('ua'))
            <img src="{{ asset('img/home/ua/Тепловий-насос-для-дому.webp') }}" alt="Тепловий насос для дому">
            @elseif(App::isLocale('ru'))
            <img src="{{ asset('img/home/ru/Тепловой-насос-для-дома.webp') }}" alt="Тепловой насос для дома">
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
                        <img src="{{ asset('img/home/ua/теплові-насоси-Liveheat.webp') }}"
                            alt="теплові насоси Liveheat">
                        @elseif(App::isLocale('ru'))
                        <img src="{{ asset('img/home/ru/тепловые-насосы-Liveheat.webp') }}"
                            alt="тепловые насосы Liveheat">
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
                        <img src="{{ asset('img/home/ua/теплові-насоси-Liveheat.webp') }}"
                            alt="теплові насоси Liveheat">
                        @elseif(App::isLocale('ru'))
                        <img src="{{ asset('img/home/ru/тепловые-насосы-Liveheat.webp') }}"
                            alt="тепловые насосы Liveheat">
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
<section id="catalog" class="catalog">
    <div id="catalog-ancor" class="catalog__ancor"></div>
    <div class="catalog__container">
        <h2>@lang('home.catalog.title')</h2>
        <div class="catalog__body">
            <div class="catalog__item">
                <a href="{{ route('liveheat-catalog', ['locale' => __('lang.current')]) }}" class="catalog__img">
                    @if(App::isLocale('ua'))
                    <img src="{{ asset('img/home/ua/Liveheat-тепловий-насос.webp') }}" alt="Liveheat тепловий насос">
                    @elseif(App::isLocale('ru'))
                    <img src="{{ asset('img/home/ru/Liveheat-тепловой-насос.webp') }}" alt="Liveheat тепловой насос">
                    @endif
                </a>
                <a href="{{ route('liveheat-catalog', ['locale' => __('lang.current')]) }}"
                    class="catalog__link">@lang('home.catalog.link.1')</a>
            </div>
            <div class="catalog__item">
                <button data-product="@lang('catalog.vde')" data-popup-id="main" class="catalog__img link-on-popup vde">
                    @if(App::isLocale('ua'))
                    <img src="{{ asset('img/home/ua/теплові-насоси-VDE.webp') }}" alt="теплові насоси VDE">
                    @elseif(App::isLocale('ru'))
                    <img src="{{ asset('img/home/ru/Тепловые-насосы-VDE.webp') }}" alt="Тепловые насосы VDE">
                    @endif
                </button>
                <button data-product="@lang('catalog.vde')" data-popup-id="main"
                    class="catalog__link link-on-popup">@lang('home.catalog.link.2')</button>
            </div>
            <div class="catalog__item">
                <a href="{{ route('nibe-catalog', ['locale' => __('lang.current')]) }}" class="catalog__img">
                    @if(App::isLocale('ua'))
                    <img src="{{ asset('img/home/ua/теплові-насоси-Nibe.webp') }}" alt="теплові насоси Nibe">
                    @elseif(App::isLocale('ru'))
                    <img src="{{ asset('img/home/ru/Тепловые-насосы-NIBE.webp') }}" alt="Тепловые насосы NIBE">
                    @endif
                </a>
                <a href="{{ route('nibe-catalog', ['locale' => __('lang.current')]) }}"
                    class="catalog__link">@lang('home.catalog.link.3')</a>
            </div>
        </div>
    </div>
</section>



{{-- <a href="{{ route('form', ['locale' => __('lang.current')]) }}">LINK TO FORM</a> --}}


@endsection