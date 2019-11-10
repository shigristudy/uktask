@extends('layouts.app')

@section('content')
<div class="login-logo">
    <img src="img/login_logo.png" alt=""/>
</div>

<h2 class="form-heading">login</h2>
<div class="container log-row">
    
    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="login-wrap">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <input type="email" name="email" class="form-control" placeholder="Email" autofocus>
            
            <input type="password" name="password" class="form-control" placeholder="Password">
            <button class="btn btn-lg btn-success btn-block" type="submit">LOGIN</button>
            <div class="login-social-link">
                <a href="index.html" class="facebook">
                    Facebook
                </a>
                <a href="index.html" class="twitter">
                    Twitter
                </a>
            </div>
            <label class="checkbox-custom check-success">
                <input type="checkbox" value="remember-me" id="checkbox1"> <label for="checkbox1">Remember me</label>
                <a class="pull-right" data-toggle="modal" href="#forgotPass"> Forgot Password?</a>
            </label>

            <div class="registration">
                Don't have an account yet?
                <a class="" href="registration.html">
                    Create an account
                </a>
            </div>

        </div>

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="forgotPass" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <!-- <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix"> -->

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->

    </form>
</div>

@endsection
