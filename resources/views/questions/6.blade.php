{{-- Height & Weight Question --}}
<h2 class="text-center mt-2">{{$question['question']}}</h2>
<div class="col-12 col-lg-6 m-auto" style="cursor: pointer;">
    <div>
        <label for="">{{__('messages.height')}}</label>
        <input class="form-field" id="height-{{$pos}}" type="number" pattern="[0-9]*" style="width: 100%;">
    </div>
    <div>
        <label for="">{{__('messages.weight')}}</label>
        <input class="form-field" id="weight-{{$pos}}" type="number" pattern="[0-9]*" style="width: 100%;">
    </div>
</div>
@if(isset($question['btn']))
    @include('content.btn',['type' => 'heightWeight'])
@endif

