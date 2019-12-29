@extends('layouts.master')

@section('title')
    @foreach($name as $n)
        Vehicle profile for Plate No. <strong style="color:red;">{{$n['plate']}}</strong>
    @endforeach
@endsection

@section('content')
        <div class="row">
            <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Vehicle</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    @foreach($result as $n)
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Vehicle Type</label>
                        
                        <input type="text" class="form-control" disabled="" placeholder="vehicle_type" value="{{$n['type']}}(Model: {{$n['model']}})">
                        
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Plate No.</label>
                        <input type="text" class="form-control" disabled="" placeholder="plate_no" value="{{$n['plate_no']}}">
                      </div>
                    </div>
                    
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Color</label>
                        <input type="email" class="form-control" disabled="" placeholder="color" value="{{$n['color']}}">
                      </div>
                    </div>
                  </div>
                  @endforeach
                </form>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="title">Vehicle Logs</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    @foreach($result as $n)
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Vehicle Type</label>
                        
                        <input type="text" class="form-control" disabled="" placeholder="vehicle_type" value="{{$n['type']}}(Model: {{$n['model']}})">
                        
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Plate No.</label>
                        <input type="text" class="form-control" disabled="" placeholder="plate_no" value="{{$n['plate_no']}}">
                      </div>
                    </div>
                    
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Color</label>
                        <input type="email" class="form-control" disabled="" placeholder="color" value="{{$n['color']}}">
                      </div>
                    </div>
                  </div>
                  @endforeach
                </form>
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
                    <img class="avatar border-gray" src="../assets/img/Arnel.jpg" alt="...">
                    @foreach($result as $row)
                    <h5 class="title">{{$row['lastname']}}, {{$row['firstname']}}</h5>
                  </a>
                  <p class="description">
                    <strong>Owner of {{$row['type']}}</strong><br>Plate No. <strong style="color:red;">{{$row['plate_no']}}</strong>
                  </p>
                </div>
                <p class="description text-center">
                  "{{$row['description']}}"
                </p>
                <p class="description"> Email: {{$row['email']}} </p>
              </div>
              <hr>
              <div class="description-container text-center">
                  
              </div>
              @endforeach
            </div>
          </div>
        </div>
</div>

@endsection
    
@section('scripts')

@endsection