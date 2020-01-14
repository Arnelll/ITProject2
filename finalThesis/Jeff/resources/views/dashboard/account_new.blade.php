@extends('layouts.master')

@section('title')
    + Account
@endsection

@section('content')
<body>
        <div class="container">
        <section class="panel">
            <div class="panel panel-footer">
            <header class="panel panel-default">
                <h3> Job Order Details </h3>
            </header>
            </div>
        <div class="panel panel-footer">
        {!!Form::open(array('route'=>'account_insert','id'=>'formsave','method'=>'post'))!!}
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                <input type="text" name="fn" class="form-control" placeholder="First Name">
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                <input type="text" name="ln" class="form-control" placeholder="Last Name">
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
                <input type="text" name="age" class="form-control" placeholder="Age">
                </div>
            </div>
            <div class="col-lg-3 col-sm-4">
                <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-lg-2 col-sm-3">
                <div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="Phone">
                </div>
            </div>
            <!-- <div class="col-lg-3 col-sm-3">
                <div class="form-group">
                <input type="text" name="address" class="form-control" placeholder="Address">
                </div>
            </div> -->
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