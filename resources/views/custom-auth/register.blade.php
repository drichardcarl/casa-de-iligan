@extends('layouts.app')
@section('content')
<div class="col-lg-offset-3 col-lg-6">
	@if (count($errors) > 0)
		@foreach ($errors->all() as $error)
			<p class="alert alert-danger">{{$error}}</p>
		@endforeach
	@endif

	<form class="form-horizontal" action="{{route('custom-auth.register')}}" method="POST">
	{{csrf_field()}}
		<fieldset>
			<legend>Registration Form</legend>
			<div class="form-group">
				<label for="inputEmail" class="col-lg-3 control-label">Name</label>
				<div class="col-lg-6">
					<input type="text" class="form-control" id="inputName" value="{{old('name')}}" name="name" placeholder="Name">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail" class="col-lg-3 control-label">Email</label>
				<div class="col-lg-6">
					<input type="text" class="form-control" id="inputEmail" value="{{old('email')}}" name="email" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="col-lg-3 control-label">Password</label>
				<div class="col-lg-6">
					<input type="password" class="form-control" id="inputPassword" value="{{old('password')}}" name="password" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="col-lg-3 control-label">Confirm Password</label>
				<div class="col-lg-6">
					<input type="password" class="form-control" id="inputPassword" value="{{old('confirmation_password')}}" name="password_confirmation" placeholder="Confirm Password">
				</div>
			</div>
			<div class="form-group">
				<label for="select" class="col-lg-3 control-label">Register as</label>
				<div class="col-lg-6">
					<select class="form-control" id="select" name="user_type">
						<option>User</option>
						<option>Owner</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-10">
					<button type="submit" class="btn btn-primary btn-block">Sign me up!</button>
				</div>
			</div>
		</fieldset>
	</form>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
@endsection