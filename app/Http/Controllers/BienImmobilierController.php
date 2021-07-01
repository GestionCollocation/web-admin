<?php

namespace App\Http\Controllers;
use App\Models\BienImmobilier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth; 

class BienImmobilierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       
        //$bienimm = BienImmobilier::all();
        $bienimm = BienImmobilier::latest()->paginate(6);
         $v=DB::table('bien_immobiliers')->select('ville')->groupBy('ville')->get(); 
        $q=DB::table('bien_immobiliers')->select('quartier')->groupBy('quartier')->get(); 

        // $nouv= BienImmobilier::latest()->limit(3);
         $nouv= DB::table('bien_immobiliers')->join('users','users.id' ,'=', 'bien_immobiliers.user_id')->select('bien_immobiliers.*','users.name as name')->orderByDesc('created_at')->limit(3)->get();
      
        return view('acceuil')->with('bienimmobilier',$bienimm)->with('nouv',$nouv)->with('ville',$v)->with('quartier',$q);
       
    }


    public function index_1()
    {
      $post=DB::table('postes')->where('id_utilisateur','=',Auth::id())->get();


       $bienimm=DB::table('bien_immobiliers')->where('user_id','=',Auth::id())->get();

       return view('profile')->with('bienimm',$bienimm)->with('post',$post);
    }   


    public function create()
    {
       return view('create');
    }

   
    public function store(Request $req)
    {
       $req->validate([
         'titre'=>'required',
         'ville'=>'required',
         'quartier'=>'required',
         'superficie'=>'required',
         'nb_chambres'=>'required',
         'nb_personnes'=>'required',
         'prix'=>'required',
         'description'=>'required',
         'etat'=>'required',
         'statut'=>'required',
         'imageFile'=>'required',
         'imageFile.*' => 'mimes:jpeg,jpg,png|max:2048',
         
        ]);


        $bienimm = new BienImmobilier();

        $bienimm->titre = $req->input('titre');
        $bienimm->ville = $req->input('ville');
        $bienimm->quartier = $req->input('quartier');
        $bienimm->superficie = $req->input('superficie');
        $bienimm->nb_chambres = $req->input('nb_chambres');
        $bienimm->nb_personnes = $req->input('nb_personnes');
        $bienimm->prix = $req->input('prix');
        $bienimm->user_id=Auth::id();
        $bienimm->description = $req->input('description');
        $bienimm->etat = $req->input('etat');
        $bienimm->statut = $req->input('statut');
   
        //'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'


        if($req->hasfile('imageFile'))
        {
            $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $i=1;
           foreach($req->file('imageFile') as $file) 
           {
            
           $name = substr(str_shuffle(str_repeat($pool, 5)), 0, 10);
           $extension = $file->getClientOriginalExtension();
           $name =$name. time() .'_'.$i.'.'.$extension;
           $file->move(public_path().'/uploads/', $name);
           $imgData[] = $name;
           $i++;
           }

        $bienimm->images = json_encode($imgData);
 
        if (count($imgData) > 6){
        return back()->with('error','U are upload too much photos ');
        }

        else{
         $bienimm->save();
         return back()->with('success','Annonce bien enregistrée');
        }
      }
    }


    public function show($id)
    {
       $bienimm = BienImmobilier::find($id);
       return view('annonces-details')->with('bienimmobilier',$bienimm);
    }


    public function show_1($id)
    {
        //return view('show')->with('bienimm',$bien);
        $bien = BienImmobilier::find($id);
        return view('showImm')->with('bienimm',$bien);
    }
   
    public function edit($id)
    {
        $bien = BienImmobilier::find($id);
        return view('editImm')->with('bienimm',$bien);
    }

   
     public function update(Request $req, $id)
    {

      $req->validate([
         'titre'=>'required',
         'ville'=>'required',
         'quartier'=>'required',
         'superficie'=>'required',
         'nb_chambres'=>'required',
         'nb_personnes'=>'required',
         'prix'=>'required',
         'description'=>'required',
         'etat'=>'required',
         'statut'=>'required',
         'imageFile.*' => 'mimes:jpeg,jpg,png|max:2048'

         //max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000
        ]);

        $bienimm = BienImmobilier::find($id);

        $bienimm->titre = $req->input('titre');
        $bienimm->ville = $req->input('ville');
        $bienimm->quartier = $req->input('quartier');
        $bienimm->superficie = $req->input('superficie');
        $bienimm->nb_chambres = $req->input('nb_chambres');
        $bienimm->nb_personnes = $req->input('nb_personnes');
        $bienimm->prix = $req->input('prix');
        $bienimm->description = $req->input('description');
        $bienimm->etat = $req->input('etat');
        $bienimm->statut = $req->input('statut');

        if($req->hasfile('imageFile'))
        {
            $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $i=1;
           foreach($req->file('imageFile') as $file) 
           {
            
           $name = substr(str_shuffle(str_repeat($pool, 5)), 0, 10);
           $extension = $file->getClientOriginalExtension();
           $name =$name. time() .'_'.$i.'.'.$extension;
           $file->move(public_path().'/uploads/', $name);
           $imgData[] = $name;
           $i++;
           }

           $bienimm->images = json_encode($imgData);
           if (count($imgData) >= 2){
           return back()->with('error','U are upload too much photos ');
           }

           else{
           $bienimm->save();
           return back()->with('success','Annonce bien modifiée');
          }
     
        }   

          else {
       
           //$bienimm->update($req->all());
           //$bienimm->images = $bienimm->images;
           $bienimm->save();
           return back()->with('success',"Annonce bien modifiée");
   
      }
}

  //---------------------------------------delete----------------------------------------

    public function destroy($id)
    {
       $bien = BienImmobilier::find($id);
       $bien->delete();
       return redirect()->back();
    }


    public function rechercher(Request $request)
    {

   
       if(isset($_GET['ville']) || isset($_GET['quartier']) || isset($_GET['prix'])){

      $ville=  $_GET['ville'] == 'Sélectionnez ville' ? '' : $_GET['ville'];
     
        $quartier= $_GET['quartier'] == 'Sélectionnez quartier' ? ''  : $_GET['quartier'];
       
        $prix=$_GET['prix']  == 'Sélectionnez Prix' ? '1000000000000'  : $_GET['prix'];
        $listInfPrix = array('0','1500','3000','5000','10000') ;
        
        
        $infPrix = !((array_search($prix,$listInfPrix)-1) == '-1') ? $listInfPrix[ array_search($prix,$listInfPrix)-1] :   '0' ;
     
      
    

            
      $bi=DB::table('bien_immobiliers')->select('bien_immobiliers.*')->Where('bien_immobiliers.ville','LIKE','%'.$ville.'%')->Where('bien_immobiliers.quartier','LIKE','%'.$quartier.'%')->Where('bien_immobiliers.prix','>', (int) $infPrix)->Where('bien_immobiliers.prix','<=', (int) $prix)->get(); 

   
     echo 'ville = ' . $ville .' quartier = ' . $quartier . ' infprix = ' . $infPrix . ' prix = ' . $prix ;
        $v=DB::table('bien_immobiliers')->select('ville')->groupBy('ville')->get(); 
         $q=DB::table('bien_immobiliers')->select('quartier')->groupBy('quartier')->get(); 

       $nouv= BienImmobilier::latest()->limit(3);
         $nouv= DB::table('bien_immobiliers')->join('users','users.id' ,'=', 'bien_immobiliers.user_id')->select('bien_immobiliers.*','users.name as name')->orderByDesc('created_at')->limit(3)->get();
      
       return view('acceuil')->with('nouv',$nouv)->with('ville',$v)->with('quartier',$q)->with('recherche',$bi);


      
    }
    else{
      return view('acceuil')->with('message','Aucune Resultat')->with('nouv',$nouv); 
    }
}

public function fetch(Request $request){

  $select=$request->get('select'); 
  $value=$request->get('value'); 
  $dependent = $request->get('dependent'); 
  $data=DB::table('bien_immobiliers')->select('quartier')->where($select,$value)->groupBy($dependent)->get();
  $output = '<option value="">Sélectionnez '.ucfirst($dependent).'</option>';
  foreach ($data as $row ) {
    $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
  }
  echo $output;

}
 public function bi_admin()
    {
          $bi= BienImmobilier::latest()->paginate(10);
        return view('admin.BienImmobilier')->with('bi',$bi);  
    }
   
  public function show_admin($id)
    {
       $bien = BienImmobilier::find($id);
       return view('admin.biDetails')->with('bien',$bien);
    }

}