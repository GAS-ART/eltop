@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle' ,__('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))
@section('page', 'home')

@section('content')

<h1>THIS IS THANKS PAGE</h1>

<h2>Спасибо за интерес к продукту "{{ request('product') }}"!</h2>

@endsection