<?php

namespace App\Http\Controllers\API\Tugas;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('menu')
        ->orderBy('id','desc')
        ->get();
    
    return response()->json($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id' => 'required',
            'noAntrian' => 'required',
            'namaAntrian' => 'required',
            'alamatAntrian' => 'required',
        ]);
        $data = new Menu;
        $data->id = $request->id;
        $data->noAntrian = $request->noAntrian;
        $data->namaAntrian = $request->namaAntrian;
        $data->alamatAntrian = $request->alamatAntrian;
        
        $data->save();
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        $validateData = $request->validate([
            'id' => 'required',
            'noAntrian' => 'required',
            'namaAntrian' => 'required',
            'alamatAntrian' => 'required'
        ]);
        $data = Menu::where('id','=',$request->id)->first();
        $data->id = $request->id;
        $data->noAntrian = $request->noAntrian;
        $data->namaAntrian = $request->namaAntrian;
        $data->alamatAntrian = $request->alamatAntrian;
        
        $data->save();
        return response()->json($data, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        $data = Menu::where('id','=',$request->id)->first();

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
