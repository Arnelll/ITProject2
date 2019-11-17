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
                                    <th>Product Code</th>
                                    <th>Client ID</th>
                                    <th>Handler ID</th>
                                    <th>Date Encoded</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr v-for="walkintransaction in walkintransactions" :key="walkintransaction.walkin_id">
                                    <td>{{walkintransaction.walkin_id}}</td>
                                    <td>{{walkintransaction.receipt_number}}</td>
                                    <td>{{walkintransaction.product_code}}</td>
                                    <td>{{walkintransaction.client_id}}</td>
                                    <td>{{walkintransaction.handler_id}}</td>
                                    <td>{{walkintransaction.created_at}}</td>
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

                    <form @submit.prevent="addWalkinTransaction">

                        <div class="modal-body">

                            <div class="form-group">
                                <input v-model="form.receipt_number" type="text" name="receipt-number" id="receipt-number" class="form-control" :class="{ 'is-invalid': form.errors.has('receipt_number') }" placeholder="Receipt Number" required>
                                <has-error :form="form" field="receipt_number"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.product_code" type="text" name="product-code" id="product-code" class="form-control" :class="{ 'is-invalid': form.errors.has('product_code') }" placeholder="Product Code" required>
                                <has-error :form="form" field="product_code"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.client_id" type="text" name="client-id" id="client-id" class="form-control" :class="{ 'is-invalid': form.errors.has('client_id') }" placeholder="Client ID" required>
                                <has-error :form="form" field="client_id"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.handler_id" type="text" name="handler-id" id="handler-id" class="form-control" :class="{ 'is-invalid': form.errors.has('handler_id') }" placeholder="Handler ID" required>
                                <has-error :form="form" field="handler_id"></has-error>
                            </div>

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

        data () {

            return {

                walkintransactions: {},

                form: new Form({
                    receipt_number: '',
                    product_code: '',
                    client_id: '',
                    handler_id: ''
                })

            }

        },

        methods: {

            displayWalkinTransactions() {
                axios.get('api/walkintransaction').then(({ data }) => (this.walkintransactions = data.data));
            },

            addWalkinTransaction() {
                this.form.post('api/walkintransaction');
            }

        },

        mounted() {
            this.displayWalkinTransactions();
            console.log('Component mounted.')
        }
    }

</script>