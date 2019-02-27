<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'indicator_code', 'indicator_name',
    ];

    public function eje(){
        return $this->belongsTo('App\Eje');
    }

    public function action(){
        return $this->hasMany('App\Action');
    }

    public $timestamps = false;
}
