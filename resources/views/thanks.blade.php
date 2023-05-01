@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle' ,__('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))
@section('page', 'home')

@section('content')
<section class="thanks">
  @if(request('product') == "Запит на консультацію" || request('product') == "Запрос на консультацию")
  <h1 class="thanks__title">{{ request('product') }}!</h1>
  @else
  <h1 class="thanks__title">@lang('thanks.title') "{{ request('product') }}"!</h1>
  @endif
  <h3 class="thanks__text">@lang('thanks.text')</h3>
  <a class="thanks__link" href="{{ route('home', ['locale' => __('lang.current')]) }}">@lang('thanks.link')</a>
</section>


@endsection