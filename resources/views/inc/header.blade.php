@section('header')
<header class="header">
    <div class="header__top">
        <div class="burger-bg"></div>
        <div class="header__container">
            <div class="header__body">
                <div class="header__logo">
                    <a href="{{ route('home', ['locale' => __('lang.current')]) }}">
                        <picture>
                            <source type="" media="(min-width: 992px)" srcset="{{asset('/img/eltop-logo.webp')}}">
                            <source type="image/svg+xml" srcset="{{asset('/img/logo.svg')}}">
                            <img src="{{asset('/img/logo.svg')}}" alt="">
                        </picture>
                    </a>
                </div>
                <div class="header__contacts">
                    <div class="header__contacts-body">
                        <a href="tel:%2B0675201020" class="header__contacts-icon contacts-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                fill="none">
                                <path
                                    d="M15.0175 11.3C14.9765 11.2675 12 9.122 11.183 9.276C10.793 9.345 10.57 9.611 10.1225 10.1435C10.0505 10.2295 9.8775 10.4355 9.743 10.582C9.4602 10.4898 9.18433 10.3775 8.9175 10.246C7.54026 9.5755 6.4275 8.46274 5.757 7.0855C5.62543 6.81871 5.51315 6.54284 5.421 6.26C5.568 6.125 5.774 5.952 5.862 5.878C6.392 5.433 6.6585 5.21 6.7275 4.819C6.869 4.009 4.725 1.012 4.7025 0.985C4.60522 0.846035 4.47827 0.730431 4.33084 0.646552C4.1834 0.562672 4.01916 0.512614 3.85 0.5C2.981 0.5 0.5 3.7185 0.5 4.2605C0.5 4.292 0.5455 7.494 4.494 11.5105C8.5065 15.4545 11.708 15.5 11.7395 15.5C12.282 15.5 15.5 13.019 15.5 12.15C15.4875 11.9814 15.4378 11.8177 15.3543 11.6707C15.2709 11.5238 15.1558 11.3971 15.0175 11.3Z"
                                    fill="url(#paint0_linear_1_297)" />
                                <defs>
                                    <linearGradient id="paint0_linear_1_297" x1="0.493274" y1="7.99915" x2="15.5063"
                                        y2="7.91737" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                        <div class="header__contacts-content">
                            <div class="header__contacts-text">@lang('main.contacts.phone_text')</div>
                            <a class="header__contacts-contact"
                                href="tel:%2B0675201020">@lang('main.contacts.phone')</a>
                        </div>
                    </div>
                    <div class="header__contacts-body">
                        <a href="mailto:info@eltop.com" class="header__contacts-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                fill="none">
                                <path
                                    d="M10.3674 8.66409L9.02736 10.0087C8.48395 10.554 7.52783 10.5657 6.97267 10.0087L5.63258 8.66409L0.81958 13.4927C0.998736 13.5756 1.19627 13.625 1.40627 13.625H14.5938C14.8038 13.625 15.0012 13.5756 15.1803 13.4927L10.3674 8.66409Z"
                                    fill="url(#paint0_linear_1_334)" />
                                <path
                                    d="M14.5937 2.375H1.40621C1.19621 2.375 0.998674 2.42444 0.81958 2.50728L5.96261 7.66738C5.96295 7.66772 5.96336 7.66778 5.96371 7.66813C5.96405 7.66847 5.96411 7.66894 5.96411 7.66894L7.63639 9.34675C7.81402 9.52438 8.18595 9.52438 8.36358 9.34675L10.0355 7.66922C10.0355 7.66922 10.0359 7.66847 10.0363 7.66813C10.0363 7.66813 10.037 7.66772 10.0374 7.66738L15.1803 2.50725C15.0012 2.42438 14.8037 2.375 14.5937 2.375Z"
                                    fill="url(#paint1_linear_1_334)" />
                                <path
                                    d="M0.149562 3.16288C0.056875 3.35031 0 3.55838 0 3.78125V12.2188C0 12.4416 0.0568125 12.6497 0.149531 12.8371L4.97087 8.00016L0.149562 3.16288Z"
                                    fill="url(#paint2_linear_1_334)" />
                                <path
                                    d="M15.8505 3.16281L11.0292 8.00016L15.8505 12.8372C15.9431 12.6497 16 12.4417 16 12.2187V3.78125C16 3.55831 15.9431 3.35025 15.8505 3.16281Z"
                                    fill="url(#paint3_linear_1_334)" />
                                <defs>
                                    <linearGradient id="paint0_linear_1_334" x1="0.813141" y1="11.1443" x2="15.1832"
                                        y2="10.9177" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_1_334" x1="0.813141" y1="5.92708" x2="15.185"
                                        y2="5.76886" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_1_334" x1="-0.00222891" y1="7.99945" x2="4.97306"
                                        y2="7.98553" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_1_334" x1="11.0269" y1="7.99945" x2="16.0022"
                                        y2="7.98552" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                        <div class="header__contacts-content">
                            <div class="header__contacts-text">@lang('main.contacts.email_text')</div>
                            <a class="header__contacts-contact"
                                href="mailto:info@eltop.com">@lang('main.contacts.email')</a>
                        </div>
                    </div>
                    <div class="header__contacts-body">
                        <a href="#map" class="header__contacts-icon ancor">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 12 16"
                                fill="none">
                                <path
                                    d="M6 0.5C4.54131 0.5 3.14236 1.07946 2.11091 2.11091C1.07946 3.14236 0.5 4.54131 0.5 6C0.5 8.905 5.4 15.05 5.61 15.315C5.65685 15.3734 5.71622 15.4205 5.78372 15.4529C5.85122 15.4853 5.92513 15.5021 6 15.5021C6.07487 15.5021 6.14878 15.4853 6.21628 15.4529C6.28378 15.4205 6.34315 15.3734 6.39 15.315C6.6 15.05 11.5 8.905 11.5 6C11.5 4.54131 10.9205 3.14236 9.88909 2.11091C8.85764 1.07946 7.45869 0.5 6 0.5ZM6 7.5C5.60444 7.5 5.21776 7.3827 4.88886 7.16294C4.55996 6.94318 4.30362 6.63082 4.15224 6.26537C4.00087 5.89991 3.96126 5.49778 4.03843 5.10982C4.1156 4.72186 4.30608 4.36549 4.58579 4.08579C4.86549 3.80608 5.22186 3.6156 5.60982 3.53843C5.99778 3.46126 6.39991 3.50087 6.76537 3.65224C7.13082 3.80362 7.44318 4.05996 7.66294 4.38886C7.8827 4.71776 8 5.10444 8 5.5C8 6.03043 7.78929 6.53914 7.41421 6.91421C7.03914 7.28929 6.53043 7.5 6 7.5Z"
                                    fill="url(#paint0_linear_1_333)" />
                                <defs>
                                    <linearGradient id="paint0_linear_1_333" x1="0.495068" y1="8.0002" x2="11.5048"
                                        y2="7.95623" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#036A35" />
                                        <stop offset="1" stop-color="#94CC23" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                        <div class="header__contacts-content">
                            <div class="header__contacts-text">@lang('main.contacts.address_text')</div>

                            <a href="#map" class="header__contacts-contact ancor">@lang('main.contacts.address')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header__bottom">
        <div class="header__container">
            <div class="header__body">
                <nav class="header__menu">
                    <ul class="header__menu-list">
                        <li class="header__menu-list-item"><a href="#"
                                class="header__menu-list-link">@lang('header.about')</a></li>
                        <li class="header__menu-list-item">
                            @if(Route::is('home') || Route::is('index.lang'))
                            <a href="#advantages" class="header__menu-list-link ancor">@lang('header.advantages')</a>
                            @else
                            <a class="header__menu-list-link"
                                href="{{ route('home', ['locale' => __('lang.current')]) }}#advantages-ancor">@lang('header.advantages')</a>
                            @endif
                        </li>
                        <li class="header__menu-list-item"><a href="#"
                                class="header__menu-list-link">@lang('header.catalog')</a></li>
                        <li class="header__menu-list-item"><a href="#contacts"
                                class="header__menu-list-link ancor">@lang('header.contants')</a></li>
                    </ul>
                </nav>
                <div class="header__options">
                    <div class="header__actions">
                        <!--Для выпадающего списка языков-->
                        <div class="header__language language-btn">
                            <div class="language-btn__select">
                                <div class="language-btn__link @lang('lang.current')">
                                    <a href="{{ route('locale', __('lang.current')) }}"
                                        class="language-btn__text">@lang('lang.current')</a>
                                </div>
                            </div>
                            <div class="language-btn__select">
                                <a class="language-btn__link" href="{{ route('locale', __('lang.another')) }}">
                                    <div class="language-btn__text">@lang('lang.another')</div>
                                </a>
                            </div>
                        </div>
                        <!--Для выпадающего списка языков-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="icon-menu">
        <span></span>
    </div>
    <div class="burger">
        <div class="header__contacts">
            <div class="header__contacts-body">
                <a href="tel:%2B0675201020" class="header__contacts-icon contacts-icon">
                    <img src="{{asset('img/icons/phone.svg')}}" alt="">
                </a>
                <div class="header__contacts-content">
                    <div class="header__contacts-text">@lang('main.contacts.phone_text')</div>
                    <a class="header__contacts-contact" href="tel:%2B0675201020">@lang('main.contacts.phone')</a>
                </div>
            </div>
            <div class="header__contacts-body">
                <a href="mailto:info@eltop.com" class="header__contacts-icon">
                    <img src="{{asset('img/icons/email.svg')}}" alt="">
                </a>
                <div class="header__contacts-content">
                    <div class="header__contacts-text">@lang('main.contacts.email_text')</div>
                    <a class="header__contacts-contact" href="mailto:info@eltop.com">@lang('main.contacts.email')</a>
                </div>
            </div>
            <div class="header__contacts-body">
                <a href="#map" class="header__contacts-icon ancor">
                    <img src="{{asset('img/icons/point.svg')}}" alt="">
                </a>
                <div class="header__contacts-content">
                    <div class="header__contacts-text">@lang('main.contacts.address_text')</div>
                    <a href="#map" class="header__contacts-contact ancor">@lang('main.contacts.address')</a>
                </div>
            </div>
        </div>
        <nav class="header__menu">
            <ul class="header__menu-list">
                <li class="header__menu-list-item"><a href="#" class="header__menu-list-link">@lang('header.about')</a>
                </li>
                <li class="header__menu-list-item">
                    @if(Route::is('home') || Route::is('index.lang'))
                    <a href="#advantages" class="header__menu-list-link ancor">@lang('header.advantages')</a>
                    @else
                    <a class="header__menu-list-link"
                        href="{{ route('home', ['locale' => __('lang.current')]) }}#advantages-ancor">@lang('header.advantages')</a>
                    @endif
                </li>
                <li class="header__menu-list-item"><a href="#"
                        class="header__menu-list-link">@lang('header.catalog')</a></li>
                <li class="header__menu-list-item"><a href="#contacts"
                        class="header__menu-list-link ancor">@lang('header.contants')</a></li>
            </ul>
        </nav>
        <div class="header__options">
            <div class="header__actions">
                <!--Для выпадающего списка языков-->
                <div class="header__language language-btn">
                    <div class="language-btn__select">
                        <div class="language-btn__link @lang('lang.current')">
                            <a href="{{ route('locale', __('lang.current')) }}"
                                class="language-btn__text">@lang('lang.current')</a>
                        </div>
                    </div>
                    <div class="language-btn__select">
                        <a class="language-btn__link" href="{{ route('locale', __('lang.another')) }}">
                            <div class="language-btn__text">@lang('lang.another')</div>
                        </a>
                    </div>
                </div>
                <!--Для выпадающего списка языков-->
            </div>
        </div>
    </div>
</header>