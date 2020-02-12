@extends('layouts.master')

@section('title')
    Vehicle List
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card">

            <div class="card-header">
                <div class="card-title">
                    <h3>Vehicles <a href="/new_vehicle" class="btn btn-primary btn-md btn-round" style="float: right; margin: 0px; background-color: #005CA5;">+ Vehicle</a></h3>
                </div>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table">

                        <thead class="text-info">
                            <th style="font-weight: 500;">Plate No.</th>
                            <th style="font-weight: 500;">Type</th>
                            <th style="font-weight: 500;">Color</th>
                            <th style="text-align: center; font-weight: 500;">Action</th>
                        </thead>

                        <tbody>

                            @foreach($result as $row)
                                <tr>
                                    <td>{{$row['plate_no']}}</td>
                                    <td>{{$row['type']}}(Model: {{$row['model']}})</td>
                                    <td>{{$row['color']}}</td>
                                    <td style="text-align: center;">
                                        <a href="/view_vehicle/{{$row['vehicle_id']}}" class="btn-xs fas fa-file-alt"></a>
                                        <a href="/edit_vehicle/{{$row['vehicle_id']}}" class="btn-xs fas fa-edit"></a>
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