<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Transactions</h3>
                <div class="card-tools">
                    <button class="btn btn-success" @click="addTransaction()">
                        New Transaction
                        <i class="fas fa-user-plus fa-fw"></i>
                    </button>
                    
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>Transaction ID</th>
                    <th>Customer name</th>
                    <th>Product name</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  <tr v-for="transaction in transactions.data" :key="transaction.tId">
                    <td>{{transaction.tId}}</td>
                    <td>{{transaction.lastname}}, {{transaction.firstname}}</td>
                    <td>{{transaction.product_name}}</td>
                    <td>{{transaction.quantity}}</td>
                    <td>{{transaction.status}}</td>
                    
                    <td>
                        <a href="#" @click="updateModal(transaction)">
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
              <div class="card-footer">
                  <pagination :data="transactions" @pagination-change-page="paginate"></pagination>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="addNewTransaction" tabindex="-1" role="dialog" aria-labelledby="addNewTransactionLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 v-show="!updateState" class="modal-title" id="addNewTransactionLabel">New Transaction</h5>
                <h5 v-show="updateState" class="modal-title" id="addNewTransactionLabel">Update</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form @submit.prevent="updateState ? updateTransaction() :createTransaction()">
                <div class="modal-body">
                    <div class="form-group">
                        <select name="client_id" v-model="form.client_id" id="client_id" class="form-control" :class="{
                        'is-invalid': form.errors.has('client_id') }">
                            <option value="" disabled selected>Select Client(lastname, firstname)</option>
                            <option v-for="client in clients.data" :value="client.client_id">{{client.lastname}}, {{client.firstname}}</option>
                        </select>
                        <alert-error :form="form" message="Required."></alert-error>
                    </div>
         
                    <div class="form-group">
                        <select name="product_id" v-model="form.product_id" id="product_id" class="form-control" :class="{
                        'is-invalid': form.errors.has('product_id') }">
                            <option value="" disabled selected>Select Product</option>
                            <option v-for="product in products.data" :value="product.product_id">{{product.product_name}}</option>
                        </select>
                        <alert-error :form="form" message="Required."></alert-error>
                    </div>
                
                    <div class="form-group">
                        <input v-model="form.quantity" type="text" name="quantity" placeholder="Quantity"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('quantity') }">
                        <alert-error :form="form" message="Required."></alert-error>
                    </div>
                
                    <div class="form-group">
                        <select name="status" v-model="form.status" id="status" class="form-control" :class="{
                        'is-invalid': form.errors.has('status') }">
                            <option value="" disabled selected>Select Status</option>
                            <option value="Pending">Pending</option>
                            <option value="Ongoing">Ongoing</option>
                            <option value="Rendered">Rendered</option>
                            <option value="Cancelled">Cancelled</option>
                        </select>
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button v-show="!updateState" type="submit" class="btn btn-primary">Create</button>
                        <button v-show="updateState" type="submit" class="btn btn-primary">Update</button>
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
                clients: {},
                products: {},
                form: new Form({
                    tId: '',
                    client_id: '',
                    product_id: '',
                    quantity: '',
                    status: ''
                })      
            }
        },
        methods: {
            updateTransaction(){
                this.$Progress.start();
                this.form.put('/api/transaction/'+this.form.tId).then(()=>{
                    Swal.fire(
                            'Updated!',
                            'Transaction has been updated.',
                            'success'
                            )
                    this.$Progress.finish();
                    Fire.$emit('reloadAfter');  
                    $('#addNewTransaction').modal('hide')
                }).catch(()=>{
                    
                });
            },
            updateModal(transaction){
                this.updateState=true;
                this.form.reset();
                $('#addNewTransaction').modal('show')
                this.form.fill(transaction);
            },
            addTransaction(){
                this.updateState=false;
                this.form.reset();
                $('#addNewTransaction').modal('show')
            },
            loadTransactions(){
                axios.get('api/transaction').then(({data}) => (this.transactions = data));
            },
            loadClients(){
                axios.get('api/client').then(({data}) => (this.clients = data));
            },
            loadProducts(){
                axios.get('api/product').then(({data}) => (this.products = data));
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
            },
            paginate(page = 1) {
			axios.get('api/transaction?page=' + page)
				.then(response => {
					this.transactions = response.data;
				});
		    }
        },
        mounted() {
            this.loadTransactions();
            this.loadClients();
            this.loadProducts();
            Fire.$on('reloadAfter',() => {
                this.loadTransactions();
            });
        }
    }
</script>
