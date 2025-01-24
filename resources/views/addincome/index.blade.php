<x-layouts.index :title="$title">
  <x-table :tableData="$tableData" />
  <x-button type="submit" name="formulario" value="ver" class="bg-sky-500 hover:bg-sky-700 m-8 p-3 rounded-xl" />
  <x-button href="http://127.0.0.1:8000/addincomes" class="bg-sky-500 hover:bg-sky-700 m-8 p-3 rounded-xl" />
</x-layouts.index>