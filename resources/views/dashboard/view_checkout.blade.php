@extends('layouts.master')

@section('title')
    Checkout Details
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
            {!!Form::open(array('route'=>'update_checkout','id'=>'formsave','method'=>'post'))!!}
            <div class="col-lg-12 col-sm-12">
                <table class="table table-bordered" id="preview">
                    <h4>Change Product<a href="/prod_co" class="btn btn-primary btn-sm btn-round d-inline p-2" style="margin-left:50%; background-color: #005CA5;">Checkout List</a></h4>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($result as $row)
                            <tr>
                                <td>
                                    <input value="{{$row['product_name']}}" disabled></td>
                                <td>{{$row['quantity']}}</td>
                                <td><a href="/remove_product/{{$row['product_id']}}/{{$row['productcheckout_details_id']}}" class="btn-xs fas fa-user-minus"></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {!!Form::submit('Update',array('class'=>'d-inline p-2 btn btn-primary btn-lg'))!!}<a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-secondary btn-lg" title="Return to the previous page">Return</a>
        </section>
        {!!Form::hidden('_token',csrf_token())!!}
        {!!Form::close()!!}
    </div>
</body>

<script type="text/javascript">
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
            tr.find('.price').val(data.retail_price);
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
    $("input[name='total']").val(total.formatMoney(2,',','.') + " ₱")
    $("input[name='totals']").val(total)
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