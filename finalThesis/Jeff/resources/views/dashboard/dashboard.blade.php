@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
<body>

<div class="card-deck">

  <div class="col-sm-4">
    <a href="/opt_trans" style="text-decoration: none;">
      <div class="card" style="padding: 100px; width: 100%;" onMouseOver="this.style.background='#DCDCDC'" onMouseOut="this.style.background='#fff'">
        <h5 class="card-title" style="text-align: center; color: #005CA5;">
          <div class="fas fa-plus-circle" style=""></div>
          <br>
          Add Transaction
        </h5>
      </div>
    </a>
  </div>

  <div class="col-sm-4">
    <a href="/accounts" style="text-decoration: none;">
      <div class="card" style="padding: 100px; width: 100%;" onMouseOver="this.style.background='#DCDCDC'" onMouseOut="this.style.background='#fff'">
        <h5 class="card-title" style="text-align: center; color: #005CA5;">
          <div class="fas fa-users" style=""></div>
          <br>
          Client List
        </h5>
      </div>
    </a>
  </div>
  
  <div class="col-sm-4">
    <a href="/products" style="text-decoration: none;">
      <div class="card" style="padding: 100px; width: 100%;" onMouseOver="this.style.background='#DCDCDC'" onMouseOut="this.style.background='#fff'">
        <h5 class="card-title" style="text-align: center; color: #005CA5;">
          <div class="fas fa-boxes" style=""></div>
          <br>
          Inventory
        </h5>
      </div>
    </a>
  </div>
  <div class="col-sm-4">
    <a href="/generate_pProfile/4/171" style="text-decoration: none;">
      <div class="card" style="padding: 100px; width: 100%;" onMouseOver="this.style.background='#DCDCDC'" onMouseOut="this.style.background='#fff'">
        <h5 class="card-title" style="text-align: center; color: #005CA5;">
          <div class="fas fa-boxes" style=""></div>
          <br>
          Report Generation Testing
        </h5>
      </div>
    </a>
  </div>

</div>
</body>
@endsection
    
@section('scripts')

@endsection