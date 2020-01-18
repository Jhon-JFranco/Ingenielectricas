<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Implementos extends Model
{
    //
    protected $table='implementos';
    protected $primaryKey='id_implemento';
    public $timestamps=false;

    protected $fillable=[
        'id_empleado',
        'estado',
        'fecha_entrega',
    ];

    protected $guarded=[

    ];
}
