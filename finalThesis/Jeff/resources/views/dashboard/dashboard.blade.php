@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
<body>
<div class="row">
  <div class="card" class="float-left" style="top:110px;padding:105px;width: 20rem;height: 18rem; positon:relative; left: 20px;">
              <h5 class="card-title" style="text-align: center;"><a href="/new_service">Add Sales</a></h5>
  </div>
  <div class="card" class="float-left" style="top:110px;padding:105px;margin: 0 0 0 10px; width: 20rem;height: 18rem; positon:relative; left: 20px;">
              <h5 class="card-title" style="text-align: center;"><a href="/accounts">Client List</a></h5>
  </div>
  <div class="card" class="float-left" style="top:110px;padding:105px;margin: 0 0 0 10px;width: 20rem;height: 18rem; positon:relative; left: 20px;">
              <h5 class="card-title" style="text-align: center;"><a href="/products">Inventory</a></h5>
  </div>
</div>
</body>
@endsection
    
@section('scripts')

@endsection