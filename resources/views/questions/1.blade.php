{{-- Question With Large Image [ Main Question ] --}}
<div>
    <h2 class="text-center">{{$question['question']}}</h2>
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        @foreach($question['responds'] as $respond)
        <div class="d-flex justify-content-between col-12 col-md-5 col-lg-3 mt-2" style="cursor: pointer;">
            <p class="float-left">{{$respond['text']}}</p>
            <div><img src="{{asset('public/assets/img/questions')}}/{{$respond['img']}}" alt=""></div>
        </div>
        @endforeach
    </div>
</div>