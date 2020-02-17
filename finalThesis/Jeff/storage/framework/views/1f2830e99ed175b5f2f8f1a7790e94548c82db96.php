<?php $__env->startSection('title'); ?>
    + Service / Job Order
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<style>
.hide {
    display: none;
}
</style>

<body>
        <div class="container">
        <section class="panel">
            <div class="panel panel-footer">
            <header class="panel panel-default">
                <h3> Job Order </h3>
            </header>
            </div>
        <div class="panel panel-footer">
        <?php echo Form::open(array('route'=>'insert_jooo','id'=>'formsave','method'=>'post')); ?>

        <div class="col-lg-12 col-sm-12">
            <h4 style="margin: 0 0 0 0;"><strong>Job Order</strong>
            <a href="/new_account" class="btn btn-primary btn-md btn-round" style="margin-left: 30%; background-color: #005CA5;">+ Client</a>
        <a href="/new_vehicle" class="btn btn-primary btn-md btn-round" style="margin-left: 1%; background-color: #005CA5;">+ Vehicle</a>
        <a href="/product_co" class="btn btn-primary btn-md btn-round" style="margin-left: 1%; background-color: #005CA5;">+ Checkout</a></h4>
            <br>
            <!--<button type="button" id="show-btn" class="btn btn-primary justify-content-end" style="float: right;">Add Job Order</button>-->
            <div class="col-lg-5 col-sm-5">
                <div class="form-group">
                    <select name="client_id" id="client" class="form-control bg-white searchable">
                        <option value="" selected="true" disabled="true">Select Client</option>
                        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo $key; ?>"><?php echo $c; ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-5 col-sm-5">
                <div class="form-group">
                    <select name="mech" class="form-control bg-white" required>
                        <option value="" selected="true" disabled="true">Select Mechanic</option>
                        <?php $__currentLoopData = $mechanic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo $key; ?>"><?php echo $m; ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-5 col-sm-5" id="vehicle_list">
                <div class="form-group">
                    <select name="vcle" class="form-control bg-white" required>
                        
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="comment">Service Details:</label>
                <textarea class="form-control bg-white" rows="5" id="comment" name="svc" required></textarea>
                <br>
            </div>
            <table id="product-table" class="table table-bordered"><br>
                <thead>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Discount(%)</th>
                    <th>Amount</th>
                    <th style="text-align:center"><a href="#" class="btn btn-primary addRow" style="background-color: #005CA5;">+<i class="glyphicon glyphicon-plus"></i></a></th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select id="productname" name="productname[]" class="form-control productname searchable" required>
                                <option value="" disabled="true" selected>Select Product</option>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo $key; ?>"><?php echo $p; ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </td>
                        <td><input id="product-qty" type="text" onkeyup="this.value = this.value.replace(/[^0-9]/, '')" name="qty[]" class="form-control qty bg-white" maxlength="3" required></td>
                        <td><input id="product-price" type="text" name="price[]" class="form-control price" style="background:grey;color:white;text-align:right;" disabled></td>
                        <td><input id="product-dsct" type="text" name="dis[]" class="form-control dis bg-white" maxlength="3"></td>
                        <td><input id="product-amt" type="text" name="amount[]" class="form-control amount" readonly="true" style="background:grey;color:white;text-align:right;" disabled></td>
                        <td><a href="#" style="margin-left: 40%;" class="remove" style="background-color: #005CA5;"><strong>X</strong><i class="glyphicon glyphicon-remove"></i></a></td>
                        <input type="hidden" name="totals" class="form-control totals" style="background:grey;color:white">
                    </tr>
                </tbody>
            <tfoot>
                <tr>
                    <td style="border:none"></td>
                    <td style="border:none"></td>
                    <td style="border:none"></td>
                    <td><b>Total</b></td>
                    <td><input type="text" name="total" class="form-control total" style="background:grey;color:white;text-align:right" disabled></td>
                    <td></td>
                </tr>
            </tfoot>   
        </table>
        <div class="col-lg-2 col-sm-2" style="margin-left:80%">
                <div class="form-group">
                <?php echo Form::submit('Save',array('class'=>'d-inline p-2 btn btn-primary btn-lg', 'style'=>'background-color: #005CA5')); ?><a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-secondary btn-lg" title="Return to the previous page">Return</a>
                </div>
        </div>
    </div>
</div>
        <?php echo Form::hidden('_token',csrf_token()); ?>

        <?php echo Form::close(); ?>

            </div>
        </section>
    </div>
</body>
<script type="text/javascript">
$(document).ready(function() {
    $('.searchable').select2();
});

$('#client').change(function(){
    var id = $(this).val();
    var dataId = {'id':id};
    $.ajax({
        type     : 'GET',
        url      : '<?php echo URL::route('findVehicle'); ?>',
        dataType : 'json',
        data     : dataId,
        success:function(data){
            if(!$.trim(data)){
                var opt='<option value="No available vehicle."</option></td>';
                $('#vehicle_list').find('select').append(opt);
            }else{
                $('#vehicle_list').find('option').remove().end();
                var def = '<option value="" selected="true" disabled="true">Select Vehicle</option>';
                $('#vehicle_list').find('select').append(def);
                for (var i = 0; i < data.length; i++) {
                    var opt='<option value="'+data[i].vehicle_id+'">'+data[i].plate_no+'</option></td>';
                    $('#vehicle_list').find('select').append(opt);
                }
            }
            
        }
    });
})
$('tbody').delegate('.productname', 'change', function(){
    var tr = $(this).parent().parent();
    var id = tr.find('.productname').val();
    var dataId = {'id':id};
    $.ajax({
        type     : 'GET',
        url      : '<?php echo URL::route('findPrice'); ?>',
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
function addRow()
{
    var tr='<tr>'+
                '<td>'+
                '<select name="productname[]" class="form-control productname searchable">'+
                '<option value="0" selected="true" disabled="true">Select Product</option>'+
                '<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>'+
                '<option value="<?php echo $key; ?>"><?php echo $p; ?></option>'+
                '<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>'+
                '</select>'+
                '</td>'+
                '<td><input type="text" name="qty[]" class="form-control qty"></td>'+
                '<td><input type="text" name="price[]" class="form-control price" style="background:grey;color:white"></td>'+
                '<td><input type="text" name="dis[]" class="form-control dis"></td>'+
                '<td><input type="text" name="amount[]" class="form-control amount" style="background:grey;color:white"></td>'+
                '<td><a href="#" class="btn btn-danger remove">X<i class="glyphicon glyphicon-remove"></i></a></td>'+
                '</tr>';
                $('#product-table').find('tbody').append(tr);
                $('.searchable').select2();
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
<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\63977\Desktop\thesis\ITProject2\finalThesis\Jeff\resources\views/dashboard/new_joborder.blade.php ENDPATH**/ ?>