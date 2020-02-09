@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
<body>

<div class="card-deck">

  <div class="col-sm-4">
    <a href="/opt_trans">
      <div class="card" style="padding: 100px; width: 100%;" onMouseOver="this.style.background='#066DBC'" onMouseOut="this.style.background='#fff'">
        <h5 class="card-title" style="text-align: center;">
          <div class="fas fa-plus-circle" style=""></div>
          <br>
          Add Sales
        </h5>
      </div>
    </a>
  </div>

  <div class="col-sm-4">
    <a href="/accounts">
      <div class="card" style="padding: 100px; width: 100%;" onMouseOver="this.style.background='#066DBC'" onMouseOut="this.style.background='#fff'">
        <h5 class="card-title" style="text-align: center;">
          <div class="fas fa-users" style=""></div>
          <br>
          Client List
        </h5>
      </div>
    </a>
  </div>
  
  <div class="col-sm-4">
    <a href="/products">
      <div class="card" style="padding: 100px; width: 100%;" onMouseOver="this.style.background='#066DBC'" onMouseOut="this.style.background='#fff'">
        <h5 class="card-title" style="text-align: center;">
          <div class="fas fa-boxes" style=""></div>
          <br>
          Inventory
        </h5>
      </div>
    </a>
  </div>

</div>
</body>
@endsection
    
@section('scripts')

@endsection