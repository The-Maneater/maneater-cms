@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column is-8 is-offset-2">
            <article class="card is-rounded">
                <header class="card-header">
                    <p class="card-header-title">
                        Login
                    </p>
                </header>
                <div class="card-content">
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="field">
                            <p class="control has-icon has-icon-left">
                                <input class="input {{ $errors->has('username') ? "is-danger" : "" }}"
                                       placeholder="Username" value="{{ old('username') }}" name="username" autofocus>
                                <span class="icon is-left">
                                  <i class="fa fa-envelope"></i>
                                </span>
                            </p>
                            @if($errors->has('username'))
                                <p class="help is-danger"><strong>{{ $errors->first('username') }}</strong></p>
                            @endif
                        </div>
                        <div class="field">
                            <p class="control has-icon has-icon-left">
                                <input class="input {{ $errors->has('password') ? "is-danger" : ""}}" type="password"
                                       placeholder="Password" name="password">
                                <span class="icon is-left">
                                  <i class="fa fa-lock"></i>
                                </span>
                            </p>
                            @if($errors->has('password'))
                                <p class="help is-danger"><strong>{{ $errors->first('password') }}</strong></p>
                            @endif
                        </div>
                        <div class="field">
                            <p class="control">
                                <b-checkbox name="remember">Remember Me</b-checkbox>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control">
                                <button class="button is-info is-medium is-fullwidth" type="submit">
                                    Login
                                </button>
                                <a class="button is-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </p>
                        </div>
                    </form>
                </div>

        </div>
    </div>
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Login</div>--}}
                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">--}}
                            {{--<label for="username" class="col-md-4 control-label">Username</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" autofocus>--}}

                                {{--@if ($errors->has('username'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('username') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password">--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="field">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember"> Remember Me--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="field">--}}
                            {{--<div class="col-md-8 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Login--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ url('/password/reset') }}">--}}
                                    {{--Forgot Your Password?--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>
@endsection
