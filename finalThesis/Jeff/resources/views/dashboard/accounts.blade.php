@extends('layouts.master')

@section('title')
    Clients
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card">

            <div class="card-header">
                <div class="card-title">
                    <h3>Clients <a href="/new_account" class="btn btn-primary btn-md btn-round" style="float: right; margin: 0px;">+ Client</a></h3>
                </div>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table">

                        <thead class="text-info">
                            <th style="font-weight: 500;">Fullname</th>
                            <th style="font-weight: 500;">Contact</th>
                            <th style="font-weight: 500;">Address</th>
                            <th style="font-weight: 500;">Email</th>
                            <th style="text-align: center; font-weight: 500;">Actions</th>
                        </thead>

                        <tbody>

                            @foreach($result as $row)
                                <tr>
                                    <td>{{$row['lastname']}}, {{$row['firstname']}}</td>
                                    <td>{{$row['contact_no']}}</td>
                                    <td>{{$row['address']}}</td>
                                    <td>{{$row['email']}}</td>
                                    <td style="text-align: center;">
                                        <a href="/view_accounts/{{$row['client_id']}}" class="btn-xs fas fa-file-alt"></a>
                                        <a href="/edit_account/{{$row['client_id']}}" class="btn-xs fas fa-edit"></a>
                                    </td>
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