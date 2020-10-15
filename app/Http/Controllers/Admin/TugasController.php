<?php

namespace App\Http\Controllers\Admin;

use App\Kategori;
use App\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        $data=Task::all();
        return view('admin.tugas.Dashboard', compact('data'));
    }
    public function create()
    {
        $data_kategori = Kategori::all();
        $pagename = 'Form Input Tugas';
        return view('admin.tugas.create', compact('pagename','data_kategori'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'textNama_tugas'=>'required',
            'optionid_kategori'=>'required',
            'ketKet_tugas'=>'required',
            'radioStatus_tugas'=>'required',
        ]);

        $data_tugas = new Task([
            'Nama_tugas' => $request->get('textNama_tugas'),
            'id_kategori' => $request->get('optionid_kategori'),
            'Ket_tugas' => $request->get('ketKet_tugas'),
            'Status_tugas' => $request->get('radioStatus_tugas'),
        ]);
        $data_tugas->save();
        return redirect('admin/tugas')->with('status', 'Data berhasil ditambah!!');
    }
    public function edit($id)
    {
        $data_kategori = Kategori::all();
        $pagename = 'Update tugas';
        $data = Task::find($id);
        return view('admin..tugas.edit', compact('data','pagename', 'data_kategori'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'textNama_tugas'=>'required',
            'optionid_kategori'=>'required',
            'ketKet_tugas'=>'required',
            'radioStatus_tugas'=>'required',
        ]);

        $tugas = Task::find($id);

            $tugas->Nama_tugas = $request->get('textNama_tugas');
            $tugas->id_kategori = $request->get('optionid_kategori');
            $tugas->Ket_tugas = $request->get('ketKet_tugas');
            $tugas->Status_tugas = $request->get('radioStatus_tugas');

        $tugas->save();
        return redirect('admin/tugas')->with('status', 'Data berhasil diupdate!!');
    }
    public function destroy($id)
    {
        $tugas = Task::find($id);
        $tugas->delete();
        return redirect('admin/tugas')->with('hapus', 'Data berhasil dihapus!!');
    }
}
