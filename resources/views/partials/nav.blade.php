

    <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="{{  route('home') }}">WaterWork</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{  route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        
{{--                         <li class="nav-item btn-group">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects 
                            </a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> --}}
                    </ul>
                    {{-- <form class="form-inline">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </form> --}}

                    <ul class="navbar-nav mr-auto mr-sm-2">
                        @if(auth()->check())
                            <li class="nav-item ">
                                <a href="" class="nav-link">
                                    {{ auth()->user()->name }}
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('logout') }}" class="button is-danger nav-link" >
                                    Logout
                                </a>
                            </li>
                        @else
                            <li class="nav-item ">
                                <a href="{{ route('login') }}" class="nav-link">Log in</a>
                            </li>
                            <li class="nav-item ">
                                <a href="#register" data-toggle="modal" 
                                    class="nav-link">Sign Up</a> 
                            </li>

                            
                        @endif
                    </ul> 
                </div>
            </div>

        </nav>

    <!--/.Navbar-->
            <!--Modal: Register Form-->
<div class="container">
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">
{{-- check the matching tags --}}
            <!--Header-->
            <div class="modal-header light-blue darken-3 white-text">
                <h4 class="title"><i class="fa fa-user-plus"></i> Register</h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close" style="position: top;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <!--Body-->
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Name</label>

                <div class="md-form form-sm">
                    <i class="fa fa-envelope prefix"></i>

                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus {{-- placeholder="name" --}}>
                    <label for="name">Your name</label>


                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

                <div class="md-form form-sm">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" id="form33" class="form-control">
                    <label for="form33">Your password</label>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" id="form34" class="form-control">
                    <label for="form34">Repeat password</label>
                </div>

                <div class="text-center mt-2">
                    <button class="btn btn-info">Sign up <i class="fa fa-sign-in ml-1"></i></button>
                </div>



            </div>
            <!--Footer-->
            <div class="modal-footer">
                <div class="options text-center text-md-right mt-1">
                    <p>Already have an account? <a href="#">Log In</a></p>
                </div>
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
        </form>
        </div>
        <!--/.Content-->
    </div>
</div>
</div>
</div>
{{-- 



            @if (Route::has('login'))

            @endif
            @guest
             @else
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
 --}}

 {{-- <div class="hero-head">
    <header class="nav">
        <div class="container">
            <div class="nav-left">
                <a class="nav-item">
                    <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma logo">
                </a>

                <a href="/posts/create" class="nav-item">
                    New Post
                </a>

                <a class="nav-item">
                    Press
                </a>

                <a class="nav-item">
                    New Hires
                </a>

                <a class="nav-item">
                    About
                </a>
            </div>

            <div class="nav-right nav-menu">

                @if(auth()->check())

                    <a href="" class="nav-item">
                        {{ auth()->user()->name }}
                    </a>

                    <span class="nav-item">
                        <a href="/logout" class="button is-danger">
                            Logout
                        </a>
                    </span>
                @else
                  
                  <span class="nav-item">
                      <a href="/login" class="button is-info">
                          Login
                      </a>
                  </span>

                @endif
            </div>
        </div>
    </header>
</div>


<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
 --}}

{{-- ///////////////////////////////////////////////////////////////////////////////// --}}
{{--  <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}
{{-- /////////////////////////////////////////////////////////////////////////////// --}}

