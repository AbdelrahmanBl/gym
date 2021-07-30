{{-- Question With Multiple Choice --}}
<h2 class="text-center mt-2">{{$question['question']}}</h2>
<div class="">
    @php $counter = 1; @endphp
    @foreach($question['responds'] as $respond)
    <div class="d-flex align-items-center justify-content-between col-12 col-lg-3 m-auto" style="cursor: pointer;">
        <div class="d-flex align-items-center">
            <input onclick="$('#none-{{$pos}}').prop('checked',false)" id="input-{{$pos}}-{{$counter}}" value="{{$counter}}" class="form-field choose-box box-{{$pos}}" type="checkbox" />
            <label for="input-{{$pos}}-{{$counter}}" class="float-left m-0">{{$respond['text']}}</label>
        </div>
        @if(isset($respond['img']))
        <div class="mt-2">
            <img src="{{asset('public/assets/img/questions')}}/{{$respond['img']}}" alt="">
        </div>
        @endif
    </div>
    @php $counter++; @endphp
    @endforeach

    @if(isset($question['none']))
    <div class="hr"></div>
    <div class="d-flex align-items-center col-12 col-lg-3 m-auto" style="cursor: pointer;">
        <input onclick="removeCheckBox(this)" data-pos="{{$pos}}" id="none-{{$pos}}" class="form-field choose-box" type="checkbox" />
        <label for="none-{{$pos}}" class="float-left m-0 none">{{$question['none']}}</label>
    </div>
    @endif
</div>
@if(isset($question['btn']))
    @include('content.btn',['type' => 'choose'])
@endif

