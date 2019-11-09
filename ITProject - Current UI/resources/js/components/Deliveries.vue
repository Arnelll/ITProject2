<template>

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    
                    <div class="card-header">
                        <h3 class="card-title">Deliveries</h3>

                        <div class="card-tools">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#toolModal">Tool Button <i class="fas fa-tools"></i></button>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        
                        <table class="table table-hover">

                            <thead>
                                <tr>
                                    <th>Delivery ID</th>
                                    <th>Purchase Order ID</th>
                                    <th>Supplier</th>
                                    <th>Status</th>
                                    <th>Date Delivered</th>
                                    <th>Date Completed</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>000</td>
                                    <td>000X</td>
                                    <td>Supplier Name</td>
                                    <td>Incomplete</td>
                                    <td>Date Here</td>
                                    <td> - </td>
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