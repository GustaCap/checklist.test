<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $table = 'checklists';

    protected $fillable = [

        'rack_id','equipo_id','user_id','disco','memoria','fancooler','powersupply','energia','expansion','controladora','sw_fibra','observaciones','token'

    ];

    public function racks()
    {
        return $this->hasMany('App\Rack');
    }

    public function equipo()
    {
        return $this->belongsTo('App\Equipo');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
