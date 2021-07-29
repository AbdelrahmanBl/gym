{{-- Question With Large Image [ Responds Depends On Another Q ] --}}
<h2 class="text-center mt-2">{{$question['question']}}</h2>
<div class="d-flex justify-content-between align-items-center flex-wrap">
    @php $counter = 1; @endphp
    @foreach($question['responds'] as $respond)
    <div onclick="addRespond(this,{{$pos}})" id="div-{{$pos}}-{{$counter}}" data-respond="{{$counter}}" class="transition-smooth d-flex justify-content-between align-items-center col-12 col-md-5 col-lg-3 mt-2 responsive-div show-all" style="cursor: pointer;">
        <p class="float-left">{{$respond['text']}}</p>
        <div><img src="{{asset('public/assets/img/questions')}}/{{$respond['img']}}"></div>
    </div>
    @php $counter++; @endphp
    @endforeach
</div>
