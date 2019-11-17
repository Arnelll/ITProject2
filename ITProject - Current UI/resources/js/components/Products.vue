<template>

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    
                    <div class="card-header">
                        <h3 class="card-title">Products</h3>

                        <div class="card-tools">
                            <button class="btn btn-success" data-toggle="modal" data-target="#addProductModal">Add New Product <i class="fas fa-plus-square"></i></button>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        
                        <table class="table table-hover">

                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Brand</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Quantity in Stock</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr v-for="product in products" :key="product.product_id">
                                    <td>{{product.product_code}}</td>
                                    <td>{{product.name}}</td>
                                    <td>{{product.brand}}</td>
                                    <td>{{product.category}}</td>
                                    <td>PHP {{product.price}}</td>
                                    <td>{{product.quantity_in_stock}}</td>
                                    <td>{{product.status}}</td>
                                    <td>
                                        <a href="#">
                                            <i class="fas fa-file-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                        
                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModal" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="addProductModal">Add New Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form @submit.prevent="addProduct">

                        <div class="modal-body">

                            <div class="form-group">
                                <input v-model="form.product_code" type="text" name="product-code" id="product-code" class="form-control" :class="{ 'is-invalid': form.errors.has('product_code') }" placeholder="Product Code" required>
                                <has-error :form="form" field="product_code"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.name" type="text" name="name" id="name" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" placeholder="Name" required>
                                <has-error :form="form" field="name"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.brand" type="text" name="brand" id="brand" class="form-control" :class="{ 'is-invalid': form.errors.has('brand') }" placeholder="Brand" required>
                                <has-error :form="form" field="brand"></has-error>
                            </div>

                            <div class="form-group">
                                <select v-model="form.category" name="category" id="category" class="form-control" :class="{ 'is-invalid': form.errors.has('category') }" required>
                                    <option value="">- Select Category -</option>
                                    <option value="Rims">Rims</option>
                                    <option value="Tires">Tires</option>
                                    <option value="Suspension">Suspension</option>
                                    <option value="Vehicle Oils">Vehicle Oils</option>
                                    <option value="Vehicle Accessories">Vehicle Accessories</option>
                                    <option value="Detailing Products">Detailing Products</option>
                                    <option value="Others">Others</option>
                                </select>
                                <has-error :form="form" field="category"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.supplier" type="text" name="supplier" id="supplier" class="form-control" :class="{ 'is-invalid': form.errors.has('supplier') }" placeholder="Supplier" required>
                                <has-error :form="form" field=""></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.price" type="number" name="price" id="price" class="form-control" :class="{ 'is-invalid': form.errors.has('price') }" placeholder="Price (PHP)" min="0.00" max="10000000.00" step="0.01" required>
                                <has-error :form="form" field="price"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.quantity_in_stock" type="number" name="quantity-in-stock" id="quantity-in-stock" class="form-control" :class="{ 'is-invalid': form.errors.has('quantity_in_stock') }" placeholder="Quantity in Stock" required>
                                <has-error :form="form" field="quantity_in_stock"></has-error>
                            </div>

                            <div class="form-group">
                                <select v-model="form.status" name="status" id="status" class="form-control" :class="{ 'is-invalid': form.errors.has('status') }" required>
                                    <option value="">- Select Status -</option>
                                    <option value="Available">Available</option>
                                    <option value="Unavailable">Unavailable</option>
                                    <option value="For Re-Ordering">For Re-Ordering</option>
                                </select>
                                <has-error :form="form" field="status"></has-error>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>

    </div>

</template>

<script>

    export default {

        data () {
            
            return {

                products: {},

                form: new Form({
                    product_code: '',
                    name: '',
                    brand: '',
                    category: '',
                    supplier: '',
                    price: '',
                    quantity_in_stock: '',
                    status: ''
                })

            }

        },

        methods: {

            displayProducts() {
                axios.get('api/product').then(({ data }) => (this.products = data.data));
            },

            addProduct() {
                this.form.post('api/product');
            }

        },

        mounted() {
            this.displayProducts();
            console.log('Component mounted.')
        }
    }

</script>