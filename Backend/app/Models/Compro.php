<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compro extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'compras';
    protected $primaryKey = 'id_compra';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'cantidad',
        'id_usuario',
        'id_producto',
    ];

    public function producto(){
        return $this->belongsTo('App\Models\Producto','id_producto');
     }
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
