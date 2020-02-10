@extends('layouts.master')

@section('title')
    + Delivery
	
@endsection


@section('content')

<body>

        <div class="container">
        <section class="panel">
        <div class="panel panel-footer">
            <header class="panel panel-default">
                <h3> Deliver Details </h3>
            </header>
            </div>
        <div class="panel panel-footer">
        {!!Form::open(array('route'=>'product_insert','id'=>'formsave','method'=>'post'))!!}
        <h4><strong>Enter Delivery Details</strong></h4>
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
             Supplier<select id="supplier_id" name="supplier_id" class="form-control productname bg-white" required>
                        <option value="" disabled="true" selected>Select Supplier</option>
                        <option value="">Arnel & Friends</option>
                     </select>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="form-group">
                Date<input type="text" name="qty" class="form-control bg-white" maxlength="" required>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="form-group">
                Category<input type="text" name="category" class="form-control bg-white" required>
                </div>
            </div>
            <div class="col-lg-4 col-sm-3">
                <div class="form-group">
                Brand<input type="text" name="brand" class="form-control bg-white" required>
                </div>
            </div>
</div>
    <div class="modal-footer">
        {!!Form::submit('Save',array('class'=>'d-inline p-2 btn btn-primary btn-lg', 'style'=>'background-color: #005CA5'))!!} <a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page" style="background-color: #005CA5;">Return</a>
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