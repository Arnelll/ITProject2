@extends('layouts.master')

@section('title')
    Account details
@endsection

@section('content')

<div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <div class="col-md-10 ml-auto mr-auto col-xl-6">
            <div class="card-header">
              <ul class="nav nav-tabs justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" href="#about" role="tab" data-toggle="tab">
                      About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#vehicle" role="tab" data-toggle="tab">
                      Vehicle
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#walk-in" role="tab" data-toggle="tab">
                      Walk-in
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services" role="tab" data-toggle="tab">
                      Services
                    </a>
                </li>
              </ul>
            </div>
            <div class="tab-content tab-space">
              <div class="tab-pane active text-center gallery" id="about">
              <br>  
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
              <div class="tab-pane text-center gallery" id="vehicle">
                  <form>
                    @forelse($vehicle as $i => $row)
                    <h4><label for="exampleInputEmail1"><strong>{{$row['color']}} {{$row['type']}}</strong></label></h4>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Plate No.</label>
                        <input type="text" class="form-control text-center" id="input2"  aria-describedby="input2Help" placeholder="{{$row['plate_no']}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Model</label>
                        <input type="text" class="form-control text-center" id="input2"  aria-describedby="input2Help" placeholder="{{$row['model']}}" readonly>
                    </div>
                    @empty
                    <br>
                    <div class="form-group">
                        This client has no registered vehicle.
                    </div>
                    @endforelse
                  </form>
  			      </div>
              <!---->
              <div class="tab-pane text-center gallery" id="walk-in">
                <form>
                <div class="table-full-width table-responsive">
                  <br>
                  <table class="table">
                    <tbody>
                    @forelse($transaction as $row)
                      <tr>
                        <td>
                          <div class="form-check">
                              <i style="color:green;" class="now-ui-icons ui-1_check"></i>
                          </div>
                        </td>
                        <td class="text-left">Bought <strong>{{$row['product_name']}}</strong> with a quantity of <strong>{{$row['quantity']}}</strong>.</td>
                      </tr>
                      @empty
                      <tr>
                        <td>
                          <div class="form-check">
                          </div>
                        </td>
                        <td class="text-left">No walk-in(s) has been rendered to this client.</td>
                      </tr>
                    @endforelse  
                    </tbody>
                  </table>
                </div>
                </form>
  			      </div>
              <div class="tab-pane text-center gallery" id="services">
                <form>
                <div class="table-full-width table-responsive">
                  
                  <table class="table">
                  <br>
                    <tbody>
                    @forelse($service as $row)
                      <tr>
                        @if($row['status']=='Rendered')
                        <td>
                          <div class="form-check">
                              <i style="color:green;" class="now-ui-icons ui-1_check"></i>
                          </div>
                        </td>
                        <td class="text-left"><strong>{{$row['service']}}</strong> has been rendered to the vehicle <strong>{{$row['type']}}</strong> with the use of <strong>{{$row['quantity']}} {{$row['product_name']}}.</td>
                        @elseif($row['status']=='Cancelled')
                        <td>
                          <div class="form-check" style="color:red;">
                              X
                          </div>
                        </td>
                        <td class="text-left">A service for <strong>{{$row['service']}}</strong> for the vehicle <strong>{{$row['type']}}</strong> is cancelled.</td>
                        @endif
                      </tr>
                      @empty
                      <tr>
                        <td>
                          <div class="form-check">
                          </div>
                        </td>
                        <td class="text-left">No service(s) has been rendered to this client.</td>
                      </tr>
                      @endforelse
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