@extends('layouts.master')

@section('title')
    Job Orders
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card">

            <div class="card-header">
                <div class="card-title">
                    <h3>Job Orders <a href="/new_jooo" class="btn btn-primary btn-md btn-round" style="float: right; margin: 0px; background-color: #005CA5;">+ Job Order</a></h3>
                </div>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table">

                        <thead class="text-info">
                            <th style="font-weight: 500;">Job Order No.</th>
                            <th style="font-weight: 500;">Client Name</th>
                            <th style="font-weight: 500;">Service</th>
                            <th style="font-weight: 500;">Date</th>
                            <th style="text-align: center; font-weight: 500">Actions</th>
                        </thead>

                        <tbody>

                            @foreach($result as $row)
                                <tr>
                                    <td>{{$row['jo_id']}}</td>
                                    <td><a href="/view_accounts/{{$row['client_id']}}">{{$row['lastname']}}, {{$row['firstname']}}</a></td>
                                    <td>{{$row['remarks']}}</td>
                                    <td>{{$row['date_created']}}</td>
                                    <td style="text-align: center;">
                                        <a href="/view_service/{{$row['client_id']}}/{{$row['jo_id']}}" class="btn-xs fas fa-file-alt"></a>
                                        <a href="/view_checkout/{{$row['jo_id']}}" class="btn-xs fas fa-shopping-cart"></a>
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