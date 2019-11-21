<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Product Checkout</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>JobOrderNo</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Action</th>
                    
                  </tr>
                  <tr v-for="transaction2 in transactions2.data" :key="transaction2.jo_id">
                    <td>{{transaction2.transaction2_id}}</td>
                    <td>{{transaction2.product_name}}</td>
                    <td>{{transaction2.quantity}}</td>
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
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-width" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h3 class="modal-title" id="infoLabel"><strong> Product Checkout </strong></h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!--body -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <div class="text-xs-center">
                                    <h5>Information</h5>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12 col-md-3 col-lg-6">
                                        <div class="card height">
                                            <div class="card-header bg-success">Customer Info</div>
                                            <div class="card-block p-2" v-for="transaction2 in transactions2.data" :key="transaction2.jo_id">
                                                <strong>First Name:</strong> {{transaction2.firstname}} {{transaction2.lastname}}<br>
                                                <strong>Contact No.:</strong> {{transaction2.contact_no}} <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3 col-lg-6">
                                        <div class="card height">
                                            <div class="card-header bg-success">Mechanic</div>
                                            <div class="card-block p-2" v-for="transaction2 in transactions2.data" :key="transaction2.jo_id">
                                            {{transaction2.firstname}} {{transaction2.lastname}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3 col-lg-6">
                                        <div class="card  height">
                                            <div class="card-header bg-success">Vehicle Info</div>
                                            <div class="card-block p-2" v-for="transaction2 in transactions2.data" :key="transaction2.jo_id">
                                            <strong>Type:</strong> {{transaction2.vehicletype}} <br>
                                            <strong>Plate No.:</strong> {{transaction2.plate_no}} <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3 col-lg-6">
                                        <div class="card  height">
                                            <div class="card-header bg-success">Services</div>
                                            <div class="card-block p-2" v-for="transaction2 in transactions2.data" :key="transaction2.jo_id">
                                            {{transaction2.service_name}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card ">
                                    <div class="card-header bg-info">
                                        <h5 class="text-xs-center">Parts & Materials</h5>
                                            <i class="p-2 btn btn-success fas fa-plus bg-secondary"></i>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <td><strong>Product Name</strong></td>
                                                        <td class="text-xs-center"><strong>Product</strong></td>
                                                        <td class="text-xs-center"><strong>Product Quantity</strong></td>
                                                        <td class="text-xs-right"><strong>Total</strong></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="transaction2 in transactions2.data" :key="transaction2.jo_id">
                                                        <td>{{transaction2.product_name}}</td>
                                                        <td class="text-xs-center">{{transaction2.price}}</td>
                                                        <td class="text-xs-center">{{transaction2.quantity}}</td>
                                                        <td class="text-xs-right">{{transaction2.Total}}</td>
                                                    </tr>
                                                    <tr></tr>
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
    </div>
</template>
<script type="text/javascript" src="node_modules/vuejs/dist/vue.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="node_modules/vue-simple-search-dropdown/dist/vue-simple-search-dropdown.min.js"></script>
<script>
    export default {
        data() {
            return {
                transactions2: {},
                form: new Form({
                    jobOrderNo : '',
                    product : '',
                    quantity : '',
                    total: '',
                    firstname: '',
                    lastname: ''

                })
            }
        },
        methods: {
            createProductCheckout (){
                this.form.post('api/productCheckout');
            },

            loadProductCheckout() {
                axios.get('api/productCheckout').then(({data}) => (this.transactions2 = data));
            }

            
        },
        mounted(){
            this.loadProductCheckout();
        }
    }    


</script>
