<template>

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    
                    <div class="card-header">
                        <h3 class="card-title">Product Returns</h3>

                        <div class="card-tools">
                            <button class="btn btn-success" data-toggle="modal" data-target="#newProductReturnModal">New Product Return <i class="fas fa-dolly"></i></button>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">

                        <table class="table table-hover">
                        
                            <thead>
                                <tr>
                                    <th>Return ID</th>
                                    <th>Product Code</th>
                                    <th>Product Name</th>
                                    <th>Client</th>
                                    <th>Description</th>
                                    <th>Handler</th>
                                    <th>Date Returned</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>0000X</td>
                                    <td>000XXX</td>
                                    <td>Product's Name</td>
                                    <td>Client's Name</td>
                                    <td>Detailed description of why this particular product was returned.</td>
                                    <td>Master Admin</td>
                                    <td>Date Here</td>
                                    <td>Actions</td>
                                </tr>
                            </tbody>
                        
                        </table>

                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="newProductReturnModal" tabindex="-1" role="dialog" aria-labelledby="newProductReturnModal" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="newProductReturnModal">New Product Return</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form>

                        <div class="modal-body">

                            <div class="form-group">
                                <label>
                                    <input type="radio" name="return-type" id="return-type" class="minimal" value="walkIn" checked>
                                    Walk-in
                                </label>
                                <label>
                                    <input type="radio" name="return-type" id="return-type" class="minimal" value="jobOrder">
                                    Job Order
                                </label>
                            </div>

                            <div class="form-group">
                                <input type="text" name="product-code" id="product-code" class="form-control" placeholder="Product Code" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="client-name" id="client-name" class="form-control" placeholder="Client Name" required>
                            </div>

                            <div class="form-group">
                                <textarea name="description" id="description" class="form-control" placeholder="Detailed Description..." required></textarea>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
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