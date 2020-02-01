@extends('layouts.master')

@section('title')
    + Vehicle
    <p>
	<a href="javascript:history.go(-1)" title="Return to the previous page">&laquo; Go back</a>
    </p>
@endsection

@section('content')
<body>
        <div class="container">
        <section class="panel">
            <div class="panel panel-footer">
            <header class="panel panel-default">
                <h3> Vehicle Details </h3>
            </header>
            </div>
        <div class="panel panel-footer">
        {!!Form::open(array('route'=>'vehicle_insert','id'=>'formsave','method'=>'post'))!!}
        <h4><strong>Enter Vehicle Details</strong></h4>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="form-group">
                <select name="client_id" class="form-control">
                        <option value="0" selected="true" disabled="true">Select Client</option>
                        @foreach($clients as $key => $c)
                        <option value="{!!$key!!}">{!!$c!!}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="form-group">
                <input type="text" name="plateno" class="form-control" placeholder="Plate No:">
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="form-group">
                <input type="text" name="type" class="form-control" placeholder="Type">
                </div>
            </div>
            <div class="col-lg-4 col-sm-3">
                <div class="form-group">
                <input type="text" name="model" class="form-control" placeholder="Model">
                </div>
            </div>
            <div class="col-lg-2 col-sm-3">
                <div class="form-group">
                <input type="text" name="color" class="form-control" placeholder="Color">
                </div>
            </div>
            <div class="col-lg-6 col-sm-3">
                <div class="form-group">
                <input type="text" name="desc" class="form-control" placeholder="Description">
                </div>
            </div>
            <div class="col-lg-2 col-sm-2">
                <div class="form-group">
                {!!Form::submit('Save',array('class'=>'btn btn-primary'))!!}
                </div>
            </div>
</div>
        {!!Form::hidden('_token',csrf_token())!!}
        {!!Form::close()!!}
            </div>
        </section>
    </div>
</body>
@endsection
    
@section('scripts')

@endsection