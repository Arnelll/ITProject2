@extends('layouts.master')

@section('title')
    @foreach($name as $n)
        Vehicle profile for Plate No. <strong style="color:red;">{{$n['plate']}}</strong>
    @endforeach
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
                    @foreach($result as $row)
                    <h5 class="title">{{$row['lastname']}}, {{$row['firstname']}}</h5>
                  </a>
                </div>
                <p class="description text-center"> Email: {{$row['email']}} </p>
                @endforeach
          </div>
       
      </div>
    </div>
  </div>
</div>
        <div class="row justify-content-center">
            <div class="col-md-9">
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
                        <label>Type</label>
                        
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
          </div>

@endsection
    
@section('scripts')

@endsection