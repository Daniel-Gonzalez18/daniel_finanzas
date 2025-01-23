<div class="relative overflow-x-auto">
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
            @foreach ($tableData['data'] as $index=>$row)
            @if($index%2===0)
            <tr class="bg-gray-800 border-b dark:bg-gray-800 dark:border-gray-700">
                @else
            <tr class="bg-gray-300 border-b dark:bg-gray-800 dark:border-gray-700">
                @endif
                @foreach ($row as $cell)
                @if ($cell==$row[0])
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$cell}}
                </th>
                @else
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$cell}}
                </td>

                @endif

                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
</div>