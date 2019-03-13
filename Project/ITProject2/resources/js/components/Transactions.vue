<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Transactions</h3>
                <div class="card-tools">
                    <button class="btn btn-success" @click="addTransaction()">
                        Add New
                        <i class="fas fa-user-plus fa-fw"></i>
                    </button>
                    
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>Transaction ID</th>
                    <th>Client ID</th>
                    <th>Product ID</th>
                    <th>Quantity</th>
                    <th>Status</th>
                  </tr>
                  <tr v-for="transaction in transactions" :key="transaction.tId">
                    <td>{{transaction.tId}}</td>
                    <td>{{transaction.client_id}}</td>
                    <td>{{transaction.product_id}}</td>
                    <td>{{transaction.quantity}}</td>
                    <td>{{transaction.status}}</td>
                    
                    <td>
                        <a href="#">
                            <i class="fa fa-edit text-cyan"></i>
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
        <div class="modal fade" id="addNewTransaction" tabindex="-1" role="dialog" aria-labelledby="addNewTransactionLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewTransactionLabel">New Transaction</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form @submit.prevent='createTransaction'>
                <div class="modal-body">
                    <div class="form-group">
                        <input v-model="form.client_id" type="text" name="client_id" placeholder="Client ID"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('client_id') }">
                        <has-error :form="form" field="client_id"></has-error>
                    </div>
                
               
                    <div class="form-group">
                        <input v-model="form.product_id" type="text" name="product_id" placeholder="Product ID"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('product_id') }">
                        <has-error :form="form" field="product_id"></has-error>
                    </div>
                
                
                    <div class="form-group">
                        <input v-model="form.quantity" type="text" name="quantity" placeholder="Quantity"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('quantity') }">
                        <has-error :form="form" field="quantity"></has-error>
                    </div>
                
                
                    <div class="form-group">
                        <input v-model="form.status" type="text" name="status" placeholder="Status"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('status') }">
                        <has-error :form="form" field="status"></has-error>
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create</button>
                        <!--<button type="submit" class="btn btn-primary">Update</button>-->
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
                updateState: false,
                transactions : {},
                form: new Form({
                    client_id: '',
                    product_id: '',
                    quantity: '',
                    status: ''
                })      
            }
        },
        methods: {
            addTransaction(){
                this.updateState=false;
                this.form.reset();
                $('#addNewTransaction').modal('show')
            },
            loadTransactions(){
                axios.get('api/transaction').then(({data}) => (this.transactions = data.data));
            },
            loadClients(){
                axios.get('api/client').then(({data}) => (this.clients = data.data));
            },
            loadProducts(){
                axios.get('api/product').then(({data}) => (this.transactions = data.data));
            },
            createTransaction(){
                this.$Progress.start();
                this.form.post('api/transaction').then(()=>{
                $('#addNewTransaction').modal('hide')
                Fire.$emit('reloadAfter');
                Toast.fire({
                    type: 'success',
                    title: 'Successfully added Transaction'
                })
                this.$Progress.finish();
                })
                
            }
        },
        mounted() {
            this.loadTransactions();
            Fire.$on('reloadAfter',() => {
                this.loadTransactions();
            });
        }
    }
</script>
