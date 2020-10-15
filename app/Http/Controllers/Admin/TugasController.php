<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.tugas.create');
    }
}
