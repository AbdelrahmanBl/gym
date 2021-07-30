{{-- Question With Multiple Choice --}}
<h2 class="text-center mt-2">{{$question['question']}}</h2>
<div class="col-12 col-lg-6 m-auto" style="cursor: pointer;">
    @if($question['allowImg'])
    <div class="d-flex justify-content-center responsive-div">
        <img id="image-preview-{{$pos}}" class="m-0" src="">
    </div>
    @endif
    <div class="d-flex justify-content-between align-items-center mt-4">
        <p class="text-nowrap m-0">{{$question['responds'][0]['text']}}</p>
        <p id="balance-preview-{{$pos}}" class="m-0">{{$question['responds'][$question['defaultIndex']]['text']}}</p>
        <p class="m-0">{{$question['responds'][count($question['responds'])-1]['text']}}</p>
    </div>
    <input oninput="handleBalance(this)" id="range-{{$pos}}" data-pos="{{$pos}}" type="range" step="1" value="{{$question['defaultIndex']}}" max="{{count($question['responds'])-1}}"  class="form-field" style="width: 100%;">
    
</div>
@if(isset($question['btn']))
    @include('content.btn',['type' => 'balance' ])
@endif

