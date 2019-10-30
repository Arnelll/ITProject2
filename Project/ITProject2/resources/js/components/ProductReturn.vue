<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Return</h3>
                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#addPurchaseOrder"><!--@click="addProvider()-->
                        Add New Product Return
                        <i class="fas fa-user-plus fa-fw"></i>
                    </button>
                    
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>Client name</th>
                    <th>Job Order No.</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Provider</th>
                    <th>Reason</th>
                    <th>Status</th>
                    <th>Action</th>
                    
                  </tr>
                  <tr> <!--v-for="provider in providers.data" :key="provider.provider_id-->
                    <td>Jarnel Bagusdan</td>
                    <td>1</td>
                    <td>Rims</td>
                    <td>4</td>
                    <td>Vossen</td>
                    <td>Crack</td>
                    <td>Pending</td>

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
                        <h5 class="modal-title" id="infoLabel">Product Return</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <div class="container">
                    <div class="col-xs-12 col-md-3 col-lg-6">
                        <div class="card  height">
                            <div class="card-header">Select Client Name</div>
                                <div class="card-block p-2">
                                    <select class="form-control">
                                    <option>Jarnel Bagusdan</option>
                                    <option>Donald Truck</option>
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
                                                <strong>Name:</strong> Jarnel Bagusdan <br>
                                                <strong>Address:</strong> La Trinidad <br>
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
                                            <strong>Plate No.:</strong> SukaBlyat <br>
                                            </div>
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
                        <h5 class="modal-title" id="infoLabel">Add Product Return</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!--body -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-xs-center">
                                    <h2>Product Return</h2>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12 col-md-3 col-lg-6">
                                        <div class="card  height">
                                            <div class="card-header">Enter Client</div>
                                            <div class="card-block p-2">
                                                <select class="form-control">
                                                <option>Jarnel Bagusdan</option>
                                                <option>Donald Truck</option>
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
                                                        <td class="text-xs-right"><strong>Provider</strong></td>
                                                        <td class="text-xs-right"><strong>Status</strong></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input class="form-control form-control-md" name="product_name" type="text" placeholder="Product Name"></td>
                                                        <td><input class="form-control form-control-md col-xs-2" name="order_quantity" type="text" placeholder="Quantity"></td>
                                                        <td><input class="form-control form-control-md col-xs-2" name="order_quantity" type="text" placeholder="Provider"></td>
                                                        <td><input class="form-control form-control-md col-xs-2" name="order_quantity" type="text" placeholder="Status"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><button class="btn btn-success fas fa-plus"></button></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                        <td></td>
                                                    <tr>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">
                                                                <td class="text-xs-center">Attachment(s)</td>
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <span class="btn btn-default btn-file">
                                                                    <td><input id="input-2" name="input2[]" type="file" class="file" multiple data-show-upload="true" data-show-caption="true"></td>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </tr>
                                                    <tr>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow text-xs-right"><button class="btn btn-success">Close</button></td>
                                                        <button class="btn btn-success">Confirm</button>
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