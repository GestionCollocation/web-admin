<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Http\Uploadedfile;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function update(Request $request, $id){

        
        $user=user::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->sexe=$request->sexe;
        $user->telephone=$request->telephone;
        $user->apropos=$request->apropos;


         if($request->has('profile_image'))
        {
            $photo = $request->profile_image;
            $filename = time().$photo->getClientOriginalName();
            $photo->move('uploads/user',$filename);
            $user->profile_image='uploads/user/'.$filename;
        }
         $user->save();
        // dd($request->all());
         return redirect('profile')->with('success','profile update successflly');
       
    }
     public function update_photo(Request $request, $id){
        $user=user::find($id);
         if($request->has('profile_image'))
        {
            $photo = $request->profile_image;
            $filename = time().$photo->getClientOriginalName();
            $photo->move('uploads/user',$filename);
            $user->profile_image='uploads/user/'.$filename;
        }
         $user->save();
        // dd($request->all());
         return redirect('profile')->with('success','profile update successflly');
       
    }

     public function destroy($id) 
    {
         $post = User::find($id)->delete();
         return redirect()->back()->with('success_delete', 'Supprimé avec Succès');

    }
    public function index_admin()
    {
          $posts= DB::table('users')->where('name', 'not like', '%Admin%')->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.users')->with('posts',$posts);  
    }

     public function update_admin(Request $request, $id){

        
        $user=user::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->sexe=$request->sexe;
        $user->telephone=$request->telephone;
        $user->apropos=$request->apropos;


         if($request->has('profile_image'))
        {
            $photo = $request->profile_image;
            $filename = time().$photo->getClientOriginalName();
            $photo->move('uploads/user',$filename);
            $user->profile_image='uploads/user/'.$filename;
        }
         $user->save();
        // dd($request->all());
         return redirect()->back()->with('success','profile update successflly');
       
    }

}
