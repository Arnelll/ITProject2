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
        {!!Form::open(array('route'=>'product_add','id'=>'formsave','method'=>'post'))!!}
        <h4><strong>Enter Delivery Details</strong></h4><a href="#" class="btn btn-primary addRow" style="background-color: #005CA5;">+<i class="glyphicon glyphicon-plus"></i></a>
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="form-group">
                Product<select id="product" name="product[]" class="form-control productname bg-white" required>
                        <option value="" disabled="true" selected>Select Product</option>
                        @foreach($result as $row)
                        <option value="{{$row['product_id']}}">{{$row['product_name']}}</option>
                        @endforeach
                     </select>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="form-group">
                    Supplier<select id="supplier" name="supplier[]" class="form-control productname bg-white" required>
                        <option value="" disabled="true" selected>Select Supplier</option>
                        @foreach($supplier as $row)
                        <option value="{{$row['supplier_id']}}">{{$row['name']}}</option>
                        @endforeach
                     </select>
                </div>
            </div>
            <div class="col-lg-2 col-sm-2">
                <div class="form-group">
                Quantity<input type="text" name="quantity[]" class="form-control bg-white" required>
                </div>
            </div>
        </div>
        <div class="row" id="new">
            
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
<script>

$('.addRow').on('click',function(){
    addRow();
});

function addRow()
{
    var tr='<br><div class="row">'+
                '<div class="col-lg-5 col-sm-5">'+
                '<div class="form-group">'+
                'Product<select id="product" name="product[]" class="form-control productname bg-white" required>'+
                        '<option value="" disabled="true" selected>Select Product</option>'+
                        '@foreach($result as $row)'+
                        '<option value="{{$row['product_id']}}">{{$row['product_name']}}</option>'+
                        '@endforeach'+
                     '</select>'+
                '</div>'+
            '</div>'+
            '<div class="col-lg-4 col-sm-4">'+
                '<div class="form-group">'+
                    'Supplier<select id="supplier" name="supplier[]" class="form-control productname bg-white" required>'+
                        '<option value="" disabled="true" selected>Select Supplier</option>'+
                        '@foreach($supplier as $row)'+
                        '<option value="{{$row['supplier_id']}}">{{$row['name']}}</option>'+
                        '@endforeach'+
                     '</select>'+
                '</div>'+
            '</div>'+
            '<div class="col-lg-2 col-sm-2">'+
                '<div class="form-group">'+
                'Quantity<input type="text" name="quantity[]" class="form-control bg-white" required>'+
                '</div>'+
            '</div></div>';
                $('#new').append(tr);
};
</script>
@endsection
    
@section('scripts')

@endsection