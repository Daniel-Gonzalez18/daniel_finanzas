<div>
    <p>Id:{{$attributes->has('income')? $attributes['income']['id']: $attributes['spending']['id']}}</p>
    <p>Date:{{$attributes->has('income')? $attributes['income']['date']: $attributes['spending']['date']}}</p>
    <p>Amount:{{$attributes->has('income')? $attributes['income']['amount']: $attributes['spending']['amount']}}</p>
    <p>Category:{{$attributes->has('income')? $attributes['income']['category']: $attributes['spending']['category']}}</p>
</div>