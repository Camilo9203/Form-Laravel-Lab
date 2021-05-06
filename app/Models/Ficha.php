<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;

    protected $table = 'fichaCaracterizacion';

    //Sin protección
    protected $guarded = [];

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
