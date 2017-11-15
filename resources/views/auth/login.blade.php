@extends('layouts.auth')

@section('title')Login @endsection
@section('content')

    <div class="app-block">
        <div class="app-form">
            <div class="form-header">
                <div class="app-brand"><span class="highlight">Welcome to</span>#LouPing </div>
            </div>
            <form role="form" action="{{ url('/login') }}" method="POST">
                {{ csrf_field() }}

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session()->has('flash_notification.message'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-{{ session('flash_notification.level') }}">
                                <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>

                                {!! session('flash_notification.message') !!}
                            </div>
                        </div>
                    </div>
                @endif

                <div class="input-group"><span class="input-group-addon" id="basic-addon1">
                                    <i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" name="email" class="form-control" placeholder="Username or Email"
                           aria-describedby="basic-addon1" value="{{ old('email') }}">
                </div>
                <div class="input-group"><span class="input-group-addon" id="basic-addon2">
                                    <i class="fa fa-key" aria-hidden="true"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Password"
                           aria-describedby="basic-addon2">
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-success btn-submit" value="Sign in">
                    <br>
                    <a href="{{ url('/password/reset') }}">Forgot your password?</a>
                </div>
            </form>
        </div>
    </div>

@endsection