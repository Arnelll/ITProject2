@extends('layouts.master')

@section('title')
    + Mechanic
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
                        First Name<input type="text" name="fn" class="form-control bg-white" maxlength="30" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                        Last Name<input type="text" name="ln" class="form-control bg-white" maxlength="20" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <div class="form-group">
                        Contact<input type="text" name="contactno" class="form-control bg-white" maxlength="11" required>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-3">
                        <div class="form-group">
                        Address<input type="text" name="address" class="form-control bg-white" required>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-2 col-sm-2" style="margin-left: 85%;">
                    <div class="form-group">
                    {!!Form::submit('Save',array('class'=>'d-inline p-2 btn btn-primary btn-lg', 'style'=>'background-color: #005CA5'))!!}<a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page" style="background-color: #005CA5;">Return</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

@endsection
    
@section('scripts')

@endsection