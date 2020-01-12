@extends('layouts.master')

@section('title')
    Product List
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-link"> @yield('title')<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#newProduct">+ Product</a></h4> 
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
                            Email
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
                                    <td>{{$row['price']}}</td>
                                    <td><a href="/product_profile/{{$row['product_id']}}"><i class="now-ui-icons files_paper"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="newProduct" tabindex="-1" role="dialog" aria-labelledby="newProductLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newProductLabel">New Stock Card</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <body>
        <div class="container">
        <section class="panel">
        <div class="panel panel-footer">
        {!!Form::open(array('route'=>'product_insert','id'=>'formsave','method'=>'post'))!!}
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                <input type="text" name="productname" class="form-control" placeholder="Product Name">
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="form-group">
                <input type="text" name="qty" class="form-control" placeholder="Quantity">
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="form-group">
                <input type="text" name="price" class="form-control" placeholder="Price">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="form-group">
                <input type="text" name="supplier" class="form-control" placeholder="Supplier">
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="form-group">
                <input type="text" name="category" class="form-control" placeholder="Category">
                </div>
            </div>
            <div class="col-lg-4 col-sm-3">
                <div class="form-group">
                <input type="text" name="brand" class="form-control" placeholder="Brand">
                </div>
            </div>
            <div class="col-lg-4 col-sm-3">
                <div class="form-group">
                <input type="text" name="provider" class="form-control" placeholder="Provider">
                </div>
            </div>
            
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!!Form::submit('Save',array('class'=>'btn btn-primary'))!!}
      </div>
</div>
        {!!Form::hidden('_token',csrf_token())!!}
        {!!Form::close()!!}
            </div>
        </section>
    </div>
</body>
      </div>
    </div>
  </div>
</div>

@endsection
    
@section('scripts')

@endsection