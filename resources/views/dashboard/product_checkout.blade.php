@extends('layouts.master')

@section('title')
    Product Checkout List
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card">
        
            <div class="card-header">
                <div class="card-title">
                    <h3>Product Checkout <a href="/product_co" class="btn btn-primary btn-md btn-round" style="float: right; margin: 0px; background-color: #005CA5;">+ Product Checkout</a></h3>
                </div>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table">

                        <thead class="text-info">
                            <th style="font-weight: 500;">Job Order No.</th>
                            <th style="font-weight: 500;">Client Name</th>
                            <th style="text-align: center; font-weight: 500;">Actions</th>
                        </thead>

                        <tbody>
                        @foreach($result as $row)
                                <tr>
                                    <td>{{$row['jo_id']}}</td>
                                    <td>{{$row['lastname']}}, {{$row['firstname']}}</td>
                                    <td style="text-align: center;">
                                    <a href="/view_prodco/{{$row['jo_id']}}/{{$row['product_checkout_id']}}" class="btn-xs fas fa-file-alt"></a>
                                    </td>
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