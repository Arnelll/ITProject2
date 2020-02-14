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
          <td><input type="text" name="Client Name" class="form-control jo_pn" value="{{$clients->lastname}},{{$clients->firstname}}" readonly></td>
          <td><input type="text" name="Type" class="form-control jo_qty" value="{{$vehicle->model}} ({{$vehicle->type}})" readonly></td>
          <td><input type="text" name="Plate Number" class="form-control jo_qty" value="{{$vehicle->plate_no}}" readonly></td>
          <td><input type="text" name="Mechanic" class="form-control jo_qty" value="{{$mechanic->last_name}}, {{$mechanic->first_name}}" readonly></td>
          <td><input type="text" name="Description" class="form-control jo_qty" value="{{$jo->remarks}}" readonly>
        </tr>
      </tbody>
      </table>
    </div>
    <br>
    <hr>
    <div>
    <table class="table">
      <h5>Job Order list of items</h5>
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
      @foreach($products as $row)
        <tr>
          <td><input type="text" name="jo_pn" class="form-control jo_pn" value="{{$row['product_name']}}" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="{{$row['quantity']}}" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="{{$row['retail_price']}}" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="{{$row['quantity']*$row['retail_price']}}" readonly></td>
        </tr>
        @endforeach
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
      @foreach($products2 as $row)
        <tr>
          <td><input type="text" name="jo_pn" class="form-control jo_pn" value="{{$row['product_name']}}" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="{{$row['quantity']}}" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="{{$row['retail_price']}}" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="{{$row['quantity']*$row['retail_price']}}" readonly></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
  </div>
  <div class="col-lg-2 col-sm-2" style="margin-left:75%">
                <div class="form-group">
                <a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page">Return</a>
                </div>
        </div>
</body>
@endsection
    
@section('scripts')

@endsection