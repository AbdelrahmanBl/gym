{{-- Question With Multiple Choice --}}
<h2 class="text-center mt-2">{{$question['question']}}</h2>
<div class="col-12 col-lg-6 m-auto" style="cursor: pointer;">
    <div class="d-flex justify-content-center responsive-div">
        <img id="image-preview-{{$pos}}" class="m-0" src="{{asset('public/assets/img/questions')}}/0.jpg">
    </div>
    <div class="d-flex justify-content-between align-items-center mt-4">
        <p class="text-nowrap m-0">5-9%</p>
        <p id="balance-preview-{{$pos}}" class="m-0">5-9%</p>
        <p class="m-0">>40%</p>
    </div>
    <input oninput="handleBalance(this)" id="range-{{$pos}}" data-pos="{{$pos}}" type="range" step="1" value="0" max="7"  class="form-field" style="width: 100%;">
    
</div>
@if(isset($question['btn']))
    @include('content.btn',['pos' => $pos, 'type' => 'balance'])
@endif

