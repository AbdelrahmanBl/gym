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
            <h2>{{__('messages.pages.checkout.header-title')}}</h2>
            <hr class="center">
            <p>{{__('messages.pages.checkout.header-desc')}}</p>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <div>
                <button type="button" onclick="prevStep()" class="btn btn-success btn-small"><</button>
            </div>
            <div class="step-bar" id="custom-steps" data-count="{{count(__('questions'))}}">
                <div class="step" id="step"></div>
            </div>
            <div>
                <small id="step-counter" class="small-numbers"></small>
            </div>
        </div>

        @foreach(__('questions') as $question)
            @include("questions.{$question['type']}",['question' => $question])
        @endforeach
        
        <div class="d-flex justify-content-center mt-5" >
            <button class="btn" style="font-size: 16px !important;" onclick="nextStep()" type="button">{{__('messages.continue')}}</button>
        </div>
    </div>
</section>
@endsection