@extends('layout') 
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description')) 
@section('ogTitle' ,__('titles.home.ogTitle')) 
@section('ogDescription', __('titles.home.ogDescription')) 
@section('ogUrl', __('titles.home.ogUrl'))
@section('page', 'home') 

@section('content')

THIS IS FORM PAGE
<a href="{{ route('home', ['locale' => __('lang.current')]) }}">LINK TO HOME</a>
@endsection