<template>
    <!-- <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    
                    <h2>Invoice for purchase #PO_ID/Number</h2>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-md-3 col-lg-3 pull-left">
                        <div class="panel panel-default height">
                            <div class="panel-heading">Billing Details</div>
                            <div class="panel-body">
                                <strong>David Peere:</strong><br>
                                1111 Army Navy Drive<br>
                                Arlington<br>
                                VA<br>
                                <strong>22 203</strong><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-lg-3">
                        <div class="panel panel-default height">
                            <div class="panel-heading">Payment Information</div>
                            <div class="panel-body">
                                <strong>Card Name:</strong> Visa<br>
                                <strong>Card Number:</strong> ***** 332<br>
                                <strong>Exp Date:</strong> 09/2020<br>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-lg-3">
                        <div class="panel panel-default height">
                            <div class="panel-heading">Order Preferences</div>
                            <div class="panel-body">
                                <strong>Gift:</strong> No<br>
                                <strong>Express Delivery:</strong> Yes<br>
                                <strong>Insurance:</strong> No<br>
                                <strong>Coupon:</strong> No<br>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-lg-3 pull-right">
                        <div class="panel panel-default height">
                            <div class="panel-heading">Shipping Address</div>
                            <div class="panel-body">
                                <strong>David Peere:</strong><br>
                                1111 Army Navy Drive<br>
                                Arlington<br>
                                VA<br>
                                <strong>22 203</strong><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="text-center"><strong>Order summary</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <td><strong>Item Name</strong></td>
                                        <td class="text-center"><strong>Item Price</strong></td>
                                        <td class="text-center"><strong>Item Quantity</strong></td>
                                        <td class="text-right"><strong>Total</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Samsung Galaxy S5</td>
                                        <td class="text-center">$900</td>
                                        <td class="text-center">1</td>
                                        <td class="text-right">$900</td>
                                    </tr>
                                    <tr>
                                        <td>Samsung Galaxy S5 Extra Battery</td>
                                        <td class="text-center">$30.00</td>
                                        <td class="text-center">1</td>
                                        <td class="text-right">$30.00</td>
                                    </tr>
                                    <tr>
                                        <td>Screen protector</td>
                                        <td class="text-center">$7</td>
                                        <td class="text-center">4</td>
                                        <td class="text-right">$28</td>
                                    </tr>
                                    <tr>
                                        <td class="highrow"></td>
                                        <td class="highrow"></td>
                                        <td class="highrow text-center"><strong>Subtotal</strong></td>
                                        <td class="highrow text-right">$958.00</td>
                                    </tr>
                                    <tr>
                                        <td class="emptyrow"></td>
                                        <td class="emptyrow"></td>
                                        <td class="emptyrow text-center"><strong>Shipping</strong></td>
                                        <td class="emptyrow text-right">$20</td>
                                    </tr>
                                    <tr>
                                        <td class="emptyrow"></td>
                                        <td class="emptyrow text-center"><strong>Total</strong></td>
                                        <td class="emptyrow text-right">$978.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Purchase Orders</h3>
                <div class="card-tools">
                    <button class="btn btn-success" ><!--@click="addProvider()-->
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
                    <th>Purchase Order Name</th>
                    <th>Purchase Status</th>
                    <th>Action</th>
                  </tr>
                  <tr> <!--v-for="provider in providers.data" :key="provider.provider_id-->
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
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
                                        <div class="card  height">
                                            <div class="card-header">Billing Details</div>
                                            <div class="card-block">
                                                <strong>JC Ramos:</strong><br>
                                                Asin Rd.<br>
                                                Ammopay<br>
                                                PH<br>
                                                <strong>11 420</strong><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3 col-lg-3">
                                        <div class="card  height">
                                            <div class="card-header">Payment Information</div>
                                            <div class="card-block">
                                                <strong>Card Name:</strong> Visa<br>
                                                <strong>Card Number:</strong> ***** 332<br>
                                                <strong>Exp Date:</strong> 09/2099<br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3 col-lg-3">
                                        <div class="card  height">
                                            <div class="card-header">Order Preferences</div>
                                            <div class="card-block">
                                                <strong>Trucking Delivery:</strong> Yes<br>
                                                <strong>Insurance:</strong> No<br>
                                                <strong>Coupon:</strong> No<br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3 col-lg-3">
                                        <div class="card  height">
                                            <div class="card-header">Shipping Address</div>
                                            <div class="card-block">
                                                <strong>JC Ramos:</strong><br>
                                                Asin Rd.<br>
                                                Ammopay<br>
                                                PH<br>
                                                <strong>11 420</strong><br>
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
                                                        <td>Tires and Gulong</td>
                                                        <td class="text-xs-center">1000</td>
                                                        <td class="text-xs-center">5</td>
                                                        <td class="text-xs-right">5000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Titan Gel and Sex Dolls</td>
                                                        <td class="text-xs-center">300</td>
                                                        <td class="text-xs-center">10</td>
                                                        <td class="text-xs-right">3000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>asdasdasd</td>
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
                                                        <td class="emptyrow"><i class="fas fa-cannabis iconbig text-green"></i><i class="fas fa-cannabis iconbig text-green"></i><i class="fas fa-cannabis iconbig text-green"></i><i class="fas fa-cannabis iconbig text-green"></i></td>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow text-xs-center"><strong>Total</strong></td>
                                                        <td class="emptyrow text-xs-right">8540</td>
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