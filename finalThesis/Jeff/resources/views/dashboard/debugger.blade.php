@extends('layouts.master')

@section('title')
    Accounts
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                            Fullname
                            </th>
                            <th>
                            Contact
                            </th>
                            <th>
                            Email
                            </th>
                            <th>
                            Actions
                            </th>
                        </thead>
                        <tbody>
                            @foreach($result as $row)
                                <tr>
                                    <td>{{$row['lastname']}}, {{$row['firstname']}}</td>
                                    <td>{{$row['contact_no']}}</td>
                                    <td>{{$row['email']}}</td>
                                    <td><a href='#' class="btn btn-primary">View Details</a></td>
                                </tr>
                            @endforeach
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