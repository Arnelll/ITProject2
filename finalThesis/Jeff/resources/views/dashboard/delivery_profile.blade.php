@extends('layouts.master')

@section('title')
        Delivery profile
@endsection

@section('content')
<br>
<br>
	<a href="javascript:history.go(-1)" style="margin-left:83%;" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page">Return</a>
<br>
<br>
<br>
<div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card-body">
        <div class="card">
        <div class="card-user">
          <div class="author">
          <a href="#">
                    <img class="avatar border-gray" src="../assets/img/Arnel.jpg" alt="...">
                    <h5 class="title">{{$supplier->name}}</h5>
                  </a>
                </div>
                <p class="description text-center"> Address: {{$supplier->address}} </p>
                <p class="description text-center"> Contact No: {{$supplier->contact_no}} </p>
          </div>
       
      </div>
    </div>
  </div>
</div>
        <div class="row justify-content-center">
            <div class="col-md-9">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Delivery</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    @foreach($result as $n)
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Product.</label>
                        <input type="text" class="form-control" disabled="" placeholder="product" value="{{$n['product_name']}}">
                      </div>
                    </div>
                    
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Quantity</label>
                        <input type="numeric" class="form-control" disabled="" placeholder="qty" value="{{$n['quantity']}}">
                      </div>
                    </div>

                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Delivery Date</label>
                        <input type="date" class="form-control" disabled="" placeholder="qty" value="{{$n['delivery_date']}}">
                      </div>
                    </div>
                  </div>
                  @endforeach
                </form>
              </div>
            </div>
          </div>
          </div>

@endsection
    
@section('scripts')

@endsection