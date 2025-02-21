<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Attribute;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $array = Income::all();

        $tableData = [
            'heading' => [
                'date',
                'amount',
                'category',
                'actions'
            ],
            'data' => []
        ];
        foreach ($array as $data) {
            $tableData['data'][] = [
                'id' => $data['id'],
                'date' => $data['date'],
                'amount' => $data['amount'],
                'category' => $data['category'],
            ];
        }
        //Aquí la lógica de negocio para el index
        return view('incomes.index', ['title' => 'My incomes', 'tableData' => $tableData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('incomes.create', ['title' => 'Add incomes']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $income = new Income;
        $income->date = $request->input('date');
        $income->category = $request->input('category');
        $income->amount = $request->input('amount');
        $income->save();
        return redirect(route('incomes.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $incomes = Income::all();

        $income = $incomes->findOrFail($id);
        return view('incomes.show', ['title' => 'Show Income', 'income' => $income]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $incomes = Income::all();

        $income = $incomes->findOrFail($id);
        return  view('incomes.edit', ['title' => 'Edit Income', 'income' => $income]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $incomes= Income::all();
        $income = $incomes->findOrFail($id);
        $income->amount=$request->amount;
        $income->date=$request->date;
        $income->category=$request->category;
        $income->save();
        return redirect(route('incomes.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $incomes = Income::all();
        $income = $incomes->findOrFail($id);
        $income->delete();
        return redirect(route('incomes.index'));
    }
}
