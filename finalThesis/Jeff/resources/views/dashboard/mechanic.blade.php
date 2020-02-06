@extends('layouts.master')

@section('title')
    Mechanics
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-link"> @yield('title')<a href="/new_mechanic" class="btn btn-primary btn-md btn-round" style="margin-left:80%;">+ Mechanic</a></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                            Fullname
                            </th>
                            <th>
                            Contact
                            </th>
                            <th>
                            Address
                            </th>
                            <th>
                            Action
                            </th>
                        </thead>
                        <tbody>
                        @foreach($result as $row)
                                <tr>
                                    <td>{{$row['last_name']}}, {{$row['first_name']}}</td>
                                    <td>{{$row['contact_no']}}</td>
                                    <td>{{$row['address']}}</td>
                                    <a href="#"><td class="btn btn-md btn-primary" onClick="alert('Mechanic Removed');">X</td></a>
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