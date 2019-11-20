<template>

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    
                    <div class="card-header">
                        <h3 class="card-title">Clients</h3>

                        <div class="card-tools">
                            <button class="btn btn-success" data-toggle="modal" data-target="#addClientModal">Add New Client <i class="fas fa-user-plus"></i></button>
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
                                    <th>Date Registered</th>
                                    <th>Date Updated</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>000</td>
                                    <td>FirstName MiddleName LastName</td>
                                    <td>Full Client Address</td>
                                    <td>09999999999</td>
                                    <td>client@email.com</td>
                                    <td>Date Here</td>
                                    <td>Date Here</td>
                                    <td>Actions</td>
                                </tr>
                            </tbody>

                        </table>

                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="addClientModal" tabindex="-1" role="dialog" aria-labelledby="addClientModal" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="addClientModal">Add New Client</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form>

                        <div class="modal-body">

                            <div class="form-group">
                                <input type="text" name="first-name" id="first-name" class="form-control" placeholder="First Name" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="last-name" id="last-name" class="form-control" placeholder="Last Name" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="middle-name" id="middle-name" class="form-control" placeholder="Middle Name" required>
                            </div>

                            <div class="form-group">
                                <textarea name="address" id="address" class="form-control" placeholder="Client Address" required></textarea>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                            </div>

                            <div class="form-group">
                                <input type="tel" name="contact-number" id="contact-number" class="form-control" placeholder="Contact Number" required>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Client</button>
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