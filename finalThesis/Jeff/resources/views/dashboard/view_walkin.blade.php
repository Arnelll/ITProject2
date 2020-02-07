@extends('layouts.master')

@section('title')
        Job Order Details
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
    <div class="row">
      <table class="table">
        <h5>Job Order Details</h5>
        <thead>
          <tr>
            <th>Client Name</th>
            <th>Vehicle Type</th>
            <th>Plate Number</th>
            <th>Mechanic</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td><input type="text" name="Client Name" class="form-control jo_pn" value="Arnel Agsunta" readonly></td>
          <td><input type="text" name="Type" class="form-control jo_qty" value="Truck/Model(2018 Kariton)" readonly></td>
          <td><input type="text" name="Plate Number" class="form-control jo_qty" value="HEHE 123" readonly></td>
          <td><input type="text" name="Mechanic" class="form-control jo_qty" value="Skusta Clar" readonly></td>
          <td><input type="text" name="Description" class="form-control jo_qty" value="Upgrade engine" readonly></td>
        </tr>
      </tbody>
      </table>
    </div>
      <thead>
        <tr>
          <th>Status</th>
        </tr>
      </thead>
    <br>
    <div class="row">
    <div class="col-lg-4 col-sm-6">
    <br>
        <select name="client_id" class="form-control bg-white" required>
          <option value="">Pending</option>
          <option value="">Ongoing</option>
          <option value="">Rendered</option>
          <option value="">Cancelled</option>          
        </select>
    </div>
    </div>
    <br>
    <hr>
    <div>
    <table class="table">
      <h5>List of items</h5>
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
          <td><input type="text" name="jo_pn" class="form-control jo_pn" value="Turbo kit" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="2" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="10000" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="20000" readonly></td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
  <div class="col-lg-2 col-sm-2" style="margin-left:75%">
                <div class="form-group">
                {!!Form::submit('Save',array('class'=>'d-inline p-2 btn btn-primary btn-lg'))!!}<a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page">Return</a>
                </div>
        </div>
</body>
@endsection
    
@section('scripts')

@endsection