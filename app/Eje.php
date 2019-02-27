<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eje extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'eje_name',
    ];

    public $timestamps = false;

    public function indicator(){
        return $this->hasMany('App\Indicator');
    }
}
