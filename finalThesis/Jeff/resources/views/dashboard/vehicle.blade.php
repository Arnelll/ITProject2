@extends('layouts.master')

@section('title')
    Vehicle List
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
<<<<<<< HEAD
                <h4 class="card-link"> @yield('title')<a href="#" class="btn-warning btn-sm btn-round" data-toggle="modal" data-target="#newProduct">+ Vehicle</a></h4> 
=======
            <h4 class="card-link"> @yield('title')<a href="/new_vehicle" class="btn btn-primary">+ Vehicle</a></h4>
>>>>>>> 230420724aa8bc3749e3c0972819e8124427b7b6
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                            Plate No.
                            </th>
                            <th>
                            Type
                            </th>
                            <th>
                            Action
                            </th>
                        </thead>
                        <tbody>
                            @foreach($result as $row)
                                <tr>
                                    <td>{{$row['plate_no']}}</td>
                                    <td>{{$row['type']}}</td>
                                    <td><a href="/view_vehicle/{{$row['vehicle_id']}}"><i class="now-ui-icons files_paper"></i></a></td>
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