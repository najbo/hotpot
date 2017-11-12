<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Project extends Model
{
    public function scopeActives($query)
    	{
    		return $query->where('archived','=',0);
    	}

    // Créer une méthode qui renvoie un UUID sous forme de string
    public static function createUUID()
    	{
		return Uuid::generate()->string;
		// $project->auth_code = App\Project::createUUID();
		}
}

