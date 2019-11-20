<template>

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    
                    <div class="card-header">
                        <h3 class="card-title">Suppliers</h3>

                        <div class="card-tools">
                            <button class="btn btn-success" data-toggle="modal" data-target="#addSupplierModal">Add New Supplier <i class="fas fa-briefcase"></i></button>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        
                        <table class="table table-hover">

                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Contact No.</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>0000XXX</td>
                                    <td>Supplier's Name</td>
                                    <td>Supplier's Address Here</td>
                                    <td>09999999999</td>
                                    <td>supplierEmail@gmail.com</td>
                                    <td>Actions Here</td>
                                </tr>
                            </tbody>

                        </table>

                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="addSupplierModal" tabindex="-1" role="dialog" aria-labelledby="addSupplierModal" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="addSupplierModal">Add New Supplier</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form>

                        <div class="modal-body">

                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                            </div>

                            <div class="form-group">
                                <textarea name="address" id="address" class="form-control" placeholder="Address" required></textarea>
                            </div>

                            <div class="form-group">
                                <input type="text" name="contact-first-name" id="contact-first-name" class="form-control" placeholder="Contact First Name" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="contact-last-name" id="contact-last-name" class="form-control" placeholder="Contact Last Name" required>
                            </div>

                            <div class="form-group">
                                <input type="tel" name="contact-number" id="contact-number" class="form-control" placeholder="Contact Number" required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Supplier</button>
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