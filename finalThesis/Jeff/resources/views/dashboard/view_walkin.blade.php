@extends('layouts.master')

@section('title')
    @foreach($result as $n)
        Transaction details for <strong style="color:red;">{{$n['lastname']}}, {{$n['firstname']}}</strong>
        <p>
	<a href="javascript:history.go(-1)" title="Return to the previous page">&laquo; Go back</a>
    </p>
    @endforeach
@endsection

@section('content')

<div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card-body">
        <div class="card">
        <div class="card-user">
        <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/default-avatar.png" alt="...">
                    @foreach($result as $row)
                    <h5 class="title">{{$row['lastname']}}, {{$row['firstname']}}</h5>
                  </a>
                </div>
                <p class="description text-center">
                    Email: {{$row['email']}}
                </p>

              </div>
              
              @endforeach
        </div>
       
      </div>
    </div>
  </div>
        <div class="row justify-content-center">
            <div class="col-md-9">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Transaction Details</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    @foreach($result as $n)
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Product</label>
                        <input type="text" class="form-control" disabled="" placeholder="product_name" value="{{$n['product_name']}}">
                      </div>
                    </div>
                    <div class="col-md-2 px-1">
                      <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" disabled="" placeholder="price" value="{{$n['price']}}">
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>Quantity Bought</label>
                        <input type="email" class="form-control" disabled="" placeholder="color" value="{{$n['quantity']}}">
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>Total</label>
                        @if($n['discount']==0 || $n['discount'] == null)
                        <input type="email" class="form-control" disabled="" placeholder="color" value="&#8369;{{$n['Total']}}.00">
                        @else
                        <input type="email" class="form-control" disabled="" placeholder="color" value="&#8369;{{$n['Total']}}.00 (Discount: %{{$n['discount']}})">
                        @endif
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