@extends('layouts.master')

@section('title')
    Account details
@endsection

@section('content')
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="../assets/css/material-min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">

    <link href="../assets/css/profile.css" rel="stylesheet" />
</head>
<div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#about" role="tab" data-toggle="tab">
                      <i class="material-icons">camera</i>
                      About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#walk-in" role="tab" data-toggle="tab">
                      <i class="material-icons">palette</i>
                      Walk-in
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services" role="tab" data-toggle="tab">
                      <i class="material-icons">palette</i>
                      Services
                    </a>
                </li>
              </ul>
            </div>
            <div class="tab-content tab-space">
              <div class="tab-pane active text-center gallery" id="about">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control text-center" id="input1" aria-describedby="input1Help" placeholder="{{$result->email}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contact No.</label>
                        <input type="text" class="form-control text-center" id="input2"  aria-describedby="input2Help" placeholder="{{$result->contact_no}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Age</label>
                        <input type="text" class="form-control text-center" id="input2"  aria-describedby="input2Help" placeholder="{{$result->age}}" readonly>
                    </div>
                </form>
  			      </div>
              <div class="tab-pane text-center gallery" id="walk-in">
                <form>
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                    @foreach($transaction as $row)
                      <tr>
                        <td>
                          <div class="form-check">
                              <i style="color:green;" class="now-ui-icons ui-1_check"></i>
                          </div>
                        </td>
                        <td class="text-left">Bought <strong>{{$row['product_name']}}</strong> with a quantity of <strong>{{$row['quantity']}}</strong>.</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-check"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-check"></i>
                          </button>
                        </td>
                      </tr>
                      @endforeach  
                    </tbody>
                  </table>
                </div>
                </form>
  			      </div>
              <div class="tab-pane text-center gallery" id="services">
                <form>
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                    <!-- @foreach($transaction as $row)
                      <tr>
                        <td>
                          <div class="form-check">
                              <i style="color:green;" class="now-ui-icons ui-1_check"></i>
                          </div>
                        </td>
                        <td class="text-left">Bought: <strong>{{$row['product_name']}}</strong> with a quantity of <strong>{{$row['quantity']}}</strong>.</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-check"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-check"></i>
                          </button>
                        </td>
                      </tr>
                      @endforeach -->
                    </tbody>
                  </table>
                </div>
                </form>
  			      </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-user">
        <div class="image">
          <img src="../assets/img/bg5.jpg" alt="...">
        </div>
        <div class="card-body">
          <div class="author">
            <a href="#">
              <img class="avatar border-gray" src="../assets/img/default-avatar.png" alt="...">
              <h5 class="title">{{$result->lastname}}, {{$result->firstname}}</h5>
            </a>
            <p class="description">
              <strong>Customer</strong>
            </p>
          </div>
        </div>
        <hr>
        <div class="description-container text-center"> 
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
    
@section('scripts')

@endsection