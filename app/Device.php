<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
	protected $table = 'devices';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'serial', 'lat', 'lng',
    ];

    public function type_d()
    {
    	return $this->belongsTo('App\TypeDevice');
    }
    public function weathers()
    {
        return $this->HasMany('App\Weather');
    }
}
