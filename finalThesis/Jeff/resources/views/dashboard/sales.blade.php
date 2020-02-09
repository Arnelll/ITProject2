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
                            <th style="font-weight: 500;">Total</th>
                            <th style="text-align: center; font-weight: 500;">Actions</th>
                        </thead>

                        <tbody>


                                <tr>
                                    <td>testing</td>
                                    <td>5</td>
                                    <td>   </td>
                                    <td>02-10-2020</td>
                                    <td style="text-align: right;">100.00</td>
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