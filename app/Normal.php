<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Normal extends Model
{
    protected $table = 'normals';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'min_val', 'max_val',
    ];

    public function type_device()
    {
    	return $this->belongsTo('App\TypeDevice');
    }
}
