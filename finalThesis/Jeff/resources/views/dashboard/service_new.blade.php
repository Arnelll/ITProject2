@extends('layouts.master')

@section('title')
    + Job Order
@endsection

@section('content')

<style>
.hide {
    display: none;
}
</style>

<body>
    
    <div class="container">

        <div class="card">

            <div id="hideJO" class="hide">

                <div class="card-header">
                    <div class="card-title">
                        <h3>Job Order <a href="/new_account" class="btn btn-primary btn-md btn-round" style="float: right; margin: 0px;">+ Client</a></h3>
                        {!!Form::open(array('route'=>'service_insert','id'=>'formsave','method'=>'post'))!!}
                    </div>
                </div>

                <hr>

                <div class="row">

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <select name="client_id" class="form-control bg-white" required>
                                <option value="" selected="true" disabled="true">Select Client</option>
                                @foreach($clients as $key => $c)
                                <option value="{!!$key!!}">{!!$c!!}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <select name="mech" class="form-control bg-white" required>
                                <option value="" selected="true" disabled="true">Select Mechanic</option>
                                @foreach($mechanic as $key => $m)
                                <option value="{!!$key!!}">{!!$m!!}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <select name="vcle" class="form-control bg-white" required>
                                <option value="" selected="true" disabled="true">Select Vehicle</option>
                                @foreach($vehicle as $key => $v)
                                <option value="{!!$key!!}">{!!$v!!}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                
                <hr>
                
                <div class="form-group">
                    <label for="comment">Service Details:</label>
                    <textarea class="form-control bg-white" rows="5" id="comment" name="svc" required></textarea>
                    <hr>
                </div>

            </div>

            <div class="col-lg-12 col-sm-12">

                <h3 style="margin: 0 0 0 0;"><strong>Sales</strong></h3>
            
                <button type="button" id="show-btn" class="btn btn-primary justify-content-end" style="float: right;">Add Job Order</button>

                <table id="product-table" class="table table-bordered"><br>

                    <thead>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Discount(%)</th>
                        <th>Amount</th>
                        <th style="text-align:center"><a href="#" class="btn btn-primary addRow ">+<i class="glyphicon glyphicon-plus"></i></a></th>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <select id="productname" name="productname[]" class="form-control productname bg-white" required>
                                    <option value="" disabled="true" selected>Select Product</option>
                                    @foreach($products as $key => $p)
                                    <option value="{!!$key!!}">{!!$p!!}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td><input id="product-qty" type="text" onkeyup="this.value = this.value.replace(/[^0-9]/, '')" name="qty[]" class="form-control qty bg-white" maxlength="3" required></td>
                            <td><input id="product-price" type="text" name="price[]" class="form-control price" style="background:grey;color:white;text-align:right;" disabled></td>
                            <td><input id="product-dsct" type="text" name="dis[]" class="form-control dis bg-white" maxlength="3"></td>
                            <td><input id="product-amt" type="text" name="amount[]" class="form-control amount" readonly="true" style="background:grey;color:white;text-align:right;" disabled></td>
                            <td><a href="#" style="margin-left: 40%;" class="remove"><strong>X</strong><i class="glyphicon glyphicon-remove"></i></a></td>
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

            <div class="col-lg-13 col-sm-13">

                <div class="form-group">
                    {!!Form::submit('Save', array('class'=>'btn btn-primary', 'style'=>'float: right;'))!!}
                </div>

            </div>
            
            {!!Form::hidden('_token',csrf_token())!!}
            {!!Form::close()!!}

        </div>

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

$('#product-name').change(function() {
    $('#product-qty').val('');
    $('#product-price').val('');
    $('#product-dsct').val('');
    $('#product-amt').val('');
    var qty = 0;
    var price = 0;
    var dis = 0;
    var amount = 0;
    total(); 
});

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
                    '<select id="product-name" name="productname[]" class="form-control productname bg-white">'+
                        '<option value="0" selected="true" disabled="true">Select Product</option>'+
                        '@foreach($products as $key => $p)'+
                        '<option value="{!!$key!!}">{!!$p!!}</option>'+
                        '@endforeach'+
                    '</select>'+
                '</td>'+
                '<td><input id="product-qty" type="text" name="qty[]" class="form-control qty bg-white"></td>'+
                '<td><input id="product-price" type="text" name="price[]" class="form-control price" style="background:grey;color:white;text-align:right;" disabled></td>'+
                '<td><input id="product-dsct" type="text" name="dis[]" class="form-control dis bg-white"></td>'+
                '<td><input id="product-amt" type="text" name="amount[]" class="form-control amount" readonly="true" style="background:grey;color:white;text-align:right;" disabled></td>'+
                '<td><a href="#" style="margin-left: 40%;" class="remove"><strong>X</strong><i class="glyphicon glyphicon-remove"></i></a></td>'+
            '</tr>';
    $('tbody').append(tr);
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
        alert('You cannot remove last item');
    }else{
        $(this).parent().parent().remove();
        total();
    }
});

const showButton = document.getElementById('show-btn');
const hider = document.getElementById('hideJO');

showButton.addEventListener('click', showJO)

function showJO() {
    console.log('Started')
    showButton.classList.add('hide');
    hider.classList.remove('hide');
}

</script> 
@endsection
    
@section('scripts')

@endsection