<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users=User::where('EmpID','!=', Auth::id())->get(); 
        $users=User::where('EmpID','!=', Auth::user()->EmpID)->get(); 
        return view('message.home' , ['users'=>$users]);
    }

    public function getMessage($user_id){
        return $user_id;
        // $my_id = Auth::id();
        // // Make read all unread message
        // Message::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);

        //  $messages = Message::where(function ($query) use ($user_id , $my_id){
        //      $query->where('from',$my_id)->where('to',$user_id);
        //  })->orWhere(
        //      function ($query) use ($user_id , $my_id) {
        //         $query->where('from' ,$user_id )->where('to' ,$my_id );
        //  })->get();

        // return view('message.index' , ['messages' => $messages] );

       
    }
}
