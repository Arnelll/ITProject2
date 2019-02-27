<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Table</h3>
                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#addNewClient">
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
                    <th>Provider</th>
                    <th>Brand</th>
                    <th>Action</th>
                  </tr>
                  <tr v-for="product in products" :key="product.product_code">
                    <td>{{product.product_id}}</td>
                    <td>{{product.product_name | upFirstLetter}} </td>
                    <td>{{product.quantity}}</td>
                    <td>{{product.category_id}}</td>
                    <td>{{product.provider_id}}</td>
                    <td>{{product.brand_id}}</td>
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
        <div class="modal fade" id="addNewClient" tabindex="-1" role="dialog" aria-labelledby="addNewClientLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewClientLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form @submit.prevent="createUser">
                <div class="modal-body">
                    <div class="form-group">
                        <input v-model="form.product_name" type="text" name="product_name" placeholder="Product Name"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('product_name') }">
                        <has-error :form="form" field="product_name"></has-error>
                    </div>

                    <div class="form-group">
                        <select name="role" v-model="form.role" id="role" class="form-control" :class="{
                        'is-invalid': form.errors.has('role') }">
                            <option value="">Template</option>
                            <option value="#">#</option>
                            <option value="#">#</option>
                            <option value="#">#</option>
                        </select>
                        <has-error :form="form" field="role"></has-error>
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
                form: new Form({
                    product_name : '',
                    quantity : '',
                    product_category : '',
                    product_status : '',
                    product_provider: ''
                })
            }
        },
        methods: {
            loadProducts(){
                axios.get('api/product').then(({data}) => (this.products = data.data));
            }
        },
        mounted() {
            this.loadProducts();
        }
    }
</script>
