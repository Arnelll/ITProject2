@extends('layouts.master')

@section('title')
        Transaction details 
@endsection

@section('content')

<div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card-body">
        <div class="card">
        <div class="card-user">
              </div>
        </div>
       
      </div>
    </div>
  </div>
        <div class="row justify-content-center">
            <div class="col-md-9">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Change Product</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    @forelse($products as $row)
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Product</label>
                        <input type="text" class="form-control" disabled="" placeholder="product_name" value="{{$row['product_name']}}">
                      </div>
                    </div>
                    <div class="col-md-2 px-1">
                      <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" disabled="" placeholder="price" style="text-align:right;" value="{{$row['price']}}">
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>Quantity Bought</label>
                        <input type="email" class="form-control" disabled="" placeholder="color" value="{{$row['quantity']}}">
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>Total</label>
                        @if($row['discount']==0 || $row['discount'] == null)
                        <input type="email" class="form-control" disabled="" placeholder="color" style="text-align:right;" value="&#8369;{{$row['Total']}}.00">
                        @else
                        <input type="email" class="form-control" disabled="" placeholder="color" style="text-align:right;" value="&#8369;{{$row['Total']}}.00 (Discount: %{{$row['discount']}})">
                        @endif
                      </div>
                    @empty
                      
                    </div>
                  </div>
                  @endforelse
                  {!!Form::open(array('route'=>'transaction_update','id'=>'formupdate','method'=>'post'))!!}
                      <div class="row">
                      <div class="col-lg-12 col-sm-12">
                        <table class="table table-bordered"><br>
                <thead>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Discount(%)</th>
                    <th>Amount</th>
                    <th style="text-align:center"><a href="#" class="btn btn-sm btn-primary addRow " style="font-size:20px;">+<i class="glyphicon glyphicon-plus"></i></a></th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select id="productid" name="productid[]" class="form-control productid">
                                <option value="0" selected="true">Select Product</option>
                                @foreach($products as $key => $p)
                                <option value="{!!$key!!}">{!!$p!!}</option>
                                @endforeach
                            </select>
                        </td>
                        <td><input type="text" name="qty[]" class="form-control qty"></td>
                        <td><input type="text" name="price[]" class="form-control price" style="background:grey;color:white"></td>
                        <td><input type="text" name="dis[]" class="form-control dis"></td>
                        <td><input type="text" name="amount[]" class="form-control amount" readonly="true" style="background:grey;color:white"></td>
                        <td><a href="#" class="remove" style="margin-left:40%;"><strong>X</strong><i class="glyphicon glyphicon-remove"></i></a></td>
                    </tr>
                </tbody>
            <tfoot>
                <tr>
                    <td style="border:none"></td>
                    <td style="border:none"></td>
                    <td style="border:none"></td>
                    <td><b>Total</b></td>
                    <td><b class="total"></b></td>
                    <td></td>
                </tr>
            </tfoot>   
        </table>
                      <div class="row" style="margin-left:80%;">
                        <div class="modal-footer">
                          {!!Form::submit('Update',array('class'=>'d-inline p-2 btn btn-primary btn-lg'))!!}<a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page">Return</a>
                        </div>
                      </div>
                      
        {!!Form::hidden('_token',csrf_token())!!}
        {!!Form::close()!!}
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
<script type="text/javascript">
$('tbody').delegate('.productid', 'change', function(){
    var tr = $(this).parent().parent();
    var id = tr.find('.productid').val();
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
                '<td><a href="#" class="remove" style="margin-left:40%;"><strong>X</strong><i class="glyphicon glyphicon-remove"></i></a></td>'+
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
        alert('You cannot remove last item')
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