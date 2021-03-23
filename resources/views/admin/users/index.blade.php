@extends('layouts.app')
@section('title','Users')
@section('header','Employee Details')

@section('content')
<<<<<<< HEAD
<!-- <div class="pull-left">
    <a class="btn btn-primary" href="/Create-Task">Create New User<span data-feather="plus"></a>
</div> -->

<div class="container" style="background :none !important ">
<div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <!-- <div class="card-header">{{ __('View Employee Details') }}</div> -->
                <div class="card-body">

    <br>
    <form action="/Search_Products" method="GET" role="search">
      {{ csrf_field() }}
      <div class="input-group">
        <input type="text" class="form-control" name="query" id="query" placeholder="Search Employee"> <span class="input-group-btn">
        <button type="submit" class="btn btn-default">
        <span class="glyphicon glyphicon-search"></span>
        </button>
        </span>
      </div>
    </form>
  

    </br>
    </br>
    <div class="container">
    <form action="">
    <table>
=======
     
<div>
  <table>
>>>>>>> 447a647345a03721715c26ea64c705c654daf0be
    <tr>
      <th>EmpID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Address</th>
      <th>MobileNo</th>
      <th>Action</th>    
    </tr>
      @foreach($users as $user)
    <tr>
      <td>{{$user['EmpID']}}</td>
      <td>{{$user['name']}}</td>
      <td>{{$user['email']}}</td>
      <td>{{$user['Address']}}</td>  
      <td>{{$user['MobileNo']}}</td>
      <td>
      <a href="/users/{{$user['EmpID']}}" style="margin:2px" class="text-my-own-color"><span data-feather="eye"></span></a>
      <a href="/users/{{ $user['EmpID'] }}/edit" style="margin:2px" class="text-my-own-color"><span data-feather="edit"></span></a>
      <a href="/users/{{$user['EmpID']}}" data-toggle="modal"   data-target="#exampleModal2" data-userid="{{ $user['EmpID']}}"style="margin:2px" class="text-my-own-color"><span data-feather="trash"></span></a>
      </td> 
    </tr>
<<<<<<< HEAD

    @endforeach 
 </table>
    </form>
    </div>

    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color:#233554">Delete Alert</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="color:#233554">
                        You are going to delete the deatils of  {{$user->name}} . Do you want to continue ?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    <form action="{{route('users.destroy', $user->EmpID)}}" method="POST" >
                      @csrf
                      @method('delete')
                      <button type="submit" data-toggle="modal" data-target="#exampleModal2" style="text-my-own-color" class="btn btn-primary">Delete</button>
                    </form>
                    
                    </div>
                </div>
            </div>
        </div>

  
 </div></div></div></div></div></div></div>
=======
</table>
</div>
>>>>>>> 447a647345a03721715c26ea64c705c654daf0be

@section('js_user_page')

<script src="/vendor/chart.js/Chart.min.js"></script>
<script src="/js/admin/demo/chart-area-demo.js"></script>


<script>
        $('#exampleModal2').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var EmpID = button.data('userid') 
            
            var modal = $(this)
            //modal.find('.modal-footer #EmpID').val(EmpID)
            modal.find('form').attr('action','/users/' + EmpID);
        })
    </script>
@endsection
@endsection


