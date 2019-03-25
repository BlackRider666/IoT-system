<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    protected $table = 'weathers';
    /**
     * The attributes that are mass assignable.
     * I love gitHub
     * @var array
     */
    protected $fillable = [
        'dev_data', 'created_at',
    ];

    public function device()
    {
    	return $this->belongsTo('App\Device');
    }
}
