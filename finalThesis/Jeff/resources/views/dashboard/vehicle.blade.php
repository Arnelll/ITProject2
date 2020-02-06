@extends('layouts.master')

@section('title')
    Vehicle List
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-link"> @yield('title')<a href="/new_vehicle" class="btn btn-primary btn-md btn-round" style="margin-left:80%;">+ Vehicle</a></h4>
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
                            Color
                            </th>
                            <th>
                            Action
                            </th>
                        </thead>
                        <tbody>
                            @foreach($result as $row)
                                <tr>
                                    <td>{{$row['plate_no']}}</td>
                                    <td>{{$row['type']}}(Model: {{$row['model']}})</td>
                                    <td>{{$row['color']}}</td>
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