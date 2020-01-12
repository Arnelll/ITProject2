@extends('layouts.master')

@section('title')
    + Product
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
        {!!Form::open(array('route'=>'product_insert','id'=>'formsave','method'=>'post'))!!}
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                <input type="text" name="productname" class="form-control" placeholder="Product Name">
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="form-group">
                <input type="text" name="qty" class="form-control" placeholder="Quantity">
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="form-group">
                <input type="text" name="price" class="form-control" placeholder="Price">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="form-group">
                <input type="text" name="supplier" class="form-control" placeholder="Supplier">
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="form-group">
                <input type="text" name="category" class="form-control" placeholder="Category">
                </div>
            </div>
            <div class="col-lg-4 col-sm-3">
                <div class="form-group">
                <input type="text" name="brand" class="form-control" placeholder="Brand">
                </div>
            </div>
            <div class="col-lg-4 col-sm-3">
                <div class="form-group">
                <input type="text" name="provider" class="form-control" placeholder="Provider">
                </div>
            </div>
            
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!!Form::submit('Save',array('class'=>'btn btn-primary'))!!}
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