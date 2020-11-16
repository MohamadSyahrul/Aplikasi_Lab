<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = "tasks";
    protected $primaryKey = "id";
    protected $fillable =[
         'Nama_tugas','id_kategori','Ket_tugas', 'Status_tugas',
        
        ];

}
