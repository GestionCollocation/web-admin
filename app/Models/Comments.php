<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Comments extends Model
{
    use HasFactory;
     protected  $fillable = [
        'poste_id',
        'user_id',
        'contenue',
        'comments_p',
       
       
    ]; 


    public function post(){
    	return $this->belongsTo('App\Models\Poste','poste_id'); 
    }

    public function user(){
        return $this->belongsTo('App\Models\User','user_id'); 
    }

     public function reponse(){
    	return $this->hasMany('App\Models\Comments','comments_p'); 
    }
}
