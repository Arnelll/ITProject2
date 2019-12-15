<template>

    <div class="container">

        <div class="row justify-content-header">
            <div class="col-md-8">

                <div class="card card-default">
                    
                    <div class="card-header">Stock Card for Product <strong>Tires</strong></div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Personnel</th>
                                <th scope="col">Actions</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total Quantity</th>
                                <th scope="col">Unit Cost</th>
                                <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Jeff (Owner)</td>
                                <td>Additional</td>
                                <td>5</td>
                                <td>15</td>
                                <td>100.00</td>
                                <td>12/12/2019</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Esmeralda (Secretary)</td>
                                <td>Pull out</td>
                                <td>10</td>
                                <td>5</td>
                                <td>50.00</td>
                                <td>12/12/2019</td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td>Lebron (Mechanic)</td>
                                <td>Pull out</td>
                                <td>5</td>
                                <td>0</td>
                                <td>30.00</td>
                                <td>12/12/2019</td>
                                </tr>
                            </tbody>
                        </table>
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