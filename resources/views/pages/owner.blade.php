@extends('layouts.app')

@section('content')

<div class="row register-form ">
    <div class="col-md-8 col-md-offset-2">
        <form class="form-horizontal custom-form">
            <div class="form-group">                
                    <h1>Set up my house:</h1>     
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="dropdown-input-field">Type of House </label>
                </div>
                <div class="col-sm-4 input-column">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Choose house type <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">Apartment</a></li>
                            <li role="presentation"><a href="#">Transient</a></li>
                            <li role="presentation"><a href="#">Dorm</a></li>
                        </ul>
                    </div>
                </div>
            </div>
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
                    <label class="control-label" for="address-input-field">Address</label>
                </div>
                <div class="col-sm-6 input-column">
                    <input id="address-input-field" class="form-control" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="rates-input-field">Rates </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input id="rates-input-field" class="form-control" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="ammenities-input-field">Ammenities</label>
                </div>
                <div class="col-sm-6 input-column">
                    <input id="ammenities-input-field" class="form-control" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="repeat-pawssword-input-field">Description</label>
                </div>
                <div class="col-sm-6 input-column">
                    <input id="repeat-pawssword-input-field" class="form-control" type="text">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-4 label-column">
                    <label class="control-label" for="picture-input-field">Picture of Building </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input id="picture-input-field" class="form-control" type="File">
                </div>
            </div>
            
            
            <button class="btn btn-default submit-button" type="button">Submit Form</button>
        </form>
    </div>
</div>
<div></div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
@endsection