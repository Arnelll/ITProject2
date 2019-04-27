<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Customers</h3>
                <div class="card-tools">
                   <button class="btn btn-success" @click="addModal()">
                        New Customer
                        <i class="fas fa-plus-circle fa-fw"></i>
                    </button>
                    
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>Client ID</th>
                    <th>Name(Lastname, Firstname)</th>
                    <th>Contact</th>
                    <th>Modify</th>
                  </tr> 
                  <tr v-for="client in clients.data" :key="client.client_id"> <!-- v-if="client.something == 'Condition' #For filtering-->
                    <td>{{client.client_id}}</td>
                    <td>{{client.lastname | upFirstLetter}}, {{client.firstname | upFirstLetter}} </td>
                    <td>{{client.contact_no}}</td>
                    <td>
                        <a href="#" @click="updateModal(client)">
                            <i class="fa fa-edit text-cyan"></i>
                        </a>
                        
                        <a href="#" @click="deleteCustomer(client.client_id)">
                            <i class="fa fa-trash text-red2"></i>
                        </a>

                        <a href="#" @click="loadCustomerTrans(client.client_id)">
                            <i class="fas fa-eye text-teal"></i>
                        </a>

                        <a href="#" @click="viewModal()">
                            <i class="fas fa-eye"></i>
                        </a>
                        
                    </td>
                  </tr>
                </table>
              </div>
              <div class="card-footer">
                  <pagination :data="clients" @pagination-change-page="paginate"></pagination>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- Update/Add Modal -->
        <div class="modal fade" id="addNewClient" tabindex="-1" role="dialog" aria-labelledby="addNewClientLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 v-show="!updateState" class="modal-title" id="addNewClientLabel">Add New Customer</h5>
                <h5 v-show="updateState" class="modal-title" id="updateCustomer">Update Customer Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form @submit.prevent="updateState ? updateCustomer() :createCustomer()">
                <div class="modal-body">
                    <div class="form-group">
                        <input v-model="form.firstname" type="text" name="firstname" placeholder="Firstname"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('firstname') }">
                        <has-error :form="form" field="firstname"></has-error>
                    </div>

                    <div class="form-group">
                        <input v-model="form.lastname" type="text" name="lastname" placeholder="Lastname"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('lastname') }">
                        <has-error :form="form" field="lastname"></has-error>
                    </div>

                    <div class="form-group">
                        <input v-model="form.contact_no" type="text" name="contact_no" placeholder="Contact No."
                            class="form-control" :class="{ 'is-invalid': form.errors.has('contact_no') }">
                        <has-error :form="form" field="contact_no"></has-error>
                    </div> 
                </div>
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button v-show="updateState" type="submit" class="btn btn-success">Update</button>
                        <button v-show="!updateState" type="submit" class="btn btn-primary">Create</button>
                    </div>
            </form>
            </div>
        </div>
        </div>
        <!--Update/Add Modal end-->
        <!--View Modal-->
        <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
                <div class="modal-c-tabs">
                    <!--Body-->
                    <div class="modal-body">
                        <!--Header-->
                        
                        <hr>
                        <div class="modal-dialog cascading-modal" role="document">
                            <!--Content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="heading lead">Client Activities
                                    </p>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" class="white-text">×</span>
                                    </button>
                                </div>
                                <div class="text-center">
                                    <i class="fab fa-drupal fa-4x mb-3 animated rotateIn"></i> <!-- Profile Picture if available -->
                                    <p>
                                        <strong>Bambico Mark </strong><!--Client Name here-->
                                    </p>
                                    <p>Most
                                        <strong>blyat</strong>
                                    </p>
                                </div>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#transaction" role="tab"><i class="fas fa-money-check mr-1"></i>
                                        Transactions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#about" role="tab"><i class="fas fa-info mr-1"></i>
                                        About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#logs" role="tab"><i class="fas fa-book mr-1"></i>
                                        Top Purchases</a>
                                    </li>
                                </ul>

                                <!-- Tab panels -->
                                <div class="tab-content">
                                <!--Panel 7-->
                                <div class="tab-pane fade in show active" id="transaction" role="tabpanel">

                                    <!--Body-->
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover">
                                        <tr>
                                            <th>Table okinam</th>
                                            <th>Table okinam</th>
                                            <th>Table okinam</th>
                                            <th>Table okinam</th>
                                            <th>Table okinam</th>
                                        </tr>
                                        <tr v-for="clientrans in trans.data" :key="clientrans.client_id">
                                            <td>{{clientrans.tId}}</td>
                                            <td>asd</td>
                                            <td>Karga na okinam</td>
                                            <td>Karga na okinam</td>
                                            <td>Karga na okinam</td>
                                        </tr>
                                        </table>
                                    </div>

                                </div>
                                <!--/.Panel 7-->
                                <!--Panel 8-->
                                <div class="tab-pane fade" id="about" role="tabpanel">
                                    <!--Body-->
                                    <div class="col-md-6">
                                    <br>
                                    <strong>Client ID:</strong> 1
                                    <br>
                                    <strong>Email:</strong> x@x.xx 
                                    <br>
                                    <strong>Phone:</strong> 123456789
                                    <br>
                                    <strong>Age:</strong> 50
                                    </div>
                                    <!--Body end-->
                                </div>
                                <!--/.Panel 8-->
                                <div class="tab-pane fade" id="logs" role="tabpanel">
                                    <!--Body-->
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">No. of purchase</th>
                                            <th scope="col">As of:</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">1</th>
                                            <td>Titan Gel</td>
                                            <td>526</td>
                                            <td>1/5/2019</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">2</th>
                                            <td>Sex Doll</td>
                                            <td>123</td>
                                            <td>1/4/2019</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">3</th>
                                            <td>Dildog</td>
                                            <td>155</td>
                                            <td>1/3/2019</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--Body end-->
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!--/.Content-->
                            
                        </div>
                    </div>
                </div>
        </div>
        </div>
        <!--View modal end-->
    </div>
