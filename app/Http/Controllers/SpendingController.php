<?php

namespace App\Http\Controllers;


use App\Models\Spending;
use Attribute;
use Illuminate\Http\Request;

class SpendingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $array = Spending::all();
        $tableData = [
            'heading' => [
                'date',
                'purchase',
                'category',
                'action'
            ],
            'data' => []
        ];
        foreach ($array as $data) {
            $tableData['data'][] = [
                'id' => $data['id'],
                'date' => $data['date'],
                'amount' => $data['amount'],
                'category' => $data['category']
            ];
        }
        //Aquí la lógica de negocio para el index
        return view('spending.index', ['title' => 'My Spendings', 'tableData' => $tableData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('spending.create', ['title' => 'Add spending']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $spending = new Spending;
        $spending->date = $request->input('date');
        $spending->category = $request->input('category');
        $spending->amount = $request->input('amount');
        $spending->save();
        return redirect(route('spending.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $spendings = Spending::all();

        $spending = $spendings->findOrFail($id);
        return view('spending.show', ['title' => 'Show Spending', 'spending' => $spending]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $spendings = Spending::all();

        $spending = $spendings->findOrFail($id);
        return  view('spending.edit', ['title' => 'Edit spending', 'spending'=>$spending]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $spendings= Spending::all();
        $spending = $spendings->findOrFail($id);
        $spending->amount=$request->amount;
        $spending->date=$request->date;
        $spending->category=$request->category;
        $spending->save();
        return redirect(route('spending.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $spendings = Spending::all();
        $spending = $spendings->findOrFail($id);
        $spending->delete();
        return redirect(route('spending.index'));
    }
}
