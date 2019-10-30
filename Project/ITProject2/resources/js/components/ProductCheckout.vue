<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Checkout</h3>
                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#addPurchaseOrder"><!--@click="addProvider()-->
                        Add Product Checkout
                        <i class="fas fa-user-plus fa-fw"></i>
                    </button>
                    
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>Job Order No.</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Action</th>
                    
                  </tr>
                  <tr> <!--v-for="provider in providers.data" :key="provider.provider_id-->
                    <td>1</td>
                    <td>Wheels</td>
                    <td>4</td>
                    <td>
                        <a>
                            <i class="fas fa-eye text-teal" data-toggle="modal" data-target="#infoModal"></i>
                        </a>
                    </td>
                  </tr>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                  <!-- <pagination :data="providers" @pagination-change-page="paginate"></pagination> -->
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-width" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="infoLabel">Product Checkout</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <div class="container">
                    <div class="col-xs-12 col-md-3 col-lg-6">
                        <div class="card  height">
                            <div class="card-header">Select Mechanic</div>
                                <div class="card-block p-2">
                                    <select class="form-control">
                                    <option>Leonardo de carpet</option>
                                    <option>Donald duck</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="container">
                    <div class="col-xs-12 col-md-3 col-lg-6">
                        <div class="card  height">
                            <div class="card-header">Select Job Order</div>
                                <div class="card-block p-2">
                                    <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    </select>
                                </div>
                        </div>
                    </div>
                </div>

                    <!--body -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-xs-center">
                                    <h2>Products</h2>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12 col-md-3 col-lg-6">
                                        <div class="card height">
                                            <div class="card-header">Customer Info</div>
                                            <div class="card-block p-2">
                                                <strong>Name:</strong> JC Ramos <br>
                                                <strong>Address:</strong> Kangkongan <br>
                                                <strong>Contact No.:</strong> 09696969696 <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3 col-lg-6">
                                        <div class="card height">
                                            <div class="card-header">Mechanic</div>
                                            <div class="card-block p-2">
                                            Jc Ramos
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3 col-lg-6">
                                        <div class="card  height">
                                            <div class="card-header">Vehicle Info</div>
                                            <div class="card-block p-2">
                                            <strong>Model:</strong> Tricycle <br>
                                            <strong>Color:</strong> Rainbow <br>
                                            <strong>Plate No.:</strong> c4Nzer69 <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3 col-lg-6">
                                        <div class="card  height">
                                            <div class="card-header">Services</div>
                                            <div class="card-block p-2">
                                            Lifting
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card ">
                                    <div class="card-header">
                                        <h3 class="text-xs-center"><strong>Parts & Materials</strong></h3>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <td><strong>Product Name</strong></td>
                                                        <td class="text-xs-center"><strong>Item Price</strong></td>
                                                        <td class="text-xs-center"><strong>Product Quantity</strong></td>
                                                        <td class="text-xs-right"><strong>Total</strong></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tires</td>
                                                        <td class="text-xs-center">1000</td>
                                                        <td class="text-xs-center">5</td>
                                                        <td class="text-xs-right">5000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rims</td>
                                                        <td class="text-xs-center">300</td>
                                                        <td class="text-xs-center">10</td>
                                                        <td class="text-xs-right">3000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Brake Pad</td>
                                                        <td class="text-xs-center">10</td>
                                                        <td class="text-xs-center">4</td>
                                                        <td class="text-xs-right">40</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow text-xs-center"><strong>Grand Total</strong></td>
                                                        <td class="emptyrow text-xs-right">8540</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow text-xs-center"></td>
                                                        <td class="emptyrow text-xs-right"><button class="btn btn-success">Update</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--body end-->
                </div>
            </div>
        </div>
        <div class="modal fade" id="addPurchaseOrder" tabindex="-1" role="dialog" aria-labelledby="infoLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-width" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="infoLabel">Product Checkout</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!--body -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-xs-center">
                                    <h2>Product Checkout </h2>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12 col-md-3 col-lg-6">
                                        <div class="card  height">
                                            <div class="card-header">Enter Mechanic</div>
                                            <div class="card-block p-2">
                                                <select class="form-control">
                                                <option>Leonardo de carpet</option>
                                                <option>Donald duck</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-md-3 col-lg-6">
                                        <div class="card  height">
                                            <div class="card-header">Enter Job Order</div>
                                            <div class="card-block p-2">
                                                <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card ">
                                    <div class="card-header">
                                        <h3 class="text-xs-center"><strong>Products</strong></h3>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <td><strong>Product Name</strong></td>
                                                        <td class="text-xs-right"><strong>Quantity</strong></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input class="form-control form-control-md" name="product_name" type="text" placeholder="Product Name"></td>
                                                        <td><input class="form-control form-control-md col-xs-2" name="order_quantity" type="text" placeholder="Quantity"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><button class="btn btn-success fas fa-plus"></button></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow text-xs-center"><button class="btn btn-success">Close</button></td>
                                                        <td class="emptyrow text-xs-right"><button class="btn btn-success">Confirm</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--body end-->
                </div>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>