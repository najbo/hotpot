<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon ;

class Sensordata extends Model
{
	// On indique à Eloquent que la table n'a pas de champs created_at et updated_at
    public $timestamps = false;
   
    /**
     * The attributes that are mass assignable (https://laravel.com/docs/5.4/eloquent#mass-assignment)
     *
     * @var array
     */
    protected $fillable = ['sensor_id','data', 'recorded_at'];


    // Affiche les données des senseurs des dernières 24 heures
    public static function showLast24hStatic()
    {
    	return static::where('recorded_at', '>=', Carbon::now()->subDay())->get();

    }

    public  function scopeShowLast24h($query)
    {
    	return $query->where('recorded_at', '>=', Carbon::now()->subDay());

    }
}
