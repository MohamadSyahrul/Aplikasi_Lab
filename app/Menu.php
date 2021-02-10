<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "antrian";
    protected $primaryKey = "id";
    protected $fillable =[
        'noAntrian','namaAntrian','alamatAntrian'
       ];
}
