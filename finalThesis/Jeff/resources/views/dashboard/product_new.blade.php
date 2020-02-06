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
        <h4><strong>Enter Product Details</strong></h4>
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                <input type="text" name="productname" class="form-control bg-white" placeholder="Product Name" required>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="form-group">
                <input type="text" name="qty" class="form-control bg-white" placeholder="Quantity" required>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="form-group">
                <input type="text" name="retail_price" class="form-control bg-white" placeholder="Retail Price" required>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="form-group">
                <input type="text" name="whole_price" class="form-control bg-white" placeholder="Wholesale Price" required>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="form-group">
                <input type="text" name="dis_price" class="form-control bg-white" placeholder="Distributor Price" required>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="form-group">
                    <select id="supplier_id" name="supplier_id" class="form-control productname bg-white" required>
                        <option value="" disabled="true" selected>Select Supplier</option>
                        @foreach($result as $row)
                        <option value="{{$row['supplier_id']}}">{{$row['name']}}</option>
                        @endforeach
                     </select>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="form-group">
                <input type="text" name="category" class="form-control bg-white" placeholder="Category" required>
                </div>
            </div>
            <div class="col-lg-4 col-sm-3">
                <div class="form-group">
                <input type="text" name="brand" class="form-control bg-white" placeholder="Brand" required>
                </div>
            </div>
</div>
    <div class="modal-footer">
        {!!Form::submit('Save',array('class'=>'d-inline p-2 btn btn-primary btn-lg'))!!} <a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page">Return</a>
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