</template>

<script>
    export default {
        data(){   
            return{
                updateState:false,
                clients : {},
                trans : {},
                form: new Form({
                    client_id: '',
                    firstname: '',
                    lastname: '',
                    contact_no: ''
                })
            }
        },
        methods: {
            updateCustomer(){
                this.$Progress.start();
                this.form.put('/api/client/'+this.form.client_id).then(()=>{
                    Swal.fire(
                            'Updated!',
                            'Customer has been updated.',
                            'success'
                            )
                    this.$Progress.finish();
                    Fire.$emit('reloadAfter');  
                }).catch(()=>{
                    
                });
            },
            addModal(){
                this.updateState=false;
                this.form.reset();
                $('#addNewClient').modal('show')
            },
            updateModal(client){
                this.updateState=true;
                this.form.reset();
                $('#addNewClient').modal('show')
                this.form.fill(client);
            },
            deleteCustomer(id){
                Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if(result.value){
                        this.form.delete('/api/client/'+id).then(()=>{
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                            )
                        Fire.$emit('reloadAfter');    
                        }).catch(()=>{
                            Swal.fire("Failed", "Something went wrong.", "warning");
                        });
                    }    
                })        
            },
            viewModal(){
                $('#viewModal').modal('show');
            },
            loadCustomerTrans(){
                axios.get('/api/clientrans/'+this.form.client_id).then(({data}) => (this.trans = data));  
            },
            loadCustomers(){
                axios.get('api/client').then(({data}) => (this.clients = data));
            },
            createCustomer(){
                this.$Progress.start();
                this.form.post('api/client').then(()=>{
                $('#addNewClient').modal('hide')
                Fire.$emit('reloadAfter');
                Toast.fire({
                    type: 'success',
                    title: 'Successfully added customer'
                })

                this.$Progress.finish();
                })
                
            },
            paginate(page = 1) {
			axios.get('api/client?page=' + page)
				.then(response => {
					this.clients = response.data;
				});
		    }
        },
        mounted() {
            this.loadCustomers();
            Fire.$on('reloadAfter',() => {
                this.loadCustomers();
            });
            //setInterval(() => this.loadCustomers(), 3000); -> Auto request for resources to the server every 3seconds.

        }
    }
</script>
