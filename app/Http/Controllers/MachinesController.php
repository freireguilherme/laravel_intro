<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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
}
