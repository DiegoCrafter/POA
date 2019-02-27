<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'action_name',
    ];

    public function indicador(){
        return $this->belongsTo('App\Action');
    }

    public $timestamps = false;
}
