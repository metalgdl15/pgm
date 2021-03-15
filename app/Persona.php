<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $primaryKey = 'folio';

    protected $fillable =['folio','genero', 'nombre', 'apellidoP', 'apellidoM', 'intereses'];

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
