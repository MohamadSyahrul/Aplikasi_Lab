<?php

namespace App\Http\Controllers\API\Tugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Task;

class TugasController extends Controller
{
    public function store(Request $request){
        $validateData = $request->validate([
            'id' => 'required',
            'Nama_tugas' => 'required',
            'id_kategori' => 'required',
            'Ket_tugas' => 'required',
            'Status_tugas' => 'required',
        ]);
        $data = new Task;
        $data->id = $request->id;
        $data->Nama_tugas = $request->Nama_tugas;
        $data->id_kategori = $request->id_kategori;
        $data->Ket_tugas = $request->Ket_tugas;
        $data->Status_tugas = $request->Status_tugas;
        
        $data->save();
        return response()->json($data, 201);
    }
}
