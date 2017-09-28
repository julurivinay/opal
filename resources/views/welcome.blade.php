@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome to opal portal</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if(Auth::guest())
                            Please <a href="{{ url('/login') }}">Login </a>to continue
                        @else

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
