@extends('layouts.app')

@section('addons')
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
@endsection

@section('content')
<div class="row register-form">
    <div class="col-md-8 col-md-offset-2">
        <form class="form-horizontal custom-form">
            <h1>Registration Form</h1>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="name-input-field">Name </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input id="name-input-field" class="form-control" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="email-input-field">Email </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input id="email-input-field" class="form-control" type="email">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="username-input-field">Username </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input id="username-input-field" class="form-control" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="pawssword-input-field">Password </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input id="pawssword-input-field" class="form-control" type="password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="confirm-pawssword-input-field">Confirm Password </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input id="confirm-pawssword-input-field" class="form-control" type="password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="dropdown-input-field">Register As </label>
                </div>
                <div class="col-sm-4 input-column">
                    <div class="dropdown">
                        <button id="dropdown-input-field" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Client type <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">Owner</a></li>
                            <li role="presentation"><a href="#">Customer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <button class="btn btn-default submit-button" type="button">Sign me up!</button>
        </form>
    </div>
</div>
<div></div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
@endsection