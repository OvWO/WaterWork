@extends('layouts.app')

@section('content')
    <!--Mask-->
    <div class=" view hm-black-light ">
        <div class="full-bg-img flex-center">
            @if(auth()->check())

            {{-- go down button --}}
            @else

            <ul class="animated fadeInUp">
                <li>
                    <h1 class="h1-responsive font-bold">WaterWork</h1></li>
                <li> <p>Organize your tasks with this todolist app</p>
                </li>
                <li>
                    <a target="_blank" href="{{ route('login') }}" class="btn btn-primary btn-lg" rel="nofollow">Log In</a>
                    <a target="_blank" href="{{ route('register') }}" class="btn btn-default btn-lg" rel="nofollow">Sign Up</a>
                </li>
            </ul>
            @endif
        </div>
    </div>

    <!--/.Mask-->
@endsection
{{-- @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}

