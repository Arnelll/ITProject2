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
                                <tr v-for="supplier in suppliers" :key="supplier.supplier_id">
                                    <td>{{supplier.supplier_id}}</td>
                                    <td>{{supplier.name}}</td>
                                    <td>{{supplier.address}}</td>
                                    <td>{{supplier.contact_number}}</td>
                                    <td>{{supplier.email}}</td>
                                    <td>
                                        <a href="#">
                                            <i class="fa fa-file-alt"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" @click="deleteSupplier(supplier.supplier_id)">
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

        <div class="modal fade" id="addSupplierModal" tabindex="-1" role="dialog" aria-labelledby="addSupplierModal" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="addSupplierModal">Add New Supplier</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form @submit.prevent="addSupplier">

                        <div class="modal-body">

                            <div class="form-group">
                                <input v-model="form.name" type="text" name="name" id="name" class="form-control" :class="{ 'is-invalid' : form.errors.has('name') }" placeholder="Name" required>
                                <has-error :form="form" field="name"></has-error>
                            </div>

                            <div class="form-group">
                                <textarea v-model="form.address" name="address" id="address" class="form-control" :class="{ 'is-invalid' : form.errors.has('address') }" placeholder="Address" required></textarea>
                                <has-error :form="form" field="address"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.contact_first_name" type="text" name="contact-first-name" id="contact-first-name" class="form-control" :class="{ 'is-invalid' : form.errors.has('contact_first_name') }" placeholder="Contact First Name" required>
                                <has-error :form="form" field="contact_first_name"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.contact_last_name" type="text" name="contact-last-name" id="contact-last-name" class="form-control" :class="{ 'is-invalid' : form.errors.has('contact_last_name') }" placeholder="Contact Last Name" required>
                                <has-error :form="form" field="contact_last_name"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.contact_number" type="tel" name="contact-number" id="contact-number" class="form-control" :class="{ 'is-invalid' : form.errors.has('contact_number') }" placeholder="Contact Number" required>
                                <has-error :form="form" field="contact_number"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.email" type="email" name="email" id="email" class="form-control" :class="{ 'is-invalid' : form.errors.has('email') }" placeholder="Email" required>
                                <has-error :form="form" field="email"></has-error>
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

        data () {

            return {

                suppliers: {},

                form: new Form({
                    name: '',
                    address: '',
                    contact_first_name: '',
                    contact_last_name: '',
                    contact_number: '',
                    email: '',
                })

            }

        },

        methods: {

            displaySuppliers() {
                axios.get('api/supplier').then(({ data }) => (this.suppliers = data.data));
            },

            addSupplier() {
                this.$Progress.start();
                this.form.post('api/supplier');
                Fire.$emit('RefreshPage');

                $('#addSupplierModal').modal('hide')

                Toast.fire({
                    icon: 'success',
                    title: 'Supplier registered successfully'
                });

                this.$Progress.finish();
            },

            deleteSupplier(supplier_id) {

                Swal.fire({

                    title: 'Are you sure you want to delete supplier record?',
                    text: "You won't be able to revert this action",
                    icon: 'warning',
                    showCancelButton: 'true',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Delete'

                }).then((result) => {

                    if (result.value) {

                        this.form.delete('api/supplier/'+supplier_id).then(() => {

                            Swal.fire(
                                'Delete Successful',
                                'The supplier record has been deleted.',
                                'success'
                            )

                            Fire.$emit('RefreshPage');

                        }).catch(() => {

                            Swal.fire(
                                'Delete Failed',
                                'The supplier record cannot be deleted.',
                                'warning'
                            )

                        });

                    }

                });

            }

        },

        mounted() {
            this.displaySuppliers();
            Fire.$on('RefreshPage', () => {
                this.displaySuppliers();
            })

            // setInterval(() => this.displaySuppliers(), 1000);
            console.log('Component mounted.');
        }
    }

</script>