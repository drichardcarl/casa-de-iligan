@extends('layouts.app') @section('content')

<div class="container">
    @if(session('Status'))
        <p>{{session('Status')}}</p>
    @endif
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1 class="text-uppercase panel-title">{{config('app.name', 'Casa de Iligan')}}</h1>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-8">
					<div class="carousel slide" data-ride="carousel" id="carousel-1">
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image">
							</div>
							<div class="item">
								<img src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image">
							</div>
							<div class="item">
								<img src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image">
							</div>
						</div>
						<div>
							<a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev">
								<i class="glyphicon glyphicon-chevron-left"></i>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#carousel-1" role="button" data-slide="next">
								<i class="glyphicon glyphicon-chevron-right"></i>
								<span class="sr-only">Next</span>
							</a>
						</div>
						<ol class="carousel-indicators">
							<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-1" data-slide-to="1"></li>
							<li data-target="#carousel-1" data-slide-to="2"></li>
						</ol>
					</div>

				</div>
				<div class="col-md-4">
					<form class="form-horizontal" action="{{route('pages.index')}}" method="POST">
						<fieldset>
							<legend>Login</legend>
							<div class="form-group">
								<label for="inputEmail" class="col-lg-3 control-label">Email</label>
								<div class="col-lg-8">
									<input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword" class="col-lg-3 control-label">Password</label>
								<div class="col-lg-8">
									<input type="password" class="form-control" id="inputPassword" placeholder="Password">
								</div>
							</div>
							<div class="form-group">
								<label for="select" class="col-lg-3 control-label">Login as</label>
								<div class="col-lg-8">
									<select class="form-control" id="select">
										<option>User</option>
										<option>Owner</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-10 col-lg-offset-3">
									<button type="submit" class="btn btn-default">Sign in</button>
									<a href="/register" class="btn btn-primary">Register</a>
								</div>
								<div class="checkbox col-lg-10 col-lg-offset-3">
									<label>
										<input type="checkbox"> Remember me
									</label>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">

	<div class="col-md-3">
		<br>
		<br>
		<br>
		<br>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<center>Transient</h3>
			</div>
			<div class="panel-body">
				<p>
					All about Transient.
				</p>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<br>
		<br>
		<br>
		<br>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<center>Dorm</h3>
			</div>
			<div class="panel-body">
				<p>
					All about Dorm.
				</p>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<br>
		<br>
		<br>
		<br>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<center>Apartment</h3>
			</div>
			<div class="panel-body">
				<p>
					All about Apartment.
				</p>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<center>About</h3>
			</div>
			<div class="panel-body">
				<p>
					About.
				</p>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
@endsection