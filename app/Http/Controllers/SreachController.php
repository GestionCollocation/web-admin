<?php
namespace App\Http\Controllers;

use App\Models\Poste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SreachController extends Controller
{



function search(Request $request){
    
    if(isset($_GET['query'])){

    	$sreach_text=$_GET['query'];
    	$search=Poste::latest()->where('postes.location','LIKE','%'.$sreach_text.'%')->paginate(10);
        $posts= Poste::latest()->paginate(10);


    	// DB::table('postes')->join('users','users.id' ,'=', 'postes.id_utilisateur')->select('postes.*','users.id as user_id','users.name as name','users.profile_image as photo')->where('postes.location','LIKE','%'.$sreach_text.'%')->paginate(3);
    	return view('annonces')->with('search',$search)->with('posts',$posts);
    }
    else{
    	return view('annonces')->with("erreur","Mots clé n'existe pas"); 
    }

	
}

}