<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    //
    protected $table='servicios';
     protected $primaryKey='id_servicio';
     public $timestamps=false;
 
     protected $fillable=[
         
         'id_unidad_medida',
         'servicio',
         'costo',
     ];
 
     protected $guarded=[
 
     ];
}
