<template>

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    
                    <div class="card-header">
                        <h3 class="card-title">Vehicles</h3>

                        <div class="card-tools">
                            <button class="btn btn-success" data-toggle="modal" data-target="#addVehicleModal">Add New Vehicle <i class="fas fa-truck-monster"></i></button>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">

                        <table class="table table-hover">

                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Plate Number</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Client</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr v-for="vehicle in vehicles" :key="vehicle.vehicle_id">
                                    <td>{{vehicle.vehicle_id}}</td>
                                    <td>{{vehicle.plate_number}}</td>
                                    <td>{{vehicle.type}}</td>
                                    <td>{{vehicle.description}}</td>
                                    <td>{{vehicle.client_id}}</td>
                                    <td>
                                        <a href="#">
                                            <i class="fa fa-file-alt"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" @click="deleteVehicle(vehicle.vehicle_id)">
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

        <div class="modal fade" id="addVehicleModal" tabindex="-1" role="dialog" aria-labelledby="addVehicleModal" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="addVehicleModal">Add New Vehicle</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form @submit.prevent="addVehicle">

                        <div class="modal-body">

                            <div class="form-group">
                                <input v-model="form.plate_number" type="text" name="plate-number" id="plate-number" class="form-control" :class="{ 'is-invalid':form.errors.has('plate_number') }" placeholder="Plate Number" required>
                                <has-error :form="form" field="plate_number"></has-error>
                            </div>

                            <div class="form-group">
                                <select v-model="form.type" name="type" id="type" class="form-control" :class="{ 'is-invalid':form.errors.has('type') }">
                                    <option value="">- Select Type -</option>
                                    <option value="Compact">Compact</option>
                                    <option value="Coupe">Coupe</option>
                                    <option value="Crossover">Crossover</option>
                                    <option value="Hatchback">Hatchback</option>
                                    <option value="Pickup">Pickup</option>
                                    <option value="Sedan">Sedan</option>
                                    <option value="SUV">SUV</option>
                                    <option value="Van">Van</option>
                                </select>
                                <has-error :form="form" field="type"></has-error>
                            </div>

                            <div class="form-group">
                                <textarea v-model="form.description" name="description" id="description" class="form-control" :class="{ 'is-invalid':form.errors.has('description') }" placeholder="Description" required></textarea>
                                <has-error :form="form" field="description"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.client_id" type="text" name="client-id" id="client-id" class="form-control" :class="{ 'is-invalid':form.errors.has('client_id') }" placeholder="Client ID" required>
                                <has-error :form="form" field="client_id"></has-error>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Vehicle</button>
                        </div>

                    </form>

                </div>
            </div>
        
        </div>

    </div>

</template>

<script>

    export default {

        data() {

            return {

                vehicles: {},

                form: new Form({
                    plate_number: '',
                    type: '',
                    description: '',
                    client_id: ''
                })

            }

        },

        methods: {

            displayVehicles() {
                axios.get('api/vehicle').then(({ data }) => (this.vehicles = data.data));
            },

            addVehicle() {
                this.$Progress.start();
                this.form.post('api/vehicle');
                Fire.$emit('RefreshPage');

                $('#addVehicleModal').modal('hide')

                Toast.fire({
                    icon: 'success',
                    title: 'Vehicle registered successfully'
                });

                this.$Progress.finish();
            },

            deleteVehicle(vehicle_id) {

                Swal.fire({

                    title: 'Are you sure you want to delete vehicle record?',
                    text: "You won't be able to revert this action",
                    icon: 'warning',
                    showCancelButton: 'true',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Delete'

                }).then((result) => {

                    if (result.value) {

                        this.form.delete('api/vehicle/'+vehicle_id).then(() => {

                            Swal.fire(
                                'Delete Successful',
                                'The vehicle has been deleted.',
                                'success'
                            )

                            Fire.$emit('RefreshPage');

                        }).catch(() => {

                            Swal.fire(
                                'Delete Failed',
                                'The vehicle cannot be deleted.',
                                'warning'
                            )

                        });

                    }

                });

            }

        },

        mounted() {
            this.displayVehicles();
            Fire.$on('RefreshPage', () => {
                this.displayVehicles();
            })

            // setInterval(() => this.displayVehicles(), 1000);
            console.log('Component mounted.');
        }
    }

</script>