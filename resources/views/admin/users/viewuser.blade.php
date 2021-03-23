@extends('layouts.app')
@section('title','Users')
@section('content')
     

  <table>
    <tr>
      <th>EmpID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Address</th>
      <th>MobileNo</th>
      <th>Position</th>
      <th>Status</th>
      <th>Action</th>    
    </tr>
      @foreach($users as $user)
    <tr>
      <td>{{$user['EmpID']}}</td>
      <td>{{$user['name']}}</td>
      <td>{{$user['email']}}</td>
      <td>{{$user['Address']}}</td>
      <td>{{$user['MobileNo']}}</td>
      <td>{{$user['EmpType']}}</td>
      <td>{{$user['Status']}}</td>
      <td>
        <div class="btn-group" role="group">
       <a href="{{route('users.edit', $user->EmpID)}}">
          <button type="button" >Edit</button>
        </a>
        </div>

        <div class="btn-group" role="group">
         <form action="{{route('users.destroy', $user->EmpID)}}" method="POST">
          @csrf
          @method('delete')
          <button type="submit" data-toggle="modal" data-target="#exampleModal2" >Delete</button>
          </form>  
      </div>
      </td> 
    </tr>
      @endforeach 
      </table>
@endsection


