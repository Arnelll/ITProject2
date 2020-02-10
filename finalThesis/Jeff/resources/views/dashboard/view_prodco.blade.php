@extends('layouts.master')

@section('title')
        Product Checkout Details
@endsection

@section('content')
<body>
  <div class="container">
    <section class="panel">
      <div class="panel panel-footer">
        <header class="panel panel-default">
          <h3> Product Checkout </h3>
        </header>
    </div>
    <div class="row">
      <table class="table">
        <h5>Product Checkout Details</h5>
        <thead>
          <tr>
            <th>Client Name</th>
            <th>Vehicle Type</th>
            <th>Plate Number</th>
            <th>Mechanic</th>
            <th>Service</th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td><input type="text" name="Client Name" class="form-control jo_pn" value="Arnel dGreat" readonly></td>
          <td><input type="text" name="Type" class="form-control jo_qty" value="Kariton" readonly></td>
          <td><input type="text" name="Plate Number" class="form-control jo_qty" value="HEHE 123" readonly></td>
          <td><input type="text" name="Mechanic" class="form-control jo_qty" value="Jerwin Ramos" readonly></td>
          <td><input type="text" name="Description" class="form-control jo_qty" value="Lifting" readonly></td>
        </tr>
      </tbody>
      </table>
    </div>
    <br>
    <hr>
    <div>
    <table class="table">
      <h5>List of items used:</h5>
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td><input type="text" name="jo_pn" class="form-control jo_pn" value="" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="" readonly></td>
        </tr>

      </tbody>
    </table>
    </div>
  </div>
  <div class="col-lg-2 col-sm-2" style="margin-left:75%">
                <div class="form-group">
                {!!Form::submit('Save',array('class'=>'d-inline p-2 btn btn-primary btn-lg', 'style'=>'background-color: #005CA5'))!!}<a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-lg" style="background-color: #005CA5;" title="Return to the previous page" >Return</a>
                </div>
        </div>
</body>
@endsection
    
@section('scripts')

@endsection