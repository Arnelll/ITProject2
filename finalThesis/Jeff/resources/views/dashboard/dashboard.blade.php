@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
<body>

<div class="card-deck">

  <div class="col-sm-4">
    <a href="/new_service">
      <div class="card" style="padding: 100px; width: 90%;" onMouseOver="this.style.background='#066DBC'" onMouseOut="this.style.background='#fff'">
          <h5 class="card-title" style="text-align: center;">
            <div class="now-ui-icons ui-1_simple-add" style=""></div>
            <br>
            Add Sales
          </h5>
      </div>
    </a>
  </div>

  <div class="col-sm-4">
    <a href="/accounts">
      <div class="card" style="padding: 100px; width: 90%;" onMouseOver="this.style.background='#066DBC'" onMouseOut="this.style.background='#fff'">
        <h5 class="card-title" style="text-align: center;">
          <div class="now-ui-icons emoticons_satisfied" style=""></div>
          <br>
          Client List
        </h5>
      </div>
    </a>
  </div>

  <div class="col-sm-4">
    <a href="/products">
      <div class="card" style="padding: 100px; width: 90%;" onMouseOver="this.style.background='#066DBC'" onMouseOut="this.style.background='#fff'">
        <h5 class="card-title" style="text-align: center;">
          <div class="now-ui-icons loader_gear" style=""></div>
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