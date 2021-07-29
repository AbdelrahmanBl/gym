{{-- Question With Large Image [ Main Question ] --}}
<h2 class="text-center mt-2">{{$question['question']}}</h2>
<div class="d-flex justify-content-between align-items-center flex-wrap">
    @php $counter = 1; @endphp
    @foreach($question['responds'] as $respond)
    <div onclick="addRespond(this,{{$pos}})" id="div-{{$pos}}-{{$counter}}" data-respond="{{$counter}}" class="transition-smooth d-flex justify-content-between align-items-center col-12 col-md-5 col-lg-3 mt-2 responsive-div" style="cursor: pointer;">
        <div>
            <p class="float-left m-0 @if(isset($respond['desc']))c-text @endif">{{$respond['text']}}</p>
            @if(isset($respond['desc']))
            <p class="float-left m-0 c-desc">{{$respond['desc']}}</p>
            @endif
        </div>
        <div><img src="{{asset('public/assets/img/questions')}}/{{$respond['img']}}"></div>
    </div>
    @php $counter++; @endphp
    @endforeach
</div>
