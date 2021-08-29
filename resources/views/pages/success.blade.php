@extends('layouts.app',['mode' => 2])
@section('title',__('messages.pages.checkout.title'))
@section('meta-description',__('messages.pages.checkout.description'))
@section('meta-keywords',__('messages.pages.checkout.keywords'))

@section('custom-css')
<link rel="stylesheet" href="{{asset('public/assets/css/steps/style.css')}}">
@endsection

@section('body')
<section>
    <div class="container">
        <div class="section-title">
            <h2>{{__('messages.pages.success.header-title')}}</h2>
            <hr class="center">
            <p>{{__('messages.pages.success.header-desc')}}</p>
        </div>
    </div>
</section>
@endsection