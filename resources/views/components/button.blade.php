{{-- <!-- <div>
    @if($attributes->has('type'))
    <input type="{{$attributes['type']}}" name="{{$attributes['name']}}" class="{{$attributes['class']}}" value="{{$attributes['value']}}" />
    @endif
    @if($attributes->has('href'))
    <a href="{{$attributes['href']}}" class="{{$attributes['class']}}" value="{{$attributes['value']}}"></a>
    @endif

</div> --> --}}

    @if($attributes->has('href'))
    <a {{$attributes->has('class')? $attributes: $attributes->merge(['class'=>'bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded' ])}}>
        {{ $slot }}
    </a>
    @elseif($attributes->has('name'))
    <button type="submit" {{$attributes->has('class')? $attributes: $attributes->merge(['class'=>'bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded' ])}}>
        {{ $slot }}
    </button>
    @else
    <button type=" button" {{ $attributes->merge(['class' => 'bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded']) }}>
        {{ $slot }}
    </button>
    @endif