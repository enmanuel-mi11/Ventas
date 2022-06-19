<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'foto',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    
    /**
     * The attributes that should be cast.
     *
     * @var array
     */

}
