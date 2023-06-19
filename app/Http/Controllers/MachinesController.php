<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Machine;

class MachinesController
{
    public function index()
    {
        echo "<h1>Listar as máquinas</h1>";
        //deve ser implementado em Models
        //$machines = DB::select('SELECT id, name FROM machines');
        //dd($machines); //dd é igual a varbump e para o processamento

        
        $machines = Machine::all();
        dd($machines); //dd é igual a varbump e para o processamento

    }

    public function show($id)
    {
        echo "<h1>Visualizar a máquina $id.</h1>";
    }
}
