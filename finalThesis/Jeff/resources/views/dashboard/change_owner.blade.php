@extends('layouts.master')

@section('title')
    @foreach($name as $n)
        Change owner for Plate No. <strong style="color:red;">{{$n['plate']}}</strong>
    @endforeach
@endsection

@section('content')
<br>
<br>
	<a href="javascript:history.go(-1)" style="margin-left:83%;" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page">Return</a>
<br>
<br>
<br>
<div class="container">
        <section class="panel">
        <div class="panel panel-footer">
        {!!Form::open(array('route'=>'change_own','id'=>'formsave','method'=>'post'))!!}
        <h3 class="d-inline p-2"><strong>Enter Client Details</strong></h3>
        <br>
        <br>
            <div class="row">
                <div class="col-lg-10 col-sm-4" style="margin-bottom: 10px;">
                    <h6 class="d-inline p-2">Vehicle Details:</h6>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class="form-group">
                    <input type="text" name="plate_no" class="form-control" maxlength="100" value="Plate No: {{$id['plate_no']}}" disabled readonly>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class="form-group">
                    <input type="text" name="type" class="form-control" maxlength="100" value="Type: {{$id['type']}}" disabled readonly>
                    </div>
                </div>
                @if($id['firstname']!=null)
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <input type="text" name="prev_owner" class="form-control" maxlength="100" value="Previous Owner: {{$id['lastname']}}, {{$id['firstname']}}" disabled readonly>
                        <input type="hidden" name="vId" value="{{$id['vehicle_id']}}">
                    </div>
                </div>
                @else
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" maxlength="100" value="Previous Owner: NO OWNER, PANGIT GAMIN" disabled readonly>
                    </div>
                </div>
                @endif
                <div class="col-lg-10 col-sm-4" style="margin-bottom: 10px;">
                    <h6 class="d-inline p-2">To be owned by:</h6>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                    <input type="text" name="fn" class="form-control bg-white" placeholder="First Name" maxlength="30" required>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                    <input type="text" name="ln" class="form-control bg-white" placeholder="Last Name" maxlength="20" required>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                    <input type="text" name="address" class="form-control bg-white" placeholder="Address" maxlength="100" required>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class="form-group">
                    <input type="text" name="email" class="form-control bg-white" placeholder="Email" maxlength="30" required>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="form-group">
                    <input type="text" name="phone" class="form-control bg-white" placeholder="Phone" maxlength="11" required>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-2" style="margin-left:87%;">
                    <div class="form-group">
                    {!!Form::submit('Save',array('class'=>' d-inline p-2 btn btn-primary btn-lg', 'style'=>'background-color: #005CA5'))!!}<a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page" style="background-color: #005CA5;">Return</a>
                    </div>
                </div>
            </div>
            {!!Form::hidden('_token',csrf_token())!!}
            {!!Form::close()!!}
        </div>
        </section>
    </div>

@endsection
    
@section('scripts')

@endsection