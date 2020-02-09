@extends('layouts.master')

@section('title')
    Checkout
@endsection

@section('content')
<body>
        <div class="container">
        <section class="panel">
            <div class="panel panel-footer">
            <header class="panel panel-default">
                <h3> Checkout Details </h3>
            </header>
            </div>
        <div class="panel panel-footer">
        {!!Form::open(array('route'=>'checkout_insert','id'=>'formsave','method'=>'post'))!!}
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                    <select name="joborder" id="joborder" class="form-control joborder">
                        <option value="0" selected="true" disabled="true">Job Order No.</option>
                        @foreach($joborder as $row)
                        <option value="{{$row['jo_id']}}">{{$row['jo_id']}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                </div>
            </div>
           <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                </div>
            </div>
            <div class="col-lg-2 col-sm-2">
                <div class="form-group">
                {!!Form::submit('Save',array('class'=>'btn btn-primary'))!!}
                </div>
            </div>
            <div class="col-lg-12 col-sm-12">
            <table class="table table-bordered" id="joo">
                <thead>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Discount(%)</th>
                    <th>Amount</th>
                    <th style="text-align:center"><a href="#" class="addRow ">+<i class="glyphicon glyphicon-plus"></i></a></th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select name="productname[]" class="form-control productname bg-white">
                                <option value="0" selected="true" disabled="true">Select Product</option>
                                @foreach($products as $key => $p)
                                <option value="{!!$key!!}">{!!$p!!}</option>
                                @endforeach
                            </select>
                        </td>
                        <td><input type="text" name="qty[]" class="form-control qty bg-white"></td>
                        <td><input type="text" name="price[]" class="form-control price" style="background:grey;color:white;text-align:right" disabled></td>
                        <td><input type="text" name="dis[]" class="form-control dis bg-white"></td>
                        <td><input type="text" name="amount[]" class="form-control amount" readonly="true" style="background:grey;color:white;text-align:right" disabled></td>
                        <td><a href="#" class="btn btn-danger remove">X<i class="glyphicon glyphicon-remove"></i></a></td>
                    </tr>
                </tbody>
            <tfoot>
                <tr>
                    <td style="border:none"></td>
                    <td style="border:none"></td>
                    <td style="border:none"></td>
                    <td><b>Total</b></td>
                    <td style="text-align:right;"><b class="total"></b></td>
                    <td></td>
                </tr>
            </tfoot>   
        </table>
    </div>
</div>
            </div>
        </section>
    </div>
    <br>
    <br>
    <div class="col-lg-12 col-sm-12">
        <table class="table table-bordered" id="preview">
            <h3>Job Order Preview</h3>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
    {!!Form::hidden('_token',csrf_token())!!}
        {!!Form::close()!!}
</body>

<script type="text/javascript">
$('.joborder').change(function(){
  if($(this).val() != '')
    {
        var tr = $(this).parent().parent();
        var value = $(this).val();
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url:"{{ route('joborder.fetch') }}",
            method:"POST",
            data:{value:value, _token:_token},
            success:function(result)
            {
                /*$("input[name='jo']").val('no.'+result[0].jo_id);
                $("input[name='jo_pn']").val(result[0].product_name);
                $("input[name='jo_qty']").val(result[0].quantity);
                var tr='<tr>'+
                                '<td><input type="text" name="jo_pn" class="form-control jo_pn" value="result[i].product_name" readonly ></td>'+
                                '<td><input type="text" name="jo_qty" class="form-control jo_qty" value="result[i].quantity"></td>'+
                            '</tr>';
                    $('#preview').find('tbody').append(tr);*/
                
                for (var i = 0; i < result.length; i++) {
                    var tr='<tr>'+
                                '<td><input type="text" name="jo_pn" class="form-control jo_pn" value="'+result[i].product_name+'" readonly ></td>'+
                                '<td><input type="text" name="jo_qty" class="form-control jo_qty" value="'+result[i].quantity+'" readonly></td>'+
                            '</tr>';
                    $('#preview').find('tbody').append(tr);
                }
            }
        })
    }
});

