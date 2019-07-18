<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $table = 'checklists';

    protected $fillable = [

        'rack_id','equipo_id','user_id','sta_disco','sta_memoria','sta_fancouler','sta_powersuplay','sta_energia','sta_espacion_discos','observaciones'

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
