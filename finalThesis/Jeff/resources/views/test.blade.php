<div class="container">
    <section class="panel">
        <header>
            <h3><strong style="color:#1064A5;">Job Order Details (Date Created: {{$araw}})</strong></h3>
            <hr>
        </header>
    </section>
    <div class="row">
        
        <strong><center>Customer Details</center></strong>
        <br>
        <strong>Client:</strong> {{$clients->lastname}},{{$clients->firstname}} <br>
        <strong>Vehicle:</strong> {{$vehicle->model}} ({{$vehicle->type}}) | <strong>Plate No:</strong> <strong style="color:#FF5F5F;">{{$vehicle->plate_no}}</strong> <br>
        <strong>Mechanic:</strong> {{$mechanic->last_name}}, {{$mechanic->first_name}} <br>
        @if($jo->status=='Pending' || 'Ongoing')
        <strong>Service to be rendered:</strong> {{$jo->remarks}} <br>
        @else
        <strong>Service rendered:</strong> {{$jo->remarks}} <br>
        @endif
        <strong>Job Order Status:</strong> {{$jo->status}} <br>
        <br><br>
        @if($jo->status=='Pending' || 'Ongoing')
        <strong>List of Items to be Used:</strong><br>
        @else
        Items Used:
        @endif
        @foreach($products as $row)
        {{$row['quantity']}} of {{$row['product_name']}}<br>
        @endforeach

    </div>
</div>
    