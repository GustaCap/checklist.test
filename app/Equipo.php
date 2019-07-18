<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';

    protected $fillable = [

        'nombre','tipo','marca','responsable','id_rack'

    ];

    public function rack()
    {
        return $this->belongsTo('App\Rack');
    }

    public function checklists()
    {
        return $this->hasMany('App\Checklists');
    }
}
