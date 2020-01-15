@extends('layouts.master')

@section('title')
    + Edit Account
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
                <h3> Account Details </h3>
            </header>
            </div>
        <div class="panel panel-footer">
        {!!Form::open(array('route'=>'account_update','id'=>'formupdate','method'=>'post'))!!}
        <div class="row">
        <input type="hidden" value="{{$result->client_id}}" id="clientid" name="clientid">
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                <input type="text" id="fn" name="fn" class="form-control" value="{{$result->firstname}}">
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                <input type="text" id="ln" name="ln" class="form-control" value="{{$result->lastname}}">
                </div>
            </div>
            <!--
            <div class="col-lg-2 col-sm-2">
                <div class="form-group">
                <select name="sex" class="form-control">
                    <option value="0" selected="true" disabled="true">Gender</option>
                    <option value="1">Male</option>  
                    <option value="2">Female</option>
                    </select>
                </div>
            </div> -->
            <div class="col-lg-2 col-sm-6">
                <div class="form-group">
                <input type="text" id="age" name="age" class="form-control" value="{{$result->age}}">
                </div>
            </div>
            <div class="col-lg-3 col-sm-4">
                <div class="form-group">
                <input type="text" id="email" name="email" class="form-control" value="{{$result->email}}">
                </div>
            </div>
            <div class="col-lg-2 col-sm-3">
                <div class="form-group">
                <input type="text" id="contactnum" name="contactnum" class="form-control" value="{{$result->contact_no}}">
                </div>
            </div>
            <!-- <div class="col-lg-3 col-sm-3">
                <div class="form-group">
                <input type="text" name="address" class="form-control" placeholder="Address">
                </div>
            </div> -->
            <div class="col-lg-2 col-sm-2">
                <div class="form-group">
                {!!Form::submit('Update',array('class'=>'btn btn-primary'))!!}
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