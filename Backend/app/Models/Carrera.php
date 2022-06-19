<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'carreras';
    protected $primaryKey = 'id_carrera';
    protected $fillable = [
         'nombre', 'estado'
    ];
    public function carrera(){
        return $this->hasMany('App\Models\carrera','id_carrera');
    }
   
}
