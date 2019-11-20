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
                                <tr>
                                    <td>0000XXX</td>
                                    <td>XXX-0000</td>
                                    <td>Pickup Truck</td>
                                    <td>Vehicle, brand, color, issues, and additional info here.</td>
                                    <td>Client's Name</td>
                                    <td>Actions Here</td>
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

                    <form>

                        <div class="modal-body">

                            <div class="form-group">
                                <input type="text" name="plate-number" id="plate-number" class="form-control" placeholder="Plate Number" required>
                            </div>

                            <div class="form-group">
                                <select name="type" id="type" class="form-control">
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
                            </div>

                            <div class="form-group">
                                <textarea name="description" id="description" class="form-control" placeholder="Description" required></textarea>
                            </div>

                            <div class="form-group">
                                <input type="text" name="client-name" id="client-name" class="form-control" placeholder="Client Name" required>
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
        mounted() {
            console.log('Component mounted.')
        }
    }

</script>