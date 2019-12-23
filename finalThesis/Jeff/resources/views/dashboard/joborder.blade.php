@extends('layouts.master')

@section('title')
    Job Order
@endsection

@section('content')
<br>
<br>
<div class="container">
            <h2 class="title">@yield('title')</h2>
            <p class="description">Sales to: </p>

            <div class="row  text-center ml-auto mr-auto">
                <div class="col-sm-6 col-lg-6">
                  <div class="input-group">
                    <select class="form-control" id="exampleFormControlSelect1" name="client" required>
                      <option disabled selected>Client</option>
                      @foreach($clients as $row)
                      <option>{{$row['lastname']}}, {{$row['firstname']}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                  <div class="input-group">
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="Email" name="email" required>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="Contact No." name="email" required>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="Address" name="address" required>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                  <div class="input-group">
                  </div>
                </div>
                <table class="table">
                  <thead>
                      <tr>
                          <th class="text-center">Product Name</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th>Order Quantity</th>
                          <th class="text-center">Amount</th>
                          <th class="text-center"><i class="now-ui-icons ui-1_simple-add"></i></th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td class="text-center">
                            <select class="form-control" id="exampleFormControlSelect1" required>
                              <option disabled selected>Product Name</option>
                              @foreach($products as $row)
                              <option>{{$row['product_name']}}</option>
                              @endforeach
                            </select>
                          </td>
                          <td><input type="text" class="form-control" placeholder="Stocked Quantity" name="quantity" required readonly></td>
                          <td><input type="text" class="form-control" placeholder="Price" name="price" readonly></td>
                          <td><input type="text" class="form-control" placeholder="Order Quantity" name="oQty" required></td>
                          <td class="text-right"><input type="text" class="form-control" placeholder="Amount" name="amount" readonly></td>
                          <td class="td-actions text-center">
                              <button type="button" rel="tooltip" class="btn btn-danger">
                                  <i class="now-ui-icons ui-1_simple-add"></i>
                              </button>
                          </td>
                      </tr>
                  </tbody>
              </table>
              <div class="text-center">
							  <a href="#" class="btn btn-primary">Save</a>
						  </div>
            </div>
        </div>

@endsection
    
@section('scripts')

@endsection