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
                            <th style="font-weight: 500;">Action</th>
                        </thead>

                        <tbody>
                                @foreach($result as $row)
                                <tr>
                                    <td>{{$row['name']}}</td>
                                    <td>{{$row['delivery_date']}}</td>
                                    <td><a href="/view_delivery" class="btn-xs fas fa-file-alt"></td>
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