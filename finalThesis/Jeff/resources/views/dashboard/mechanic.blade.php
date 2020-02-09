@extends('layouts.master')

@section('title')
    Mechanics
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card">

            <div class="card-header">
                <div class="card-title">
                    <h3>Mechanics <a href="/new_mechanic" class="btn btn-primary btn-md btn-round" style="float: right; margin: 0px; background-color: #005CA5;">+ Mechanic</a></h3>
                </div>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table">

                        <thead class="text-info">
                            <th style="font-weight: 500;">Fullname</th>
                            <th style="font-weight: 500;">Contact</th>
                            <th style="font-weight: 500;">Address</th>
                            <th style="text-align: center; font-weight: 500;">Action</th>
                        </thead>

                        <tbody>
                            
                            @foreach($result as $row)

                                <tr>
                                    <td>{{$row['last_name']}}, {{$row['first_name']}}</td>
                                    <td>{{$row['contact_no']}}</td>
                                    <td>{{$row['address']}}</td>
                                    <td style="text-align: center;">
                                        <a href="#" class="btn-xs fas fa-user-minus" onClick="alert('Mechanic Removed');"></a>
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