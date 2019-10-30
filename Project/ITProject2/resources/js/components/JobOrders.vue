<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Job Orders</h3>
                <div class="card-tools">
                    <button class="btn btn-success" @click="addModal()">
                        Create Job Order
                        <i class="fas fa-user-plus fa-fw"></i>
                    </button>
                    
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>Job Order ID</th>
                    <th>Customer Name</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  <tr v-for="job_order in job_orders.data" :key="job_order.jo_id"> <!--v-for="provider in providers.data" :key="provider.provider_id"-->
                    <td>{{job_order.jo_id}}</td>
                    <td>{{job_order.firstname}} {{job_order.lastname}}</td>
                    <td>09/30/2019</td>
                    <td>{{job_order.status}}</td>
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
                        <h5 class="modal-title" id="infoLabel">Job Order Info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!--body -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-xs-center">
                                    <h2>Invoice for Job order</h2>
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
                                                        <td class="emptyrow text-xs-right"><button class="btn btn-success" data-dismiss="modal">Done</button></td>
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
        <div class="modal fade" id="addNewJo" tabindex="-1" role="dialog" aria-labelledby="addNewJoLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-width" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNewJoLabel">Job Order Info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!--body -->
                    <form @submit.prevent="updateState ? updateJo() : createJo()">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-xs-center">
                                    <h2>New Job Order</h2>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12 col-md-3 col-lg-6">
                                        <div class="card height">
                                            <div class="card-header">Customer Info</div>
                                            <div class="card-block p-2">
                                                <multiselect v-model="value" :options="options" :custom-label="fullName" id="role" name="clients" class="form-control form-control-sm" :class="{
                                                'is-invalid': form.errors.has('clients') }" placeholder="Customer Name" label="firstname" track-by="lastname">
                                                    </multiselect>  
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-md-3 col-lg-6">
                                        <div class="card  height">
                                            <div class="card-header">Mechanics</div>
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
                                            <div class="card-header">Vehicle Info</div>
                                            <div class="card-block p-2">
                                                  <input class="form-control form-control-sm" name="plateno" type="text" placeholder="Plate No.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3 col-lg-6">
                                        <div class="card height">
                                            <div class="card-header">Services</div>
                                            <div class="card-block p-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cb1">
                                                <label class="form-check-label" for="cb1">
                                                    Wheel Alignment
                                                </label>
                                                </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cb2">
                                                <label class="form-check-label" for="cb2">
                                                    Lifting
                                                </label>
                                                </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cb3">
                                                <label class="form-check-label" for="cb3">
                                                    Restoration
                                                </label>
                                                </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cb4">
                                                <label class="form-check-label" for="cb4">
                                                    Vehicle Painting
                                                </label>
                                                </div>   
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cb5">
                                                <label class="form-check-label" for="cb5">
                                                    Product Installation
                                                </label>
                                                </div> 
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
                                                    <th><strong>Product Name</strong></th>
                                                    <th><strong>Quantity</strong></th>
                                                    <th><strong>Price</strong></th>
                                                    <th><strong>Total</strong></th>
                                                    <th style="text-align: center;">
                                                    <a v-on:click="addRow" class="addRow">
                                                        <i class="btn btn-success fas fa-plus"></i>
                                                        </a>
                                                    </th>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="(addTd, index) in addRows">
                                                        <td>
                                                            <select class="form-control"
                                                                    v-model="addTd.product_name">
                                                                <option v-for="product in products.data" v-bind:value="product.product_id">
                                                                    {{product.product_name}}
                                                                </option>
                                                            </select>

                                                        </td>
                                                        <td>
                                                            <input class="form-control" type="text" placholder="Quantity" v-model="addTd.quantity"></input>
                                                        </td>
                                                        <td>
                                                            <select class="form-control"
                                                                    v-model="addTd.price">
                                                                <option v-for="product in products.data" v-bind:value="product.product_id">
                                                                    {{product.price}}
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        <td>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                        <td>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button v-show="!updateState" type="submit" class="btn btn-primary">Create</button>
                                                        </td>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--body end-->
                </div>
            </div>
        </div>
    </div>
</template>
<script type="text/javascript" src="node_modules/vuejs/dist/vue.min.js"></script>
<script type="text/javascript" src="node_modules/vue-simple-search-dropdown/dist/vue-simple-search-dropdown.min.js"></script>
<script>
  import Multiselect from 'vue-multiselect'
    export default {
        components: { Multiselect },
        data(){
            return{
                value: null,
                addRows: [],
                updateState: false,
                clients : {},
                products : {},
                mechanic : {},
                job_orders : {},
                vehicle : {},
                result : {},
                form: new Form({
                    jo_id : '',
                    client_id : '',
                    mechanic_id : '',
                    vehicle_id : '',
                    services : '',
                    product_id : '',
                    status: ''
                }),
                
            }
        },
        methods:{
        fullName ({ firstname, lastname}){
            return `${firstname} ${lastname}`
        },
        addRow() {
        this.addRows.push({
        });
        },
        createJo(){
                this.$Progress.start();
                this.form.post('api/jo').then(()=>{
                $('#addNewJo').modal('hide')
                Fire.$emit('reloadAfter');
                Toast.fire({
                    type: 'success',
                    title: 'Successfully added Job Order'
                })
                this.$Progress.finish();
                })
            },
            addModal(){
                this.updateState=false;
                this.form.reset();
                $('#addNewJo').modal('show')
            },

        loadJo: function () {
            axios.get('api/jo').then(({data}) => (this.job_orders = data)); 
        },

        loadProducts: function () {
            axios.get('api/product').then(({data}) => (this.products = data)); 
        },

        loadCustomers: function () {
            axios.get('api/client').then(({data}) => (this.clients = data)); 
        },

        paginate(page = 1) {
			axios.get('api/jo?page=' + page)
				.then(response => {
					this.job_order = response.data;
				});
		    }
        },
        mounted() {
            Fire.$on('search', () => {
                let query = this.$parent.search;
                axios.get('api/findMe?q=' + query)
                .then((data)=>{
                    this.job_order = data.data
                })
                .catch(()=>{

                });
            });
            this.loadJo();
            this.loadProducts();
            this.loadCustomers();
            Fire.$on('reloadAfter',() => {
                this.loadJo();
            });
        }
    }
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>