<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    //
    protected $table='pedidos';
     protected $primaryKey='id_pedido';
     public $timestamps=false;
 
     protected $fillable=[
         'fecha_elaboracion',
         'fecha_inicio',
         'fecha_final',
         'monto_total',
     ];
 
     protected $guarded=[
 
     ];
}
