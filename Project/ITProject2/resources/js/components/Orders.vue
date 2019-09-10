<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Purchase Orders</h3>
                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#addPurchaseOrder"><!--@click="addProvider()-->
                        Create Purchase Order
                        <i class="fas fa-user-plus fa-fw"></i>
                    </button>
                    
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>Purchase Order ID</th>
                    <th>Order Type</th>
                    <th>Order Status</th>
                    <th>Action</th>
                  </tr>
                  <tr> <!--v-for="provider in providers.data" :key="provider.provider_id-->
                    <td>1</td>
                    <td>Delivery</td>
                    <td>Ongoing</td>
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
                        <h5 class="modal-title" id="infoLabel">Purchase Order Info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!--body -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-xs-center">
                                    <h2>Invoice for purchase order #6666</h2>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12 col-md-3 col-lg-3">
                                        <div class="card height">
                                            <div class="card-header">Billing Details</div>
                                            <div class="card-block p-2">
                                                <strong>JC Ramos:</strong><br>
                                                Asin Rd.<br>
                                                Ammopay<br>
                                                PH<br>
                                                <strong>11 420</strong><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3 col-lg-3">
                                        <div class="card height">
                                            <div class="card-header">Order Preferences</div>
                                            <div class="card-block p-2">
                                                <strong>Trucking Delivery:</strong> Yes<br>
                                                <strong>Insurance:</strong> No<br>
                                                <strong>Coupon:</strong> No<br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3 col-lg-3">
                                        <div class="card  height">
                                            <div class="card-header">Shipping Address</div>
                                            <div class="card-block p-2">
                                                <strong> Jeff Off's Road </strong><br>
                                                <strong> Quezon Hill Rd 2, Baguio, Benguet </strong>
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
                                        <h3 class="text-xs-center"><strong>Order summary</strong></h3>
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
                                                        <td class="highrow"></td>
                                                        <td class="highrow"></td>
                                                        <td class="highrow text-xs-center"><strong>Subtotal</strong></td>
                                                        <td class="highrow text-xs-right">8040</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow text-xs-center"><strong>Delivery</strong></td>
                                                        <td class="emptyrow text-xs-right">500</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow text-xs-center"><strong>Total</strong></td>
                                                        <td class="emptyrow text-xs-right">8540</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow text-xs-center"></td>
                                                        <td class="emptyrow text-xs-right">
                                                            <div class="btn-group dropright">
                                                                <button type="button" class="btn btn-primary button-grey">Status</button>
                                                                <button type="button" class="btn btn-primary dropdown-toggle px-3 button-grey" data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <span class="sr-only button-grey">Toggle Dropdown</span>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Ongoing</a>
                                                                    <a class="dropdown-item" href="#">Delivered</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="emptyrow"><i class="fas fa-cannabis iconbig text-green"></i><i class="fas fa-cannabis iconbig text-green"></i><i class="fas fa-cannabis iconbig text-green"></i><i class="fas fa-cannabis iconbig text-green"></i></td>
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
                        <h5 class="modal-title" id="infoLabel">Purchase Order Info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!--body -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-xs-center">
                                    <h2>New Purchase Order</h2>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12 col-md-3 col-lg-3">
                                        <div class="card height">
                                            <div class="card-header">Billing Details</div>
                                            <div class="card-block p-2">
                                                <input class="form-control form-control-sm" name="recipient" type="text" placeholder="Recipient">
                                                <input class="form-control form-control-sm" name="address" type="text" placeholder="Address">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-md-3 col-lg-3">
                                        <div class="card  height">
                                            <div class="card-header">Order Preferences</div>
                                            <div class="card-block p-2">
                                                <div class="btn-group dropright">
                                                    <button type="button" class="btn btn-primary button-grey">Trucking Delivery</button>
                                                    <button type="button" class="btn btn-primary dropdown-toggle px-3 button-grey" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="sr-only button-grey">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Yes</a>
                                                        <a class="dropdown-item" href="#">No</a>
                                                    </div>
                                                </div><br><br>
                                                <div class="btn-group dropright">
                                                    <button type="button" class="btn btn-primary button-grey">Insurance</button>
                                                    <button type="button" class="btn btn-primary dropdown-toggle px-3 button-grey" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="sr-only button-grey">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Yes</a>
                                                        <a class="dropdown-item" href="#">No</a>
                                                    </div>
                                                </div><br><br>
                                                <div class="btn-group dropright">
                                                    <button type="button" class="btn btn-primary button-grey">Coupon</button>
                                                    <button type="button" class="btn btn-primary dropdown-toggle px-3 button-grey" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Yes</a>
                                                        <a class="dropdown-item" href="#">No</a>
                                                    </div>
                                                </div><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3 col-lg-3">
                                        <div class="card  height">
                                            <div class="card-header">Shipping Address</div>
                                            <div class="card-block p-2">
                                                <strong> Jeff Off's Road </strong><br>
                                                <strong> Quezon Hill Rd 2, Baguio, Benguet </strong>
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
                                        <h3 class="text-xs-center"><strong>Order summary</strong></h3>
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
                                                        <td><input class="form-control form-control-sm" name="product_name" type="text" placeholder="Product Name"></td>
                                                        <td><input class="form-control form-control-sm" name="product_price" type="text" placeholder="Item Price"></td>
                                                        <td><input class="form-control form-control-sm" name="order_quantity" type="text" placeholder="Quantity"></td>
                                                        <td class="text-xs-right">0</td>
                                                    </tr>
                                                    <tr>
                                                        <td><button class="btn btn-success fas fa-plus"></button></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highrow"></td>
                                                        <td class="highrow"></td>
                                                        <td class="highrow text-xs-center"><strong>Subtotal</strong></td>
                                                        <td class="highrow text-xs-right">0</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow text-xs-center"><strong>Delivery</strong></td>
                                                        <td class="emptyrow text-xs-right">0</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="emptyrow"><i class="fas fa-cannabis iconbig text-green"></i><i class="fas fa-cannabis iconbig text-green"></i><i class="fas fa-cannabis iconbig text-green"></i><i class="fas fa-cannabis iconbig text-green"></i></td>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow text-xs-center"><strong>Total</strong></td>
                                                        <td class="emptyrow text-xs-right">0</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow text-xs-center"><button class="btn btn-success">Submit</button></td>
                                                        <td class="emptyrow text-xs-right"></td>
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