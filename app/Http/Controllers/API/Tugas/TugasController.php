<?php

namespace App\Http\Controllers\API\Tugas;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Task;

class TugasController extends Controller
{
    public function getAll(){
        $data = DB::table('tasks')
        ->orderBy('id','desc')
        ->get();
    
    return response()->json($data, 200);

    }

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
    public function update(Request $request){
        $validateData = $request->validate([
            'id' => 'required',
            'Nama_tugas' => 'required',
            'id_kategori' => 'required',
            'Ket_tugas' => 'required',
            'Status_tugas' => 'required',
        ]);
        $data = Task::where('id','=',$request->id)->first();
        $data->id = $request->id;
        $data->Nama_tugas = $request->Nama_tugas;
        $data->id_kategori = $request->id_kategori;
        $data->Ket_tugas = $request->Ket_tugas;
        $data->Status_tugas = $request->Status_tugas;
        
        $data->save();
        return response()->json($data, 201);
    }
    public function destroy(Request $request){
        $data = Task::where('id','=',$request->id)->first();

        if(!empty($data)){
            $data->delete();

            return response()->json($data, 200);
        }
        else{
            return response()->json([
                'error'=>'data tidak ditemukan'
            ], 404);
        }
    }
}
