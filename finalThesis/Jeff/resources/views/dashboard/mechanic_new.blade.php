@extends('layouts.master')

@section('title')
    + Mechanic
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
                    <h3> Mechanic Details </h3>
                </header>
            </div>
                <div class="panel panel-footer">
                    {!!Form::open(array('route'=>'mechanic_insert','id'=>'formsave','method'=>'post'))!!}
                    <h4><strong>Enter Mechanic Details</strong></h4>
                    <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                        <input type="text" name="fn" class="form-control" placeholder="First Name" maxlength="30">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                        <input type="text" name="ln" class="form-control" placeholder="Last Name" maxlength="20">
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-3">
                        <div class="form-group">
                        <input type="text" name="contactno" class="form-control" placeholder="Contact" maxlength="11">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <div class="form-group">
                        <input type="text" name="address" class="form-control" placeholder="Address">
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-2 col-sm-2">
                    <div class="form-group">
                    {!!Form::submit('Save',array('class'=>'btn btn-primary'))!!}
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

@endsection
    
@section('scripts')

@endsection