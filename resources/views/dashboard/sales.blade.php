@extends('layouts.master')

@section('title')
    Sales List
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card">
        
            <div class="card-header">
                <div class="card-title">
                    <h3>Sales <a href="/new_sales" class="btn btn-primary btn-md btn-round" style="float: right; margin: 0px; background-color: #005CA5;">+ Sales</a></h3>
                </div>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table">

                        <thead class="text-info">
                            <th style="font-weight: 500;">Product Name</th>
                            <th style="font-weight: 500;">Quantity</th>
                            <th style="font-weight: 500;">Client (Optional)</th>
                            <th style="font-weight: 500;">Date</th>
                            <th style="font-weight: 500;text-align: right;">Total</th>
                        </thead>

                        <tbody>

                            @foreach($result as $row)
                                <tr>
                                    <td>{{$row['product_name']}}</td>
                                    <td>{{$row['quantity']}}</td>
                                    @if($row['lastname'] == null)
                                    <td>Anonymous</td>
                                    @else
                                    <td>{{$row['lastname']}}, {{$row['firstname']}}</td>
                                    @endif
                                    <td>{{$row['date_created']}}</td>
                                    <td style="text-align: right;">{{$row['total']}}</td>
                                </tr>
                            @endforeach
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