<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $users= User::all();
        return view('admin.users.index')->with('users', $users);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return DB::table('users')
       ->join('roles','users.EmpID',"=",'roles.RoleID')
       ->where('users.EmpID',2)
       ->get();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($EmpID)
    {
        $data = user::find($EmpID);
        return view('admin.users.updateuser',['users'=>$data]);

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
        $data->EmpType = $request->input('EmpType');
        $data->Status = $request->input('Status');
        
        $data->save();
        $users= User::all();
        return view('admin.users.viewuser')->with('users', $users);
        
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

      //  if ($data != null) {
       //     $data->delete();
       //     return redirect()->route('home')->with(['message'=> 'Successfully deleted!!']);
       // }
    }
}
