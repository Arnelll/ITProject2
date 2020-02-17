@extends('layouts.master')

@section('title')
    Product List
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card">
        
            <div class="card-header">
                <div class="card-title">
                    <h3>Products <a href="/new_product" class="btn btn-primary btn-md btn-round" style="float: right; margin: 0px; background-color: #005CA5;">+ Product</a></h3>
                </div>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table">

                        <thead class="text-info">
                            <th style="font-weight: 500;">Product Name</th>
                            <th style="font-weight: 500;">Quantity</th>
                            <th style="font-weight: 500; text-align: right;">Retail Price</th>
                            <th style="font-weight: 500; text-align: right;">Wholesale Price</th>
                            <th style="font-weight: 500; text-align: right;">Distributor Price</th>
                            <th style="text-align: center; font-weight: 500;">Actions</th>
                        </thead>

                        <tbody>

                            @foreach($result as $row)
                                <tr>
                                    <td>{{$row['product_name']}}</td>
                                    <td>{{$row['quantity']}}</td>
                                    <td style="text-align: right;">{{$row['retail_price']}}</td>
                                    <td style="text-align: right;">{{$row['wholesale_price']}}</td>
                                    <td style="text-align: right;">{{$row['distributor_price']}}</td>
                                    <td style="text-align: center;">
                                        <a href="/product_profile/{{$row['product_id']}}" class="btn-xs fas fa-file-alt"></a>
                                        <a href="/edit_product/{{$row['product_id']}}" class="btn-xs fas fa-edit"></a>
                                    </td>
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