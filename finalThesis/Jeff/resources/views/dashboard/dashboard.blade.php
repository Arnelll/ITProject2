@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
<body>
<div class="row">
<a href="/new_service">
  <div class="card" class="float-left" style="padding:105px;width: 20rem;height: 18rem; positon:auto; left: 95%;" onMouseOver="this.style.background='#066DBC'" onMouseOut="this.style.background='#fff'">
              <h5 class="card-title" style="text-align: center;">
                <div class="now-ui-icons ui-1_simple-add" style=""></div>
                <br>
                Add Sales
              </h5>
  </div>
  </a>
  <a href="/accounts">
  <div class="card" class="float-left" style="top:60px;padding:105px;margin: 0 0 0 10px; width: 20rem;height: 18rem; positon:auto; left: 95%;" onMouseOver="this.style.background='#066DBC'" onMouseOut="this.style.background='#fff'">
              <h5 class="card-title" style="text-align: center;">
                <div class="now-ui-icons emoticons_satisfied" style=""></div>
                <br>
                Client List
              </h5>
  </div>
  </a>
  <a href="/products">
  <div class="card" class="float-left" style="top:60px;padding:105px;margin: 0 0 0 10px;width: 20rem;height: 18rem; positon:auto; left: 95%;" onMouseOver="this.style.background='#066DBC'" onMouseOut="this.style.background='#fff'">
              <h5 class="card-title" style="text-align: center;">
                <div class="now-ui-icons loader_gear" style=""></div>
                <br>
                Inventory
              </h5>
  </div>
  </a>
</div>
</body>
@endsection
    
@section('scripts')

@endsection