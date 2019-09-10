<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Products</h3>
                <div class="card-tools">
                    <button class="btn btn-success" @click="addModal()">
                        Add New Product
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
                    <th>Price(per piece)</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Provider</th>
                    <th>Action</th>
                  </tr>
                  <tr v-for="product in products.data" :key="product.product_id">
                    <td>{{product.product_id}}</td>
                    <td>{{product.product_name}}</td>
                    <td>{{product.quantity}}</td>
                    <td>{{product.price}}</td>
                    <td>{{product.category}}</td>
                    <td>{{product.brand}}</td>
                    <td>{{product.name}}</td>
                    
                    <td>
                        <a href="#" @click="updateModal(product)">
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
                  <pagination :data="products" @pagination-change-page="paginate"></pagination>
              </div>
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
            <form @submit.prevent="updateState ? updateProduct() : createProduct()">
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
                        <input v-model="form.price" type="text" name="price" placeholder="Price"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('price') }">
                        <has-error :form="form" field="price"></has-error>
                    </div>

                    <div class="form-group">
                        <select name="category" v-model="form.category" id="role" class="form-control" :class="{
                        'is-invalid': form.errors.has('category') }">
                            <option value="" selected disabled>Select Category</option>
                            <option v-for="category in categories.data" :value="category.category_name">{{category.category_name}}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input v-model="form.brand" type="text" name="brand" placeholder="Brand"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('brand') }">
                        <has-error :form="form" field="brand"></has-error>
                    </div>
                    
                    <div class="form-group">
                        <select name="provider_id" v-model="form.provider_id" id="role" class="form-control" :class="{
                        'is-invalid': form.errors.has('provider_id') }">
                            <option value="" selected disabled>Select Provider</option>
                            <option v-for="provider in providers.data" :value="provider.provider_id">{{provider.name}}</option>
                        </select> 
                    </div>  
               
                </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button v-show="!updateState" type="submit" class="btn btn-primary">Create</button>
                        <button v-show="updateState" type="submit" class="btn btn-primary">Update</button>
                    </div>
            </form>
            </div>
        </div>
        </div>
    </div>
</template>
<script type="text/javascript" src="node_modules/vuejs/dist/vue.min.js"></script>
<script type="text/javascript" src="node_modules/vue-simple-search-dropdown/dist/vue-simple-search-dropdown.min.js"></script>
<script>
    export default {
        data(){
            return{
                updateState: false,
                products : {},
                providers : {},
                categories : {},
                result : {},
                form: new Form({
                    product_id : '',
                    product_name : '',
                    quantity : '',
                    price : '',
                    category : '',
                    brand : '',
                    provider_id: ''
                })
                    
            }
        },
        methods: {
            updateProduct(){
                this.$Progress.start();
                this.form.put('/api/product/'+this.form.product_id).then(()=>{
                    Swal.fire(
                            'Updated!',
                            'Product has been updated.',
                            'success'
                            )
                    this.$Progress.finish();
                    $('#addNewProduct').modal('hide')
                    Fire.$emit('reloadAfter');  
                }).catch(()=>{
                    
                });

            },
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
            addModal(){
                this.updateState=false;
                this.form.reset();
                $('#addNewProduct').modal('show')
            },
            updateModal(product){
                this.updateState=true;
                this.form.reset();
                $('#addNewProduct').modal('show')
                this.form.fill(product);
            },
            loadProducts(){
                axios.get('api/product').then(({data}) => (this.products = data)); 
            },
            loadProviders(){
                axios.get('api/provider').then(({data}) => (this.providers = data));
            },
            loadCategory(){
                axios.get('api/category').then(({data}) => (this.categories = data));
            },
            paginate(page = 1) {
			axios.get('api/product?page=' + page)
				.then(response => {
					this.products = response.data;
				});
		    }
        },
        mounted() {
            Fire.$on('search', () => {
                let query = this.$parent.search;
                axios.get('api/findMe?q=' + query)
                .then((data)=>{
                    this.products = data.data
                })
                .catch(()=>{

                });
            });
            this.loadProducts();
            this.loadProviders();
            this.loadCategory();
            Fire.$on('reloadAfter',() => {
                this.loadProducts();
            });
        }
    }
</script>
