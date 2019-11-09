<template>

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    
                    <div class="card-header">
                        <h3 class="card-title">Purchase Orders</h3>

                        <div class="card-tools">
                            <button class="btn btn-success" data-toggle="modal" data-target="#newPurchaseOrderModal">New Purchase Order <i class="fas fa-receipt"></i></button>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        
                        <table class="table table-hover">

                            <thead>
                                <tr>
                                    <th>Purchase Order ID</th>
                                    <th>Supplier</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                <tr>
                                    <td>XXX0000</td>
                                    <td>Supplier's Name</td>
                                    <td>Completed</td>
                                    <td>Date Here</td>
                                    <td>Actions Here</td>
                                </tr>
                            <tbody>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="newPurchaseOrderModal" tabindex="-1" role="dialog" aria-labelledby="newPurchaseOrderModal" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="newPurchaseOrderModal">New Purchase Order</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form>

                        <div class="modal-body">

                            MODAL BODY HERE...

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