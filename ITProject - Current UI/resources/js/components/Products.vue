<template>

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    
                    <div class="card-header">
                        <h3 class="card-title">Clients</h3>

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
                                <tr>
                                    <td>000XXX</td>
                                    <td>Sample Off-Road Tires</td>
                                    <td>Nitto Tire</td>
                                    <td>Tires</td>
                                    <td>PHP 25000</td>
                                    <td>8</td>
                                    <td>Available</td>
                                    <td>Actions Here</td>
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

                    <form>

                        <div class="modal-body">

                            <div class="form-group">
                                <input type="text" name="code" id="code" class="form-control" placeholder="Product Code" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="brand" id="brand" class="form-control" placeholder="Brand" required>
                            </div>

                            <div class="form-group">
                                <select name="category" id="category" class="form-control" required>
                                    <option value="">- Select Category -</option>
                                    <option value="">Category 1</option>
                                    <option value="">Category 2</option>
                                    <option value="">Category 3</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" name="supplier" id="supplier" class="form-control" placeholder="Supplier" required>
                            </div>

                            <div class="form-group">
                                <input type="number" name="price" id="price" class="form-control" placeholder="Price (PHP)" min="0.00" max="10000000.00" step="0.01" required>
                            </div>

                            <div class="form-group">
                                <input type="number" name="quantity-stock" id="quantity-stock" class="form-control" placeholder="Quantity in Stock" required>
                            </div>

                            <div class="form-group">
                                <select name="status" id="status" class="form-control" required>
                                    <option value="">- Select Status -</option>
                                    <option value="Available">Available</option>
                                    <option value="Unavailable">Unavailable</option>
                                </select>
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
        mounted() {
            console.log('Component mounted.')
        }
    }

</script>