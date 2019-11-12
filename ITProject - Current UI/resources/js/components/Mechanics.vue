<template>

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    
                    <div class="card-header">
                        <h3 class="card-title">Mechanics</h3>

                        <div class="card-tools">
                            <button class="btn btn-success" data-toggle="modal" data-target="#addMechanicModal">Add New Mechanic <i class="fas fa-user-plus"></i></button>
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
                                    <th>Date Registered</th>
                                    <th>Date Updated</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr v-for="mechanic in mechanics" :key="mechanic.mechanic_id">
                                    <td>{{mechanic.mechanic_id}}</td>
                                    <td>{{mechanic.first_name}} {{mechanic.middle_name}} {{mechanic.last_name}}</td>
                                    <td>{{mechanic.address}}</td>
                                    <td>{{mechanic.contact_number}}</td>
                                    <td>{{mechanic.created_at}}</td>
                                    <td>{{mechanic.updated_at}}</td>
                                    <td>
                                        <a href="#">
                                            <i class="fas fa-file-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>

                        </table>

                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="addMechanicModal" tabindex="-1" role="dialog" aria-labelledby="addMechanicModal" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="addMechanicModal">Add New Mechanic</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form @submit.prevent="addMechanic">

                        <div class="modal-body">

                            <div class="form-group">
                                <input v-model="form.first_name" type="text" name="first-name" id="first-name" class="form-control" :class="{ 'is-invalid' : form.errors.has('first_name') }" placeholder="First Name" required>
                                <has-error :form="form" field="first_name"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.last_name" type="text" name="last-name" id="last-name" class="form-control" :class="{ 'is-invalid' : form.errors.has('last_name') }" placeholder="Last Name" required>
                                <has-error :form="form" field="last_name"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.middle_name" type="text" name="middle-name" id="middle-name" class="form-control" :class="{ 'is-invalid' :form.errors.has('middle_name') }" placeholder="Middle Name" required>
                                <has-error :form="form" field="middle_name"></has-error>
                            </div>

                            <div class="form-group">
                                <textarea v-model="form.address" name="address" id="address" class="form-control" :class="{ 'is-invalid' :form.errors.has('address') }" placeholder="Mechanic Address" required></textarea>
                                <has-error :form="form" field="address"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.contact_number" type="tel" name="contact-number" id="contact-number" class="form-control" :class="{ 'is-invalid' :form.errors.has('contact_number') }" placeholder="Contact Number" required>
                                <has-error :form="form" field="contact_number"></has-error>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button t1ype="submit" class="btn btn-primary">Add Mechanic</button>
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

                mechanics: {},

                form: new Form({
                    first_name: '',
                    last_name: '',
                    middle_name: '',
                    address: '',
                    contact_number: ''
                })

            }
        },

        methods: {

            displayMechanics() {
                axios.get('api/mechanic').then(({ data }) => (this.mechanics = data.data));
            },

            addMechanic() {
                this.form.post('api/mechanic');
            }

        },

        mounted() {
            this.displayMechanics();
            console.log('Component mounted.')
        }
    }

</script>