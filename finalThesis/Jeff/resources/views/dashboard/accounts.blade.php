@extends('layouts.master')

@section('title')
    Clients
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-link"> @yield('title') <a href="/new_account" class="btn btn-primary btn-md btn-round" style="margin-left:80%;">+ Client</a></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-info">
                            <th>
                            <strong>Fullname</strong>
                            </th>
                            <th>
                            <strong>Contact</strong>
                            </th>
                            <th>
                            <strong>Address</strong>
                            </th>
                            <th>
                            <strong>Email</strong>
                            </th>
                            <th>
                            <strong>Actions</strong>
                            </th>
                        </thead>
                        <tbody>
                            @foreach($result as $row)
                                <tr>
                                    <td>{{$row['lastname']}}, {{$row['firstname']}}</td>
                                    <td>{{$row['contact_no']}}</td>
                                    <td>{{$row['address']}}</td>
                                    <td>{{$row['email']}}</td>
                                    <td><a href="/view_accounts/{{$row['client_id']}}" class="btn-sm"><i class="now-ui-icons files_paper"></i></a>
                                        <a href="/edit_account/{{$row['client_id']}}"><i class="fas fa-edit"></i></a></td>
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