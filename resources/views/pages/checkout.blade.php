@extends('layouts.app',['mode' => 2])
@section('title',__('messages.pages.checkout.title'))
@section('meta-description',__('messages.pages.checkout.description'))
@section('meta-keywords',__('messages.pages.checkout.keywords'))

@section('custom-css')
<link rel="stylesheet" href="{{asset('public/assets/css/steps/style.css')}}">
@endsection

@section('body')
<section>
    @if(request()->get('gender') && in_array(request()->get('gender'),['male','female']))
    <div class="container" id="questions-container">
        <div class="section-title">
            <h2>{{__('messages.pages.checkout.header-title')}}</h2>
            <hr class="center">
            <p>{{__('messages.pages.checkout.header-desc')}}</p>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <div>
                <button type="button" onclick="prevStep()" class="btn btn-success btn-small"><</button>
            </div>
            <div class="step-bar" id="custom-steps" data-count="{{count(__("{$questionIde}"))}}">
                <div class="step" id="step"></div>
            </div>
            <div>
                <small id="step-counter" class="small-numbers"></small>
            </div>
        </div>

        <input type="hidden" value="{{$questions}}" id="questions">
        <input type="hidden" value="{{asset("public/assets/img/questions/{$questionIde}")}}" id="questions-path">
        @foreach(__("{$questionIde}") as $question)
        <div id="div-{{$loop->iteration}}" style="@if($loop->iteration > 1) display: none; @endif">
            @include("questions.{$question['type']}",['question' => $question , 'pos' => $loop->iteration])
        </div>
        @endforeach
        <div class="text-center mt-2">
            <span id="error-span" class="error"></span>
        </div>
    </div>
    @else
    <div class="container">
        <div class="section-title">
            <h2>{{__('messages.pages.checkout.header-title-m')}}</h2>
            <hr class="center">
            <p>{{__('messages.pages.checkout.header-desc-m')}}</p>
        </div>

        <div class="d-flex justify-content-around align-items-center flex-wrap">
            @include('content.gender')
        </div>
    </div>
    @endif

    <div class="container" id="checkout-container" style="display: none;">
        <div class="section-title">
            <h2>{{__('messages.pages.checkout.header-title-c')}}</h2>
            <hr class="center">
            <p>{{__('messages.pages.checkout.header-desc-c')}}</p>
        </div>
        <div class="d-flex justify-content-center">
            @include('content.paypal')
        </div>
    </div>
</section>
@endsection