@extends('layouts.master')

@section('title')
    Sales
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-link"> @yield('title')</h4>
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
                            Date
                            </th>
                            <th>
                            Actions
                            </th>
                        </thead>
                        <tbody>
                            @foreach($result as $row)
                                <tr>
                                    <td><a href="/view_accounts/{{$row['client_id']}}">{{$row['lastname']}}, {{$row['firstname']}}</a></td>
                                    <td>{{$row['remarks']}}</td>
                                    <td>{{$row['status']}}</td>
                                    <td><a href="/view_walkin/{{$row['client_id']}}" class="btn-sm"><i class="now-ui-icons files_paper"></i></a></td>
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