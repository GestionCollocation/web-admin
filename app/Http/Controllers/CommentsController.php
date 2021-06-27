<?php

namespace App\Http\Controllers;

use App\Models\Comments;

use App\Models\Poste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;


class CommentsController extends Controller
{
   
    public function index()
    {
        //
    }

   
    public function create()
    {
        
    }

   
   public function store(Request $request , $post){

        $this->validate($request,[

           'contenue'=>'required|max:1000',
       ]); 
            $commentaires=Comments::create([
            'poste_id'=>$post,
            'user_id'=>Auth::id(),
             'contenue'=>$request->contenue, 

           ]); 
        
        

        // Toast::success('success','The comment created succeessfuly;)'); 

     return redirect()->back(); 

    }
   public function repondre(Request $request , $commentaire){


        $this->validate($request,[

           'contenue'=>'required|max:1000',
       ]); 
        $commentaires=Comments::create([

          
            'poste_id'=>$commentaire,
              'comments_p'=>$commentaire,
             'user_id'=>Auth::id(),
             'contenue'=>$request->contenue, 

           ]); 
        
        

     return redirect()->back(); 

   }



   
    public function show(Comments $comments)
    {
        //
    }

    
    // public function editposte($id)
    // {
         
  
    //     $comments=Comments::find($id);
         
    //     return  view('posts.show')->with('comments',$comments);
    // }

    public function update(Request $request,  $id)
    {
        
        
         $this->validate($request,['contenue'=>'required']); 
        $comments=Comments::find($id);
         $comments->contenue = $request->contenue; 
       $comments->save();
       

        return redirect()->back();
       
    }

   
      public function destroy($id) 
    {
          $post = Comments::find($id)->delete();
          return redirect()->back();

    }
}
