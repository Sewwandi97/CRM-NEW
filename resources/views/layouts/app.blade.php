<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title','Master Page')</title>
        <link rel="stylesheet" href="{{asset('css/updateprogress.css')}}">
        <link rel="stylesheet" href="{{asset('css/viewprogress.css')}}">
        <link rel="stylesheet" href="{{asset('css/login.css')}}">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous"> -->


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CRM') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/dashboard.js') }}" defer></script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .user-wrapper, .message-wrapper{
          border: 1px solid #dddddd;
          overflow-y: auto;
      }

      .user-wrapper{
        height:600px;
      }

      .user{
        cursor: pointer; 
        padding : 5px 0;
        position : relative;
      }

      .user:hover{
        background : #eeeeee;
      }

      .user:last-child{
        margin-bottom :0;
      }

      .pending{
        position:absolute;
        left: 12px;
        top : 5px;
        background : #b600ff;
        margin : 0;
        border-radius : 50%;
        width : 15px;
        height :15px;
        line-height: 10px; 
        padding-left: 4px;
        color : #ffffff;
        font-size: 12px;
      }

      .media-left{
        margin : 0 10px;
        }
      
      .media-left img{
        width :64px;
        border-radius:64px;

      }

      .media-body p{
        margin :6px 0;
      }

      ul{
        margin: 0;
        padding :0;
      }
      li{
        list-style: none;
      }

      .message-wrapper{
        padding :10px;
        height : 536px;
        background : #eeeeee;
      }

      .messages .message{
        margin-bottom :15px;
      }

      .messages .message:last-child{
        margin-bottom :0;
      }

      .received, .sent{
        width :45%;
        padding :3px 10px;
        border-radius :10px;
      }
 
      .received {
        background : #ffffff;
        float: left;
      }

      .sent {
        background : #5252ff ;
        float :right;
        text-align :right;
      }

      .message p{
        margin : 5px 0;
      }

      .date{
        color: #777777;
        font-size: 12px; 
      }
      .active{
        background: #eeeeee;
      }
        
      input[type=text]{
        width :100%;
        padding :12px 20px;
        margin : 15px 0 0 0;
        display: inline-block;
        border-radius: 4px;
        box-sizing : border-box;
        outline: none;
        border : 1px solid #cccccc;
      }

      input[type=text]:focus{
        border :1px solid #aaaaaa;
      }
      }
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow" style="background-color: #D8D5DB  !important">
            
                <a class="navbar-brand col-md-3 col-lg-2 px-5" href="{{ url('/') }}">
                    <img src="/img/logo.png" width="110" height="60" alt="">
                </a>
                <button class="navbar-toggler  position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                   <!-- Left Side Of Navbar -->
                   <ul class="navbar-nav px-3">
                   @guest
                            @if (Route::has('login'))
                            @endif
                            
                            @if (Route::has('register'))
                            @endif
                        @else
                        @endguest
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav px-3  justify-content-end">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                         
                          <div class="dropdown mr-sm-2" id="nav-toggle" class="nav-item">
                              <a id="notification-clock" role="button" data-toggle="dropdown" >
                                  <span data-feather="bell"></span>
                              </a>
                              </div>
                            <li class="nav-item dropdown my-2 my-sm-0">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <b>{{ Auth::user()->name }}</b> 
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <!-- <a class="dropdown-item" href="{{ route('users.index') }}">
                                        User Management
                                    </a> -->

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        @endguest
                    </ul>
                </div>
            
        </nav>

        <main class="py-1 pb-5">
        @guest
            @if (Route::has('login'))
                @yield('content1')
            @endif
                            
            @if (Route::has('register'))
                @yield('content2')
            @endif
                        
                        
            @else
            <div class="container-fluid pb-5" style="background-color: #F4F2F3">
                <div class="row">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="background-color: #2D3142 !important">
                        <div class="position-sticky pt-3 pb-5">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/Dashboard">
                                        <span data-feather="home"></span>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/index">
                                    <span data-feather="file"></span>
                                    Orders
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/product/viewproduct">
                                    <span data-feather="shopping-cart"></span>
                                    Products
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/ViewCustomers">
                                    <span data-feather="users"></span>
                                    Customers
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/View-Task">
                                    <span data-feather="target"></span>
                                    Tasks
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/viewuser">
                                    <span data-feather="user"></span>
                                    Users
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/View-Role">
                                    <span data-feather="settings"></span>
                                    Role Management
                                    </a>
                                </li>
                                
                            </ul>

                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Other</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="calendar"></span>
              Add Reminder
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Quotations and Invoices
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="thumbs-up"></span>
              Feedbacks
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/View-Chat">
              <span data-feather="message-circle"></span>
                 Chat
            </a>
         </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 header1">@yield('header','Dashboard')</h1>
        <!-- <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div> -->
      </div>


      @yield('content')
            @endguest
        </main>
        
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      var receiver_id =' ';
      
     var my_id = "{{Auth::User()->EmpID}}";
      
      
       $(document).ready(function(){
          $('.user').click(function(){
          $('.user').removeClass('active');
          $(this).addClass('active');
          $(this).find('.pending').remove();

           receiver_id =$(this).attr('id');
           alert(receiver_id);

          
          // $.ajax({
          //   type: "get",
          //   url: "message/"+receiver_id,
          //   data:"",
          //   cache: false,
          //   success: function(data){
          //   alert(data);
          //   }
          //   });
          });
       });
    </script>
    
    

    <footer class="footer text-center pt-3 pb-3 fixed-bottom">
                © 2021 CRM by She Squad
            </footer>
    <!-- <footer >
    <p>Author: Hege Refsnes<br>
      <a href="mailto:hege@example.com">hege@example.com</a></p>
    </footer> -->
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

</body>
</html>
