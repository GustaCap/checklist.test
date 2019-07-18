<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rack extends Model
{
    protected $table = 'racks';

    protected $fillable = [

        'descripcion'

    ];

    public function equipos()
    {
        return $this->hasMany('App\Equipo');
    }

    public function checklist()
    {
        return $this->belongsTo('App\Checklist');
    }
}
