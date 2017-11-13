@extends('layouts.app')

@section('content')

<br><br><br><br>   
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-uppercase panel-title">CASA de Iligan</h1></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active"><img src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image"></div>
                        <div class="item"><img src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image"></div>
                        <div class="item"><img src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image"></div>
                    </div>
                    <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-1" role="button"
                        data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                    </div>
                
                </div>
                    <br><br><br><div class="col-md-4">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Login:</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="name-input-field">Username:</label>
                                </div>
                                <div class="col-sm-6 input-column">
                                    <input id="name-input-field" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="password-input-field">Password:</label>
                                </div>
                                <div class="col-sm-6 input-column">
                                    <input id="password-input-field" class="form-control" type="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><br><center><button class="btn btn-default submit-button" type="button">Sign Up!</button></center></div>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>

            <div class="row">
                
                <div class="col-md-3">
                    <br><br><br><br><div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><center>Transient</h3>
                        </div>
                        <div class="panel-body">	
                            <p>
                                All about Transient.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <br><br><br><br><div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><center>Dorm</h3>
                        </div>
                        <div class="panel-body">	
                            <p>
                                All about Dorm.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <br><br><br><br><div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><center>Apartment</h3>
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
                            <h3 class="panel-title"><center>About</h3>
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
