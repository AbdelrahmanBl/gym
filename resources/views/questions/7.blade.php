{{-- Question With Multiple Choice --}}
<h2 class="text-center mt-2">{{$question['question']}}</h2>
<div class="">
    @php $counter = 1; @endphp
    @foreach($question['responds'] as $respond)
    <div class="d-flex align-items-center justify-content-between col-12 col-lg-3 m-auto" style="cursor: pointer;">
        <div class="d-flex align-items-center">
            <input onclick="$('#none-{{$pos}}').prop('checked',false)" id="input-{{$pos}}-{{$counter}}" value="{{$counter}}" class="form-field choose-box box-{{$pos}}" name="radio-{{$pos}}" type="radio" />
            <div>
                <label for="input-{{$pos}}-{{$counter}}" class="m-0">{{$respond['text']}}</label>
                @if(isset($respond['desc']))
                <p class="m-0">{{$respond['desc']}}</p>
                @endif
            </div>
        </div>
        @if(isset($respond['img']))
        <div class="mt-2">
            <img src="{{asset('public/assets/img/questions')}}/{{$respond['img']}}" alt="">
        </div>
        @endif
    </div>
    @php $counter++; @endphp
    @endforeach
</div>
@if(isset($question['btn']))
    @include('content.btn',['type' => 'chooseOne'])
@endif

