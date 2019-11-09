<template>

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    
                    <div class="card-header">
                        <h3 class="card-title">Inventory Log</h3>

                        <div class="card-tools">
                            <button class="btn btn-success" data-toggle="modal" data-target="#printLogModal">Print Inventory Log <i class="fas fa-print"></i></button>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        
                        <table class="table table-hover">

                            <thead>
                                <tr>
                                    <th>Product Code</th>
                                    <th>Name</th>
                                    <th>Brand</th>
                                    <th>Category</th>
                                    <th>Quantity In/Out</th>
                                    <th>Handler</th>
                                    <th>Log Details</th>
                                    <th>Log Date</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>000XXX</td>
                                    <td>Product Name</td>
                                    <td>Product Brand</td>
                                    <td>Detailing Products</td>
                                    <td>10+/-</td>
                                    <td>Master Admin</td>
                                    <td>Additional Stock From Supplier</td>
                                    <td>Date Here</td>
                                </tr>
                            </tbody>

                        </table>

                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="printLogModal" tabindex="-1" role="dialog" aria-labelledby="printLogModal" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="printLogModal">Print Inventory Log</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        MODAL BODY HERE
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Print</button>
                    </div>
                    
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