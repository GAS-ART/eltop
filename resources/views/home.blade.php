@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))

@section('page', 'home')


@section('content')
<div class="test__container">@lang('home.test')<br><br> <a
            href="{{ route('home', ['locale' => __('lang.ua')]) }}">UA</a> <br><br> <a
            href="{{ route('home', ['locale' => __('lang.ru')]) }}">RU</a>
      <br><br>
      <div class="_icon-mail test"></div>
      <!-- <img src="{{asset('/img/icons/instagram.svg')}}" alt=""> -->
</div>

@endsection