@extends('layouts.master')

@section('title')
    New Transaction
    <a href="javascript:history.go(-1)" class="d-inline p-2" title="Return to the previous page" style="background-color: #005CA5;"><- Return</a>
@endsection

@section('content')
<body>

<div class="card-deck">

  <div class="col-sm-4">
    <a href="/new_sales" style="text-decoration: none;">
      <div class="card" style="padding: 100px; width: 100%;" onMouseOver="this.style.background='#DCDCDC'" onMouseOut="this.style.background='#fff'">
        <h5 class="card-title" style="text-align: center; color: #005CA5;">
          <div class="fas fa-plus-circle" style=""></div>
          <br>
          Add New Sales
        </h5>
      </div>
    </a>
  </div>

  <div class="col-sm-4">
    <a href="/new_service" style="text-decoration: none;">
      <div class="card" style="padding: 100px; width: 100%;" onMouseOver="this.style.background='#DCDCDC'" onMouseOut="this.style.background='#fff'">
        <h5 class="card-title" style="text-align: center; color: #005CA5;">
          <div class="fas fa-plus-circle" style=""></div>
          <br>
          Add New Service/Job Order
        </h5>
      </div>
    </a>
  </div>
</div>
</body>

@endsection
    
@section('scripts')

@endsection