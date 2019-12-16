@extends('layouts.master')

@section('title')
    Product List
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-link"> @yield('title')<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#newProduct">New Product</a></h4> 
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
      <h6 class="modal-title" id="newProductLabel">Primary Stock Card Details</h6>
      <div class="form-group row">
      <label for="inputDate" class="col-sm-2 col-form-label">Date Created</label>
        <div class="col-sm-5">
        <input type="date" class="form-control" id="inputDate" placeholder="Date">
      </div>
      </div>

      <div class="form-group row">
      <label for="ProductName" class="col-sm-2 col-form-label">Product Name</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" id="ProductName" placeholder="product name">
      </div>
      </div>

      <h6 class="modal-title" id="newProductLabel">Product Details</h6>
      <div class="form-group row">
      <label for="PartNumber" class="col-sm-2 col-form-label">Part No.</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" id="PartNumber" placeholder="Part No.">
      </div>
      </div>

      <div class="form-group row">
      <label for="BrandName" class="col-sm-2 col-form-label">Brand Name</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" id="BrandName" placeholder="Brand Name">
      </div>
      </div>

      <div class="form-group row">
      <label for="Category" class="col-sm-2 col-form-label">Category</label>
        <div class="col-sm-5">
      <select class="form-control" id="Category">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
      </div>
      </div>

      <div class="form-group row">
      <label for="Type" class="col-sm-2 col-form-label">Type</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" id="Type" placeholder="Type">
      </div>
      </div>

      <div class="form-group row">
      <label for="Size" class="col-sm-2 col-form-label">Size</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" id="Size" placeholder="Size">
      </div>
      </div>
      
      <div class="form-group row">
      <label for="SellingPrice" class="col-sm-2 col-form-label">Selling Price</label>
      <div class="input-group col-sm-5">
        <div class="input-group-prepend">
          <div class="input-group-text">₱</div>
        </div>
        <input type="text" class="form-control" id="SellingPrice" placeholder="0.00">
      </div>
      </div>


    <div class="form-group row">
    <label for="RestockLevel" class="col-sm-2 col-form-label">Restock Level</label>
        <div class="col-sm-5">
      <input type="text" class="form-control" id="RestockLevel" placeholder="0">
    </div>
  </div>


  <h6 class="modal-title" id="newProductLabel">Supplier Details</h6>
  <div class="form-row align-items-center">
    <div class="form-group col-md-8">
      <label for="SupplierName">Supplier Name</label>
      <select class="form-control" id="SupplierName">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    </div>

  
    <div class="form-group col-md-5">
    <label for="UnitCost" class="col-sm-5 col-form-label">Unit Cost</label>
      <div class="input-group col-sm-8">
        <div class="input-group-prepend">
          <div class="input-group-text">₱</div>
        </div>
        <input type="text" class="form-control" id="UnitCost" placeholder="0.00">
    </div>
    </div>
  
    <div class="form-group col-md-5">
      <label for="Quantity" class="col-sm-2 col-form-label">Qty</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" id="Quantity" placeholder="0">
      </div>
      </div>


    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection
    
@section('scripts')

@endsection