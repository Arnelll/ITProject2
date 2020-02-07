@extends('layouts.master')

@section('title')
    + Edit Product
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
                <h3> Product Details </h3>
            </header>
            </div>
        <div class="panel panel-footer">
        {!!Form::open(array('route'=>'product_update','id'=>'formupdate','method'=>'post'))!!}
        <div class="row">
        <input type="hidden" value="{{$result->product_id}}" id="productid" name="productid">
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                Product Name<input type="text" id="productname" name="productname" class="form-control" value="{{$result->product_name}}">
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="form-group">
                Retail Price<input type="text" id="price" name="price" class="form-control" value="{{$result->retail_price}}">
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="form-group">
                Wholesale Price<input type="text" id="price" name="price" class="form-control" value="{{$result->wholesale_price}}">
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="form-group">
                Distributor Price<input type="text" id="price" name="price" class="form-control" value="{{$result->distributor_price}}">
                </div>
            </div>
            <div class="col-lg-2 col-sm-2" style="margin-left:85%;">
                <div class="form-group">
                {!!Form::submit('Update',array('class'=>'d-inline p-2 btn btn-primary btn-lg'))!!}<a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page">Return</a>
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