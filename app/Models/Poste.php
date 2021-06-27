<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;
    protected $dates =['deleted_at','created_at'];
    protected  $fillable = [
        'id_utilisateur',
        'id_imm',
        'titre',
        'nb_personnes',
        'description',
        'location',
        'slug',
       
    ]; 

    public function user(){
    	return $this->belongsTo('App\Models\User' , 'id_utilisateur'); 
    }

     public function bi(){
        return $this->belongsTo('App\Models\BienImmobilier' , 'id_imm'); 
    }

    // public function imm(){
    // 	return $this->belongsTo('App\Models\BienImmobiler' , 'id_utilisateur');
    // }

 public function comments(){
        return $this->hasMany('App\Models\Comments'); 

   }

}
