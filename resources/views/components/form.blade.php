
@if ($attributes->has('income')||$attributes->has('spending'))
<form class="max-w-sm mx-auto" action="{{route(request()->segments()[0].'.update', ['id'=> $attributes->has('income') ? $attributes['income']['id']:$attributes['spending']['id']])}}" method="POST" >
  @csrf
  @method('PUT')
  <div class="mb-5">
    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Date</label>
     <input type="date" name="date" {{ $attributes->has('income') ? 'value=' . $attributes['income']['date']. '' : 'value=' . $attributes['spending']['date'] . '' }} id="date" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required /> 
  </div>
  <div class="mb-5">
    <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Amount</label>
    <input type="number" step="any" name="amount" {{ $attributes->has('income') ? 'value=' . $attributes['income']['amount'] . '' : 'value=' . $attributes['spending']['amount'] . '' }} id="number" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required />
  </div>
  <div class="mb-5">
    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Category</label>
    <input type="text" name="category"
    {{ $attributes->has('income') ? 'value=' . $attributes['income']['category'] . '' : 'value=' . $attributes['spending']['category'] . '' }}
    id="category" 
    class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" 
    required />

  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar</button>
</form>
@else 

<form class="max-w-sm mx-auto" action="{{route(request()->segments()[0].'.store')}}" method="POST">
  @csrf
  <div class="mb-5">
    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Date</label>
    <input type="date" name="date" id="date" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required />
  </div>
  <div class="mb-5">
    <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Amount</label>
    <input type="number" name="amount" id="number" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required />
  </div>
  <div class="mb-5">
    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Category</label>
    <input type="text" name="category" id="category" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required />
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar</button>
</form>
@endif
