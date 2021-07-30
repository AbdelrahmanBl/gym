{{-- Input Question --}}
<h2 class="text-center mt-2">{{$question['question']}}</h2>
<div class="col-12 col-lg-6 m-auto" style="cursor: pointer;">
    @if(isset($question['label']))
    <label for="">{{$question['label']}}</label>
    @endif
    <input class="form-field" id="input-{{$pos}}" type="{{$question['input']}}" @if($question['input'] == 'number') pattern="[0-9]*" @endif style="width: 100%;">
</div>
@if(isset($question['btn']))
    @include('content.btn',['type' => 'input'])
@endif

