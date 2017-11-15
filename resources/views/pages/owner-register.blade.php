@extends('layouts.app')

@section('title')
	<title>Casa de Iligan - We find Homes | Owner Registration</title>
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
<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li>
                <a href="index.html">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a>
            </li>
            <li class="active">Register Owner</li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- register -->
<div class="register">
    <div class="container" id="what">
        <h3 class="animated wow zoomIn" data-wow-delay=".5s">Registration</h3>
        <p class="est animated wow zoomIn" data-wow-delay=".5s">
            Please register as one of our owners to enjoy the previleges of an owner!
        </p>
        <div class="login-form-grids">
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{$error}}
                    </p>
                @endforeach
            @endif
            <form class="animated wow slideInUp" data-wow-delay=".5s" action="{{route('pages.register')}}" method="POST">
                {{csrf_field()}}
                <h5 class="animated wow slideInUp" data-wow-delay=".5s">Personal information</h5>
                <input type="text" placeholder="Full Name" required=" " value="{{old('name')}}" name="name">
                <input type="text" placeholder="Address" required=" " value="{{old('address')}}" name="address">
                <input type="text" placeholder="Contact Number" required=" " value="{{old('contact_number')}}" name="contact_number">

                <h6 class="animated wow slideInUp" data-wow-delay=".5s">Login information</h6>
                <input type="email" placeholder="Email Address" required=" " value="{{old('email')}}" name="email">
                <input type="password" placeholder="Password" required=" " name="password">
                <input type="password" placeholder="Password Confirmation" required=" " name="password_confirmation">

                <input type="hidden" value="owner" name="user_type">
                <input type="submit" value="Register">
            </form>
        </div>
        <div class="register-home animated wow slideInUp" data-wow-delay=".5s">
            <a href="/">Home</a>
        </div>
    </div>
</div>
<!-- //register -->
@endsection