<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Machine;

class MachinesController
{
    public function index()
    {
        //deve ser implementado em Models
        //$machines = DB::select('SELECT id, name FROM machines');
        //dd($machines); //dd é igual a varbump e para o processamento

        $machines = Machine::all();
        //imprimir é na View
        //dd($machines); //dd é igual a varbump e para o processamento

        return view('machines.index')->with('machines', $machines);

    }

    public function show($id)
    {
        echo "<h1>Visualizar a máquina $id.</h1>";
    }

    public function create()
    {
        return view('machines.create');
    }

    public function store(Request $request)
    {

        Machine::create($request->only(['name']));

        return redirect('machines')->with('sucesso', "Máquina cadastrada com sucesso!");
    }
}
