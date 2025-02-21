<div class="relative overflow-x-auto mt-6">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                @foreach ($tableData['heading'] as $heading)
                <th scope="col" class="px-6 py-3">
                    {{$heading}}
                </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($tableData['data'] as $row)
            
            @if($loop->even)
            <tr class="bg-gray-500 border-b dark:bg-gray-500 dark:border-gray-700">
                @else
            <tr class="bg-gray-300 border-b dark:bg-gray-300 dark:border-gray-700">
                @endif
                @foreach ($row as $cell)
                {{-- @dump($row) --}}
                @if ($cell!==$row['id'])

                    
                
                @if ($loop->first)
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$cell}}
                </th>
                @else
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$cell}}
                </td>

                
                @endif
                @endif
                @endforeach
                
                <td class="flex" >
                <x-button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 mt-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="{{route( request()->segments()[0].'.show', ['id'=>$row['id']])}}">show</x-button>
                <x-button class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 mt-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" href="{{route( request()->segments()[0].'.edit', ['id'=>$row['id']])}}">edit</x-button>
                <form action="{{route(request()->segments()[0].'.destroy', ['id'=>$row['id']])}}" method="POST">
                   
                    @csrf
                    @method('DELETE')
                    <x-button class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 mt-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" name="eliminar">Borrar</x-button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>