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
    <ul>
        <li>
        <button type="button" class="btn btn-info btn-md btn-round"><a href="/new_sales">ADD SALES</a></button>
        </li>
        <li>
        <button type="button" class="btn btn-info btn-md btn-round"><a href="/new_service">ADD SERVICE/JOB ORDER</a></button>
        </li>
    </ul>
</body>

@endsection
    
@section('scripts')

@endsection