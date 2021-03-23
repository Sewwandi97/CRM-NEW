<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('views: admin.users.index');
        //return view('index');
        $users= User::orderBy('EmpID','asc')->get();
        return view('admin.users.index' ,['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.users.create');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show', ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user) 
    {
        //$data = user::find($EmpID);
        return view('admin.users.updateuser',['users'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $data = user::find($request->input('EmpID'));
        $data->EmpID = $request->input('EmpID');
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->Address = $request->input('Address');
        $data->MobileNo = $request->input('MobileNo');
        $data->EmpType = $request->input('Position');
        $data->Status = $request->input('Status');
        
        $data->save();
<<<<<<< HEAD
        return redirect('/home');
        
=======

        return redirect('/viewuser');
>>>>>>> 311034ed1a80dabbab7cf4f078053fa026a1eb74
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($EmpID)
    {
        $data=user::find($EmpID);
        $data->delete();
        return redirect('/home');
    }

    public function assigntask(){
        $users= User::all();
        return view('task.AssignTask')->with('users', $users);
    }
}
