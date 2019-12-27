@extends('layouts.master')

@section('title')
    Transactions(Services)
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> @yield('title')</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                            Client Name
                            </th>
                            <th>
                            Service
                            </th>
                            <th>
                            Status
                            </th>
                            <th>
                            Actions
                            </th>
                        </thead>
                        <tbody>
                            @foreach($result as $row)
                                <tr>
                                    <td>{{$row['lastname']}}, {{$row['firstname']}}</td>
                                    <td>{{$row['service']}}</td>
                                    <td>{{$row['status']}}</td>
                                    <td><a href='#' class="btn btn-primary">View Details</a></td>
                                </tr>
                            @endforeach
                            <nav aria-label="...">
                        {{$result->links()}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    
@section('scripts')

@endsection