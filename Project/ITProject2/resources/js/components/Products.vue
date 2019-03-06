<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Table</h3>
                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#addNewProduct">
                        Add New
                        <i class="fas fa-user-plus fa-fw"></i>
                    </button>
                    
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Provider</th>
                    <th>Action</th>
                  </tr>
                  <tr v-for="product in products" :key="product.product_id">
                    <td>{{product.product_id}}</td>
                    <td>{{product.product_name}}</td>
                    <td>{{product.quantity}}</td>
                    <td>{{product.category}}</td>
                    <td>{{product.brand}}</td>
                    <td>{{product.name}}</td>
                    
                    <td>
                        <a href="#">
                            <i class="fa fa-edit"></i>
                        </a>
                        
                        <a href="#">
                            <i class="fa fa-trash"></i>
                        </a>

                        <a href="#">
                            <i class="fas fa-eye"></i>
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
        <div class="modal fade" id="addNewProduct" tabindex="-1" role="dialog" aria-labelledby="addNewProductLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewProductLabel">New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form @submit.prevent="createProduct">
                <div class="modal-body">
                    <div class="form-group">
                        <input v-model="form.product_name" type="text" name="product_name" placeholder="Product Name"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('product_name') }">
                        <has-error :form="form" field="product_name"></has-error>
                    </div>

                    <div class="form-group">
                        <input v-model="form.quantity" type="text" name="quantity" placeholder="Quantity"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('quantity') }">
                        <has-error :form="form" field="quantity"></has-error>
                    </div>

                    <div class="form-group">
                        <input v-model="form.category" type="text" name="category" placeholder="Category"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('category') }">
                        <has-error :form="form" field="category"></has-error>
                    </div>

                    <div class="form-group">
                        <input v-model="form.brand" type="text" name="brand" placeholder="Brand"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('brand') }">
                        <has-error :form="form" field="brand"></has-error>
                    </div>
                    
                    <!--
                    <div class="form-group">
                        <input v-model="form.provider_id" type="text" name="provider_id" placeholder="Provider ID"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('provider_id') }">
                        <has-error :form="form" field="provider_id"></has-error>
                    </div>
                    -->
                    
                    <div class="form-group">
                        <select name="provider_id" v-model="form.provider_id" id="role" class="form-control" :class="{
                        'is-invalid': form.errors.has('provider_id') }">
                            <option value="0">Select Provider</option>
                            <option v-for="provider in providers" :value="provider.provider_id">{{provider.name}}</option>
                        </select>
                    </div>
                    
                    
                </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create</button>
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
                products : {},
                providers : {},
                form: new Form({
                    product_name : '',
                    quantity : '',
                    category : '',
                    brand : '',
                    provider_id: ''
                })
                    
            }
        },
        methods: {
            createProduct(){
                this.$Progress.start();
                this.form.post('api/product').then(()=>{
                $('#addNewProduct').modal('hide')
                Fire.$emit('reloadAfter');
                Toast.fire({
                    type: 'success',
                    title: 'Successfully added product'
                })
                this.$Progress.finish();
                })
            },
            loadProducts(){
                axios.get('api/product').then(({data}) => (this.products = data.data));
                
            },
            loadProviders(){
                axios.get('api/provider').then(({data}) => (this.providers = data.data));
            }
        },
        mounted() {
            this.loadProducts();
            this.loadProviders();
            Fire.$on('reloadAfter',() => {
                this.loadProducts();
            });
        }
    }
</script>
