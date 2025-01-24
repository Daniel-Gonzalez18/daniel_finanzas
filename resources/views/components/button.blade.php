<div>
    @if($attributes->has('type'))
    <input type="{{$attributes['type']}}" name="{{$attributes['name']}}" class="{{$attributes['class']}}" value="{{$attributes['value']}}" />
    @endif
    @if($attributes->has('href'))
    <a href="{{$attributes['href']}}" class="{{$attributes['class']}}">formulario</a>
    @endif

</div>