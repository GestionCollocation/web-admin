<?php

namespace App\Http\Controllers;

use App\Models\Poste;

use App\Models\BienImmobilier;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Carbon\Carbon;
class PosteController extends Controller
 {
//     public function __construct(){
//          $this->middleware("auth");
//      }

     

    
    public function index()
    {
          $posts= Poste::latest()->paginate(4);
        return view('annonces')->with('posts',$posts);  
    }
     public function postesTrashed()
    {
        $post=Poste::onlyTrashed()->get();
        return view('posts.trashed')->with('post',$post);
    }
     public function index_2()
    {

       
    }   


   
    public function create()
    {
        return view('CreerPoste');
    }

    
    public function store(Request $request, $bienImm)
    {
        $this->validate($request,[
            'titre'=>'required',
            'nb_personnes'=>'required',
            'description'=>'required',
             'location'=>'required',

        ]);

       

           $posts=Poste::create([
            
            'id_imm'=>$bienImm,
            'id_utilisateur'=>Auth::id(),
            'titre'=> $request->titre,
            'nb_personnes'=> $request->nb_personnes,
            'description'=> $request->description,
            'location'=> $request->location,
            'slug'=>str_slug($request->titre),

           ]); 
           return redirect()->back()->with('success_create', 'Votre Poste à été bien créer');

    }

    
    public function show($id)
    {
        $post = Poste::find($id);
        return view('posts.show')->with('post',$post);
    }

   
    public function edit($id)
    {
       


      
    }

   
    public function update(Request $request, $id)
    {
        $post = Poste::find($id);
        $this->validate($request,[
            'titre'=>'required',
            'nb_personnes'=>'required',
            'description'=>'required',
            'location'=>'required',
            
        ]);

       
       $post->titre = $request->titre;
       $post->nb_personnes = $request->nb_personnes;
       $post->description = $request->description; 
       $post->location = $request->location;
       $post->save();
       return redirect()->back()->with('success_edit', 'Modifié avec Succès');




    }



    
    public function destroy($id) 
    {
         $post = Poste::find($id)->delete();
         return redirect()->back()->with('success_delete', 'Supprimé avec Succès');

    }

     public function hdelete($id)
    {
         $post = Poste::withTrashed()->where('id', $id)->first();
         $post->forceDelete(); 
         return redirect()->back();


    }

     public function restre($id)
    {
        $post = Poste::withTrashed()->where('id', $id)->first();
         $post->restore(); 
        return redirect()->back();


    }

    public function partage($id){
         

         $bienImm= BienImmobilier::find($id); 
         return view('CreerPoste')->with('bienImm',$bienImm);
    }
        
    public   function search(Request $request){
    
    if(isset($_GET['query'])){

        $sreach_text=$_GET['query'];
        $search=Poste::latest()->where('postes.location','LIKE','%'.$sreach_text.'%')->paginate(1);
        $posts= Poste::latest()->paginate(4);


        // DB::table('postes')->join('users','users.id' ,'=', 'postes.id_utilisateur')->select('postes.*','users.id as user_id','users.name as name','users.profile_image as photo')->where('postes.location','LIKE','%'.$sreach_text.'%')->paginate(3);
        return view('annonces')->with('search',$search);
    }
    else{
        return view('annonces')->with("erreur","Mots clé n'existe pas"); 
    }

    
}

// ADMIN 

public function indexAdmin(){
 
    $post= DB::table('postes')->orderBy('created_at', 'DESC')->limit(5)->get();
    $bienImm= DB::table('bien_immobiliers')->orderBy('created_at', 'DESC')->limit(5)->get();
    $user= DB::table('users')->where('name', 'not like', '%Admin%')->orderBy('created_at', 'DESC')->limit(5)->get();
   $nb_posts= Poste::whereDate('created_at', '=', Carbon::today()->toDateString())->get();
   $nb_users= User::whereDate('created_at', '=', Carbon::today()->toDateString())->get();
   $nb_bienImm= BienImmobilier::whereDate('created_at', '=', Carbon::today()->toDateString())->get();

    
    return view('admin.dashboard')->with('nb_posts',$nb_posts)->with('nb_users',$nb_users)->with('nb_bienImm',$nb_bienImm)->with('post',$post)->with('bienImm',$bienImm)->with('user',$user);


}

  public function poste_admin()
    {
          $posts= Poste::latest()->paginate(4);
        return view('admin.annonce')->with('posts',$posts);  
    }
    
}

