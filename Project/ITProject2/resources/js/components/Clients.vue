<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Customers</h3>
                <div class="card-tools">
                   <button class="btn btn-success" @click="addModal()">
                        New Customer Data
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
                  <tr v-for="client in clients" :key="client.client_id"> <!-- v-if="client.something == 'Condition' #For filtering-->
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

                        <a href="#">
                            <i class="fas fa-eye text-teal"></i>
                        </a>
                    </td>
                  </tr>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- Modal -->
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
    </div>
</template>

<script>
    export default {
        data(){   
            return{
                updateState:false,
                clients : {},
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
            loadCustomers(){
                axios.get('api/client').then(({data}) => (this.clients = data.data));
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
