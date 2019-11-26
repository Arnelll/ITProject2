<template>

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    
                    <div class="card-header">
                        <h3 class="card-title">Clients</h3>

                        <div class="card-tools">
                            <button class="btn btn-success" @click="addClientModal()">Add New Client <i class="fas fa-user-plus"></i></button>
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
                                <tr v-for="client in clients" :key="client.client_id">
                                    <td>{{client.client_id}}</td>
                                    <td>{{client.first_name}} {{client.middle_name}} {{client.last_name}}</td>
                                    <td>{{client.address}}</td>
                                    <td>{{client.contact_number}}</td>
                                    <td>{{client.email}}</td>
                                    <td>{{client.created_at | mainDateFormat}}</td>
                                    <td>{{client.updated_at | mainDateFormat}}</td>
                                    <td>
                                        <a href="#">
                                            <i class="fa fa-file-alt"></i>
                                        </a>
                                        <a href="#" @click="editClientModal(client)">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" @click="deleteClient(client.client_id)">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>

                        </table>

                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="clientFormModal" tabindex="-1" role="dialog" aria-labelledby="clientFormModal" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" v-show="!editmode" id="clientFormModal">Add New Client</h5>
                        <h5 class="modal-title" v-show="editmode" id="clientFormModal">Edit Client Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form @submit.prevent="editmode ? editClient() : addClient()">

                        <div class="modal-body">

                            <div class="form-group">
                                <input v-model="form.first_name" type="text" name="first-name" id="first-name" class="form-control" :class="{ 'is-invalid': form.errors.has('first_name') }" placeholder="First Name" required>
                                <has-error :form="form" field="first_name"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.last_name" type="text" name="last-name" id="last-name" class="form-control" :class="{ 'is-invalid': form.errors.has('last_name') }" placeholder="Last Name" required>
                                <has-error :form="form" field="last_name"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.middle_name" type="text" name="middle-name" id="middle-name" class="form-control" :class="{ 'is-invalid': form.errors.has('middle_name') }" placeholder="Middle Name" required>
                                <has-error :form="form" field="middle_name"></has-error>
                            </div>

                            <div class="form-group">
                                <textarea v-model="form.address" name="address" id="address" class="form-control" :class="{ 'is-invalid': form.errors.has('address') }" placeholder="Client Address" required></textarea>
                                <has-error :form="form" field="address"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.email" type="email" name="email" id="email" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }" placeholder="Email" required>
                                <has-error :form="form" field="email"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.contact_number" type="tel" name="contact-number" id="contact-number" class="form-control" :class="{ 'is-invalid': form.errors.has('contact_number') }" placeholder="Contact Number" required>
                                <has-error :form="form" field="contact_number"></has-error>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button v-show="!editmode" type="submit" class="btn btn-primary">Add Client</button>
                            <button v-show="editmode" type="submit" class="btn btn-primary">Update</button>
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

                clients: {},

                form: new Form({
                    client_id: '',
                    first_name: '',
                    last_name: '',
                    middle_name: '',
                    address: '',
                    email: '',
                    contact_number: ''
                }),

                editmode: false

            }

        },

        methods: {

            addClientModal() {
                this.editmode = false;
                this.form.reset();
                
                $('#clientFormModal').modal('show');
            },

            editClientModal(client) {
                this.editmode = true;
                this.form.reset();
                
                $('#clientFormModal').modal('show');
                this.form.fill(client);
            },

            displayClients() {
                axios.get('api/client').then(({ data }) => (this.clients = data.data));
            },

            addClient() {
                this.$Progress.start();
                this.form.post('api/client');
                Fire.$emit('RefreshPage');

                $('#clientFormModal').modal('hide')

                Toast.fire({
                    icon: 'success',
                    title: 'Client registered successfully'
                });

                this.$Progress.finish();
            },

            editClient() {
                this.$Progress.start();

                this.form.put('api/client/'+this.form.client_id)
                .then(() => {

                    Swal.fire(
                        'Edit Successful',
                        'Client information has been updated successfully',
                        'success'
                    )

                    this.$Progress.finish();
                    Fire.$emit('RefreshPage');

                }).catch(() => {

                    Swal.fire(
                        'Edit Failed',
                        'The client record cannot be updated.',
                        'warning'
                    )

                    this.$Progress.fail();
                });
            },

            deleteClient(client_id) {

                Swal.fire({

                    title: 'Are you sure you want to delete client record?',
                    text: "You won't be able to revert this action",
                    icon: 'warning',
                    showCancelButton: 'true',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Delete'

                }).then((result) => {

                    if (result.value) {

                        this.form.delete('api/client/'+client_id).then(() => {

                            Swal.fire(
                                'Delete Successful',
                                'The client record has been deleted.',
                                'success'
                            )

                            Fire.$emit('RefreshPage');

                        }).catch(() => {

                            Swal.fire(
                                'Delete Failed',
                                'The client record cannot be deleted.',
                                'warning'
                            )

                        });

                    }

                });

            }

        },

        mounted() {
            this.displayClients();
            Fire.$on('RefreshPage', () => {
                this.displayClients();
            });

            // setInterval(() => this.displayClients(), 1000);
            console.log('Component mounted.')
        }
    }

</script>