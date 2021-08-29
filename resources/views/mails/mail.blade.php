<style>
    ul { list-style: none; }
</style>
@component('mail::message')
<div style="direction: {{App::isLocale('ar')? 'rtl' : 'ltr'}}">
    <h1 style="text-align: center;">{{$data->order_id}}</h1>
    @foreach ($data->get_responds as $key => $value)
    @php $questions = __("{$data->gender}"); @endphp
    @php $question  = $questions[$key] @endphp
        <div>
            <h2>{{$question['question']}}</h2>
        @switch($question['type'])
            @case(1)
                <p>{{$question['responds'][(int)$value-1]['text']}}</p>
                @break
            @case(2)
                <p>{{$question['responds'][(int)$value-1]['text']}}</p>
                @break
            @case(3)
                    @if ($value == NULL)
                        <p>{{$question['none']}}</p>
                    @else
                        <ul>
                        @foreach ($value as $item)
                            <li>- {{$question['responds'][(int)$item-1]['text']}}</li>    
                        @endforeach
                        </ul>
                    @endif
                @break
            @case(4)
                <p>{{$question['responds'][(int)$value]['text']}}</p>
                @break
            @case(5)
                @if ($question['input'] == 'number')
                    <ul>
                        <li>- {{__('messages.weight')}} : {{$value}}</li>  
                    </ul>
                @else
                    <p>{{$value}}</p>
                @endif
                @break
            @case(6)
                @if (count($value) > 0)
                    <ul>
                        <li>- {{__('messages.height')}} : {{$value[0]}}</li>  
                        <li>- {{__('messages.weight')}} : {{$value[1]}}</li>  
                    </ul>
                @endif
                @break
            @case(7)
                <p>{{$question['responds'][(int)$value - 1]['text']}}</p>
                @break
        @endswitch
        </div>
    @endforeach
</div>
@endcomponent