@extends('layouts.master')

@section('title')
        Delivery profile
@endsection

@section('content')
<body>
  <div class="container">
    <section class="panel">
      <div class="panel panel-footer">
        <header class="panel panel-default">
          <h3> </h3>
        </header>
    </div>
    <br>
    <div class="row">
  <table class="table">
  <h3>Delivery Details</h3>
      <thead>
        <tr>
          <th>Supplier Name</th>
          <th>Product</th>
          <th>Quantity</th>
          <th>Delivery Date</th>
        </tr>
      </thead>
      <tbody>
      @foreach($result as $row)
        <tr>
          <td><input type="text" name="jo_pn" class="form-control jo_pn" value="{{$row['name']}}" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="{{$row['product_name']}}" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="{{$row['quantity']}}" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="{{$row['delivery_date']}}" readonly></td>
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