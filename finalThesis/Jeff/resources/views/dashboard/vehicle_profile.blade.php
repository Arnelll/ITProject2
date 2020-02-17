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
                <p class="description text-center"> Email: {{$row['email']}} </p>
                @endforeach
                <div class="btn-group">
                <button type="button" class="btn btn-danger">Change Owner</button>
                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#clientModal">Existing Client</a>
                  <a class="dropdown-item" href="/change_owner/{{$id['vehicle_id']}}">New Client</a>
                </div>
              </div>
            </div>
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

          <div class="modal fade" id="clientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">To be owned by:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!!Form::open(array('route'=>'change_own2','id'=>'formsave','method'=>'post'))!!}
      <div class="modal-body">
        <input type="hidden" name="vId" value="{{$id['vehicle_id']}}"></input>
        <select name="cId" class="form-control bg-white">
        @foreach($clients as $client)
          <option value="{{$client['client_id']}}">{{$client['lastname']}}, {{$client['firstname']}}</option>
        @endforeach
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!!Form::submit('Update',array('class'=>'d-inline p-2 btn btn-primary btn-lg'))!!}
      </div>
    </div>
  </div>
</div>
{!!Form::hidden('_token',csrf_token())!!}
            {!!Form::close()!!}


@endsection
    
@section('scripts')

@endsection