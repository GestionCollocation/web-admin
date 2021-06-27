<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BienImmobilier extends Model
{
    use HasFactory;
    
     protected $dates =['updated_at','created_at'];
    
     protected $fillable =[
	        'titre',
	        'ville',
	        'quartier',
	        'superficie',
	        'nb_chambres',
	        'nb_personnes',
	        'prix',
	        'description',
	        'user_id',
	        'etat',
	        'statut',
	        'images'
	    ];

    public function user(){
    	return $this->belongsTo('App\Models\User' , 'user_id');
    }


}
