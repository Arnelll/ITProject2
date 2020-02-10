@extends('layouts.master')

@section('title')
    New Transaction
@endsection

@section('content')
<body>
    <br>
    <br>
    <br>
    <h3>Select Transaction</h3>
    <div class="row">
    <ul style="list-style: none;">
        <li>
        <a href="/new_sales"><button type="button" class="btn btn-info btn-md btn-round" style="color:white;">ADD SALES</button></a>
        </li>
        <li>
        <a href="/new_service"><button type="button" class="btn btn-info btn-md btn-round">ADD SERVICE/JOB ORDER</button></a>
        </li>
    </ul>
    </div>
</body>

@endsection
    
@section('scripts')

@endsection