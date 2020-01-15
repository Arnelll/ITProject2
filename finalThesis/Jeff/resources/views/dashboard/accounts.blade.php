@extends('layouts.master')

@section('title')
    Accounts
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-link"> @yield('title')<a href="/new_account" class="btn btn-warning btn-sm btn-round">+ Account</a></h4>
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