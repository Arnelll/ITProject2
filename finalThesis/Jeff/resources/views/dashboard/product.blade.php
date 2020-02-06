@extends('layouts.master')

@section('title')
    Product List
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-link"> @yield('title')<a href="/new_product" class="btn btn-primary btn-md btn-round" style="margin-left:70%;">+ Product</a></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                            Product Name
                            </th>
                            <th>
                            Quantity
                            </th>
                            <th>
                            Retail Price
                            </th>
                            <th>
                            Wholesale Price
                            </th>
                            <th>
                            Distributor Price
                            </th>
                            <th>
                            Actions
                            </th>
                        </thead>
                        <tbody>
                            @foreach($result as $row)
                                <tr>
                                    <td>{{$row['product_name']}}</td>
                                    <td>{{$row['quantity']}}</td>
                                    <td>{{$row['retail_price']}}</td>
                                    <td>{{$row['wholesale_price']}}</td>
                                    <td>{{$row['distributor_price']}}</td>
                                    <td><a href="/product_profile/{{$row['product_id']}}"><i class="now-ui-icons files_paper"></i></a>
                                        <a href="/edit_product/{{$row['product_id']}}"><i class="fas fa-edit"></i></a></td>
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