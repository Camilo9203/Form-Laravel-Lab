<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    public $timestamps = false;


    protected $table = 'usuariosCursos';

    //Sin protección
    protected $guarded = [];

    // protected $fillable = [
    //     'nombres', 'apellidos', 'tipoDocumento', 'numeroDocumento', 'edad', 'departamento', 'municipio', 'direccion'
    // ];


    //Campos denegados a la asignación masiva
    // protected $guarded = ['id', 'approved', 'create_at', 'updated_at'];

    //Campos de asignación masiva
    // protected $fillable = ['title', 'url', 'description'];

    //Cambio de Url
    public function getRouteKeyName()
    {
        return 'url';
    }
}
