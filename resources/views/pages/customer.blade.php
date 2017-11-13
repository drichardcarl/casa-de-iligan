@extends('layouts.app')
@section('content')
<br><br><br><br>   
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-uppercase panel-title">CASA de Iligan</h1></div>
        <div class="panel-body">

        <div class="row">
        <br><br><div class="row register-form">
            <div class="col-md-3 col-md-offset-1"> 
            <form class="form-horizontal custom-form">
            <div class="form-group">
                <div class="col-md-4 label-column">
                    <label class="control-label" for="dropdown-input-field">Sort by: </label>
                </div>
                <div class="col-md-4 input-column">
                    <div class="dropdown">
                        <button id="dropdown-input-field" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Relevance: <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">Price: High to Low</a></li>
                            <li role="presentation"><a href="#">Price: Low to High</a></li>
                            <li role="presentation"><a href="#">Rating: High to Low</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
        </div>
        </div>


        </div>


        <br><br><br><div class="panel panel-default">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Transient</h3></center>
                </div>
                <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
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
            </div>
            </div>
            </div>

            <br><br><br><br><br><div class="panel panel-default">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Dorm</h3></center>
                </div>
                <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel slide" data-ride="carousel" id="carousel-2">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active"><img src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image"></div>
                        <div class="item"><img src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image"></div>
                        <div class="item"><img src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image"></div>
                    </div>
                    <div><a class="left carousel-control" href="#carousel-2" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-2" role="button"
                        data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-2" data-slide-to="1"></li>
                        <li data-target="#carousel-2" data-slide-to="2"></li>
                    </ol>
                    </div>
                </div>
            </div>
            </div>
            </div>

            <br><br><br><br><br><div class="panel panel-default">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Apartment</h3></center>
                </div>
                <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active"><img src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image"></div>
                        <div class="item"><img src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image"></div>
                        <div class="item"><img src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image"></div>
                    </div>
                    <div><a class="left carousel-control" href="#carousel-3" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-3" role="button"
                        data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-3" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-3" data-slide-to="1"></li>
                        <li data-target="#carousel-3" data-slide-to="2"></li>
                    </ol>
                    </div> 
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