<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeDevice extends Model
{
    protected $table = 'type_devices';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
    public function devices()
    {
    	return $this->HasMany('App\Device');
    }
    public function normal()
    {
        return $this->HasOne('App\Normal');
    }
}
