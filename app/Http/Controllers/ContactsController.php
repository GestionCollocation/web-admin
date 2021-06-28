<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use App\Events\NewMessage;
use App\Events\DeleteMessage;
use Illuminate\Support\Facades\DB;
use Auth;

class ContactsController extends Controller
{
   public function get()
   {
       // get all users except the authenticated one
       //$contacts = User::where('id', '!=', auth()->id())->get();
    $contacts=DB::table('users')
       ->select('users.*')->distinct()->join('messages', function($join){
                $join->on('users.id','=','messages.from'); 
                $join->orOn('users.id','=','messages.to');
            })->where('messages.from','=',auth()->id())
       ->orWhere('messages.to','=',auth()->id())->where('users.id', '<>', Auth::id())->get();
       //SELECT DISTINCT users.* FROM `users`, `messages` WHERE messages.from = 
       //users.id Or messages.to = users.id and messages.from = 5 or messages.to = 5

       // get a collection of items where sender_id is the user who sent us a message
       // and messages_count is the number of unread messages we have from hi
    $unreadIds = Message::select(\DB::raw('`from` as sender_id, count(`from`) as messages_count'))
           ->where('to', auth()->id())
           ->where('read', false)
           ->groupBy('from')
           ->get(); 

       // add an unread key to each contact with the count of unread messages
       $contacts = $contacts->map(function($contact) use ($unreadIds) {
           $contactUnread = $unreadIds->where('sender_id', $contact->id)->first();

           $contact->unread = $contactUnread ? $contactUnread->messages_count : 0;

           return $contact;
       });
    
            


       return response()->json($contacts);
   }

   public function get_api($id)
   {
          // get all users except the authenticated one
       //$contacts = User::where('id', '!=', auth()->id())->get();
    $contacts=DB::table('users')
    ->select('users.*')->distinct()->join('messages', function($join){
             $join->on('users.id','=','messages.from'); 
             $join->orOn('users.id','=','messages.to');
         })->where('messages.from','=',$id)
    ->orWhere('messages.to','=',$id)->where('users.id', '<>', $id)->get();
    //SELECT DISTINCT users.* FROM `users`, `messages` WHERE messages.from = 
    //users.id Or messages.to = users.id and messages.from = 5 or messages.to = 5

    // get a collection of items where sender_id is the user who sent us a message
    // and messages_count is the number of unread messages we have from hi
 $unreadIds = Message::select(\DB::raw('`from` as sender_id, count(`from`) as messages_count'))
        ->where('to', $id)
        ->where('read', false)
        ->groupBy('from')
        ->get(); 

    // add an unread key to each contact with the count of unread messages
    $contacts = $contacts->map(function($contact) use ($unreadIds) {
        $contactUnread = $unreadIds->where('sender_id', $contact->id)->first();

        $contact->unread = $contactUnread ? $contactUnread->messages_count : 0;

        return $contact;
    });
 
         


    return response()->json($contacts);
   }

   public function getAllContacts()
   {
        $contacts = DB::table('users')->get();
        return response()->json($contacts);
  }

    public function getMessages($id)
    {

      //mark all messages as read when getting messages fom db
      Message::where('from',$id)->where('to',auth()->id())->update(['read' => true ]);

       $messages = Message::where(function($query) use ($id) {
          $query->where('from',Auth()->id());
          $query->where('to',$id);
       })->orWhere(function($query) use ($id) {
         $query->where('from',$id);
         $query->where('to',Auth()->id());
       })->get(); // (a = 1 And b=2) Or (c = 1 And d = 2)
       return response()->json($messages);
    }
    public function getMessagesApi($id,$user)
    {

      //mark all messages as read when getting messages fom db
      Message::where('from',$id)->where('to',$user)->update(['read' => true ]);

       $messages = Message::where(function($query) use ($id,$user) {
          $query->where('from',$user);
          $query->where('to',$id);
       })->orWhere(function($query) use ($id,$user) {
         $query->where('from',$id);
         $query->where('to',$user);
       })->get(); // (a = 1 And b=2) Or (c = 1 And d = 2)
       return response()->json($messages);
    }
    public function send(Request $request)
    {

        $message = Message::create([
          'from' => auth()->id(),
          'to' => $request->contact_id,
          'text' => $request->message,
       ]);
      
      

       broadcast(new NewMessage($message))->toOthers();

       return response()->json($message);
    }
        public function sendDefault($id)
    {

        $message = Message::create([
          'from' => auth()->id(),
          'to' => $id,
          'text' => 'Salut',
       ]);

       broadcast(new NewMessage($message))->toOthers();

       return  redirect()->route('inbox');
    }
    public function send_api(Request $request)
    {

        $message = Message::create([
          'from' => $request->from,
          'to' => $request->contact_id,
          'text' => $request->message,
       ]);
      
      

       broadcast(new NewMessage($message))->toOthers();

       return response()->json($message);
    }
    public function deleteMessage(Request $request)
    {

      $message = Message::where('id',$request->id)->get();

      //broadcast(new DeleteMessage($message))->toOthers();
      
      $statut = Message::find($request->id)->delete();

      return response()->json($message);
    }
}
