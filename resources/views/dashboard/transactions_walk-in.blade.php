@extends('layouts.master')

@section('title')
    Transactions(Walk-in)
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-link"> @yield('title')<a href="/new_walkin" class="btn btn-warning btn-sm btn-round">+ Transaction</a></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                            Client Name
                            </th>
                            <th>
                            Actions
                            </th>
                        </thead>
                        <tbody>
                            @foreach($result as $row)
                                <tr>
                                    <td>{{$row['lastname']}}, {{$row['firstname']}}</td>
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