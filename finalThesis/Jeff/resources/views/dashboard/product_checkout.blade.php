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
                            <th style="font-weight: 500;">Client</th>
                            <th style="font-weight: 500;">Product(s)</th>
                            <th style="font-weight: 500;">Quantity</th>
                            <th style="font-weight: 500;">Total</th>
                            <th></th>
                            <th style="font-weight: 500;">Status</th>
                            <th style="text-align: center; font-weight: 500;">Actions</th>
                        </thead>

                        <tbody>


                                <tr>
                                    <td>117</td>
                                    <td>Arnel Arnel</td>
                                    <td>Testing</td>
                                    <td>69</td>
                                    <td style="text-align: right;">100.00</td>
                                    <td></td>
                                    <td>Ongoing</td>
                                    <td style="text-align: center;">
                                        <a href="#" class="btn-xs fas fa-file-alt"></a>
                                        <a href="#" class="btn-xs fas fa-edit"></a>
                                    </td>
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