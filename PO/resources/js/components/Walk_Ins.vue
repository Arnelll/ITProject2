<template>

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    
                    <div class="card-header">
                        <h3 class="card-title">Walk-in Transactions</h3>

                        <div class="card-tools">
                            <button class="btn btn-success" data-toggle="modal" data-target="#addWalkinTransaction">New Walk-in Transaction <i class="fas fa-cart-plus"></i></button>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">

                        <table class="table table-hover">

                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Receipt No.</th>
                                    <th>Client</th>
                                    <th>Date Encoded</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>0000XXX</td>
                                    <td>000000XXXXXX</td>
                                    <td>Client's Name</td>
                                    <td>Date Here</td>
                                    <td>Actions Here</td>
                                </tr>
                            </tbody>

                        </table>
                        
                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="addWalkinTransaction" tabindex="-1" role="dialog" aria-labelledby="addWalkinTransaction" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="addWalkinTransaction">New Walk-in Transaction</h5>
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
                            <button type="submit" class="btn btn-primary">Add Transaction</button>
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