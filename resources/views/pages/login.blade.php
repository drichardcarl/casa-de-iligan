@extends('layouts.app')

@section('title')
	<title>Casa de Iligan - We find Homes | Customer Login</title>
    <script>
        $(document).ready(function () {
            // Handler for .ready() called.
            $('html, body').animate({
                scrollTop: $('#what').offset().top
            }, 'slow');
        });
    </script>
@endsection

@section('content')
<!-- header -->

<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li>
                <a href="/">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a>
            </li>
            <li class="active">Login</li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- login -->
<div class="login">
    <div class="container" id="what">
        <h3 class="animated wow zoomIn" data-wow-delay=".5s">Customer Login</h3>
        <p class="est animated wow zoomIn" data-wow-delay=".5s">
            Welcome our valued customer!
        </p>
        <p class="est animated wow zoomIn" data-wow-delay=".5s">
            Please login so that you can use the privileges of a customer.
        </p>
        <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{$error}}
                    </p><br>
                @endforeach
            @endif
            <form action="{{route('pages.login')}}" method="POST">
                {{csrf_field()}}
                <input type="email" placeholder="Email Address" required=" " value="{{old('email')}}" name="email">
                <input type="password" placeholder="Password" required=" " name="password">
                <div class="forgot">
                    <a href="#">Forgot Password?</a>
                </div>
                <input type="submit" value="Login">
            </form>
            <br>
        </div>
        <h4 class="animated wow slideInUp" data-wow-delay=".5s">For New People</h4>
        <p class="animated wow slideInUp" data-wow-delay=".5s">
            <a href="/register">Register Here</a> (Or) go back to
            <a href="/">Home
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
            </a>
        </p>
    </div>
</div>
<!-- //login -->
@endsection