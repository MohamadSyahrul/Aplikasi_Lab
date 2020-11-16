<?php

namespace App\Http\Controllers\Admin;

use App\Kategori;
use App\Karyawan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Karyawan::all();
        return view('admin.sahrul.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_kategori = Karyawan::all();
        $pagename = 'Form Input';
        return view('admin.sahrul.create', compact('pagename','data_kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'textNIK'=>'required',
            'Nama_karyawan'=>'required',
            'Jabatan_karyawan'=>'required',

        ]);

        $data_tugas = new Karyawan([
            'NIK' => $request->get('textNIK'),
            'namaKaryawan' => $request->get('Nama_karyawan'),
            'jabatanKaryawan' => $request->get('Jabatan_karyawan'),
        ]);
        $data_tugas->save();
        return redirect('admin/sahrul')->with('status', 'Data berhasil ditambah!!');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tugas = Karyawan::find($id);
        $tugas->delete();
        return redirect('admin/sahrul')->with('hapus', 'Data berhasil dihapus!!');
    }
}
