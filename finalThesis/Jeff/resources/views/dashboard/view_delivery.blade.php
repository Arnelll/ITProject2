@extends('layouts.master')

@section('title')
    Delivery
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card">
        
            <div class="card-header">
                <div class="card-title">
                    <h3>Delivery<a href="/new_delivery" class="btn btn-primary btn-md btn-round" style="float: right; margin: 0px; background-color: #005CA5;">+ Delivery</a></h3>
                </div>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table">

                        <thead class="text-info">
                            <th style="font-weight: 500;">Supplier</th>
                            <th style="font-weight: 500;">Delivery Date</th>
                            <th style="font-weight: 500;">Product(s)</th>
                            <th style="font-weight: 500;">Quantity</th>
                        </thead>

                        <tbody>
                                <tr>
                                    <td>Arnel & Friends</td>
                                    <td>02-10-2020</td>
                                    <td>Wheels</td>
                                    <td>10</td>
                                </tr>
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