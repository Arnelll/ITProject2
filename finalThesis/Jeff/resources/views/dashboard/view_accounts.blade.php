@extends('layouts.master')

@section('title')
  Account details
@endsection

@section('content')
<br>
<br>
<a href="javascript:history.go(-1)" style="margin-left:83%;" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page">Return</a>
    <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card-body">
        <div class="card">
        <div class="card-user">
          <div class="author">
            <a href="#">
              <img class="avatar border-gray" src="../assets/img/default-avatar.png" alt="...">
              <h5 class="title">{{$result->lastname}}, {{$result->firstname}}</h5>
            </a>
          </div>
        </div>
       
      </div>
    </div>
  </div>
</div>
<div class="row justify-content-center">
<div class="col-md-9">
      <div class="card">
        <div class="card card-body">
          <div class="col-md-12 ml-auto mr-auto col-xl-12">
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
                        <label for="exampleInputPassword1">Address</label>
                        <input type="text" class="form-control text-center" id="input2"  aria-describedby="input2Help" placeholder="{{$result->address}}" readonly>
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
              <div class="tab-pane text-center gallery" id="walk-in">
                <form>
                <div class="table-full-width table-responsive">
                  <br>
                  <table class="table">
                    <tbody>
                    @forelse($sales as $row)
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
              <div class="tab-pane text-center gallery justify-content-center" id="services">
                <form>
                <div class="table-full-width table-responsive justify-content-center">
                  <table class="table justify-content-center">
                  <br>
                  <thead class="text-info">
                            <th style="font-weight: 500;">Job Order No.</th>
                            <th class="text-left" style="font-weight: 500;">Status</th>
                        </thead>
                    <tbody>
                    @forelse($service as $row)
                      <tr>
                      <td>{{$row['jo_id']}}</td>
                        @if($row['status']=='Rendered')
                        <td class="text-left">Rendered</td>
                        <td>
                          <div class="form-check text-left">
                              <i style="color:green;" class="now-ui-icons ui-1_check"></i>
                          </div>
                        </td>
                        @elseif($row['status']=='Ongoing')
                        <td class="text-left">Ongoing</td>
                        <td>
                          <div class="form-check text-left" style="color:blue;">
                              O
                          </div>
                        </td>
                        @elseif($row['status']=='Cancelled')
                        <td class="text-left">Cancelled</td>
                        <td>
                          <div class="form-check text-left" style="color:red;">
                              X
                          </div>
                        </td>
                        @elseif($row['status']=='Pending')
                        <td class="text-left">Pending</td>
                        <td>
                          <div class="form-check text-left" style="color:black;">
                              O
                          </div>
                        </td>
                        @endif
                      </tr>
                      @empty
                      <tr>
                        <td>
                          <div class="form-check">
                          </div>
                        </td>
                        <td class="text-left">No record of service(s) to this client is found.</td>
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
    </div>
    



@endsection
    
@section('scripts')

@endsection