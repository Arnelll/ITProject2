<template>

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    
                    <div class="card-header">
                        <h3 class="card-title">Product Checkout</h3>

                        <div class="card-tools">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#toolModal">Tool Button <i class="fas fa-tools"></i></button>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        
                        <table class="table table-hover">

                            <thead>
                                <tr>
                                    <th>Checkout ID</th>
                                    <th>Job Order ID</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Mechanic</th>
                                    <th>Date of Registered</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>000X</td>
                                    <td>000X</td>
                                    <td>Lug Nuts</td>
                                    <td>30</td>
                                    <td>Mechanic's Full Name</td>
                                    <td>Date Here</td>
                                    <td>Actions Here</td>
                                </tr>
                            </tbody>

                        </table>

                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="toolModal" tabindex="-1" role="dialog" aria-labelledby="toolModal" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="toolModal">Tool Modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                        MODAL BODY HERE...

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Primary Button</button>
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