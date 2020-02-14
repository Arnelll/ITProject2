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
          <h3> Job Order Details  </h3>
        </header>
    </div>
    {!!Form::open(array('route'=>'updatejo_status','id'=>'formsave','method'=>'post'))!!}
    <div class="row">
      <table class="table">
        <h5><strong>Job Order Details (Date Created: {{$araw}})</strong></h5>
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
          <td><input type="text" name="Client Name" class="form-control jo_pn" value="{{$clients->lastname}},{{$clients->firstname}}" readonly></td>
          <td><input type="text" name="Type" class="form-control jo_qty" value="{{$vehicle->model}} ({{$vehicle->type}})" readonly></td>
          <td><input type="text" name="Plate Number" class="form-control jo_qty" value="{{$vehicle->plate_no}}" readonly></td>
          <td><input type="text" name="Mechanic" class="form-control jo_qty" value="{{$mechanic->last_name}}, {{$mechanic->first_name}}" readonly></td>
          <td><input type="text" name="Description" class="form-control jo_qty" value="{{$jo->remarks}}" readonly>
          <input type="hidden" name="job_id" class="form-control jo_qty" value="{{$jo->jo_id}}" readonly></td>
          <input type="hidden" name="client_id" class="form-control jo_qty" value="{{$clients->client_id}}" readonly></td>
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
        @if($jo->status!='Rendered')
        <select name="status" class="form-control bg-white" required>
          <option value="" selected disabled>{{$jo->status}}</option>
          @if ($jo->status=='Pending')
          <option value="Ongoing">Ongoing</option>
          <option value="Cancelled">Cancelled</option>
          @elseif ($jo->status=='Ongoing')
          <option value="Rendered">Rendered</option>
          <option value="Cancelled">Cancelled</option>
          @else
          <option value="Ongoing">Ongoing</option>
          <option value="Rendered">Rendered</option>
          <option value="Cancelled">Cancelled</option>
          @endif          
        </select>
        @else
        <select name="status" class="form-control bg-white" required>
          <option value="" selected disabled>{{$jo->status}}</option>
        </select>
        @endif
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
  </div>
  <div class="col-lg-2 col-sm-2" style="margin-left:75%">
                <div class="form-group">
                @if($jo->status!='Rendered' && $jo->status!='Cancelled')
                {!!Form::submit('Save',array('class'=>'d-inline p-2 btn btn-primary btn-lg'))!!}<a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page">Return</a>
                @else
                <a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page">Return</a>
                @endif
                </div>
                <a href="/generate_pProfile/{{$clients->client_id}}/{{$jo->jo_id}}" class="d-inline p-2 btn btn-primary btn-lg" title="Generate Report">Generate Report</a>
        </div>
</body>
@endsection
    
@section('scripts')

@endsection