$('tbody').delegate('.productname', 'change', function(){
    var tr = $(this).parent().parent();
    var id = tr.find('.productname').val();
    var dataId = {'id':id};
    $.ajax({
        type     : 'GET',
        url      : '{!!URL::route('findPrice')!!}',
        dataType : 'json',
        data     : dataId,
        success:function(data){
            tr.find('.price').val(data.price);
        }
    });
});
$('tbody').delegate('.productname', 'change', function(){
    var tr = $(this).parent().parent();
    tr.find('.qty').focus();
})
$('tbody').delegate('.qty,.price,.dis','keyup',function(){
    var tr = $(this).parent().parent();
    var qty = tr.find('.qty').val();
    var price = tr.find('.price').val();
    var dis = tr.find('.dis').val();
    var amount = (qty * price) - (qty * price * dis)/100;
    tr.find('.amount').val(amount);
    total(); 
});
$('.addRow').on('click',function(){
    addRow();
});

findRowNumOnly('.qty');
findRowNum('.price');
findRowNumOnly('.dis');
numberOnly('.phone');

function total()
{
    var total = 0;
    $('.amount').each(function(i,e){
        var amount = $(this).val()-0;
        total += amount;
    })
    $('.total').html(total.formatMoney(2,',','.') + " ₱");
};
//-------------------------------Format Number-----------------------------------
Number.prototype.formatMoney = function(decPlaces, thouSeparator, decSeparator) {
    var n = this,
        decPlaces = isNaN(decPlaces = Math.abs(decPlaces)) ? 2 : decPlaces,
        decSeparator = decSeparator == undefined ? "." : decSeparator,
        thouSeparator  = thouSeparator == undefined ? "," : thouSeparator,
        sign = n < 0 ? "-" : "",
        i = parseInt(n = Math.abs(+n || 0).toFixed(decPlaces)) + "",
        j = (j = i.length) > 3 ? j % 3 : 0;
    return sign + (j ? i.substr(0, j) + thouSeparator : "")
    + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thouSeparator)
    + (decPlaces ? decSeparator + Math.abs(n - i).toFixed(decPlaces).slice(2) : "");
};
//-------------------------------------------------------------------------------
function addRow()
{
    var tr='<tr>'+
                '<td>'+
                '<select name="productname[]" class="form-control productname">'+
                '<option value="0" selected="true" disabled="true">Select Product</option>'+
                '@foreach($products as $key => $p)'+
                '<option value="{!!$key!!}">{!!$p!!}</option>'+
                '@endforeach'+
                '</select>'+
                '</td>'+
                '<td><input type="text" name="qty[]" class="form-control qty"></td>'+
                '<td><input type="text" name="price[]" class="form-control price" style="background:grey;color:white"></td>'+
                '<td><input type="text" name="dis[]" class="form-control dis"></td>'+
                '<td><input type="text" name="amount[]" class="form-control amount" style="background:grey;color:white"></td>'+
                '<td><a href="#" class="btn btn-danger remove">X<i class="glyphicon glyphicon-remove"></i></a></td>'+
                '</tr>';
                $('#joo').find('tbody').append(tr);
};

function findRowNum(input){
    $('tbody').delegate(input, 'keydown', function(){
        var tr = $(this).parent().parent();
        number(tr.find(input));
    });
}

function findRowNumOnly(input){
    $('tbody').delegate(input, 'keydown', function(){
        var tr = $(this).parent().parent();
        numberOnly(tr.find(input));
    })
}

function number(input){
    $(input).keypress(function (evt){
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode( key );
        var regex = /[-\d\.]/;
        var objRegex = /^-?\d*[\.]?\d*$/;
        var val = $(evt.target).val();
        if(!regex.test(key) || !objRegex.test(val+key) ||
            !theEvent.keyCode == 46 || !theEvent.keyCode == 8) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            };
    });
};

function numberOnly(input){
    $(input).keypress (function (evt){
        var e = event || evt;
        var charCode = e.which || e.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
        return true;
    });
}

$('.remove').on('click', function(){
    var l = $('tbody tr').length;
    if(l=1)
    {
        alert('You cannot remove last item')
    }else{
        $(this).parent().parent().remove();
        total();
    }
});
</script> 
@endsection
    
@section('scripts')

@endsection