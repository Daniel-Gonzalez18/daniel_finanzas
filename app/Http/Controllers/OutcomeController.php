<?php

namespace App\Http\Controllers;


use App\Models\Outcome;
use Attribute;
use Illuminate\Http\Request;            
class OutcomeController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[];
        $array = Outcome::all();
        foreach ($array as $value) {
            $arrayAuxiliar=[$value['id'],$value['date'],$value['amount'],$value['category']];
            array_push($data,$arrayAuxiliar);
        }
        dump($array);
        $tableData = [
             'heading' => [
                'id',
                 'date',
                 'purchase',
                 'category'
             ],
             'data' => $data
         ];
         dump($tableData);
        //Aquí la lógica de negocio para el index
        return view('income.index', ['title' => 'My incomes', 'tableData' => $tableData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return '<p>Esta es la página del create de incomes</p>';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return '<p>Esta es la página del show de incomes</p>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return '<p>Esta es la página del edit de incomes</p>';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
