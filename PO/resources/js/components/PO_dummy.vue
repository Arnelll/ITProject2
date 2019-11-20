<template>

    <div class="container">

        
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-xs-center">
                            <h2>Invoice for purchase order #6666</h2>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-12 col-md-3 col-lg-3">
                                <div class="card height">
                                    <div class="card-header">Billing Details</div>
                                    <div class="card-block p-2">
                                        <input v-model="recipient" type="text" name="recipient" id="recipient" class="form-control"  placeholder="Recipient" required>
                                        <input v-model="to_address" type="text" name="to_address" id="to_address" class="form-control" placeholder="To Address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3 col-lg-3">
                                <div class="card  height">
                                    <div class="card-header">Supplier</div>
                                    <div class="card-block p-2">
                                        <select name="supplier_id" v-model="supplier_id" id="supplier_id" class="form-control">
                                            <option v-for="supplier in suppliers" :value="supplier.supplier_id">{{supplier.name}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h3 class="text-xs-center"><strong>Order summary</strong></h3>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <td class="text-xs-left"><strong>Product Name</strong></td>
                                                <td class="text-xs-center"><strong>Item Price</strong></td>
                                                <td class="text-xs-right"><strong>Product Quantity</strong></td>
                                                <td class="text-xs-right"><strong>Total</strong></td>
                                            </tr>
                                        <a v-on:click="addForm" class="addForm">
                                             <i class="fas fa-cannabis iconbig text-green"></i>add
                                        </a>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(form, index) in addForms">
                                                <td class="text-xs-left">
                                                    <select @change="getPrice" v-model="form.product_id" class="form-control">
                                                        <option disabled>Select Product</option>
                                                        <option  v-for="product in products" :value="product.product_id">{{product.product_name}}
                                                        </option>
                                                    </select>
                                                </td>
                                                <td class="text-xs-left">
                                                    <select v-model="form.product_price" class="form-control">
                                                        <option v-for="product in producti" :value="product.price">{{product.price}}
                                                        </option>
                                                    </select>
                                                </td>
                                                <td class="text-xs-center"><input v-model="form.order_quantity" type="numeric" name="order_quantity" id="order_quantity" class="form-control" placeholder="Quantity to order"></td>
                                                <td class="text-xs-right" v-model="form.product_total">
                                                    <select v-model="form.product_total" class="form-control">
                                                        <option :value="form.product_price*form.order_quantity">{{form.product_price*form.order_quantity}}
                                                        </option>
                                                    </select>
                                                </td>
                                                
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td class="emptyrow"></td>
                                                <td class="emptyrow"></td>
                                                <td class="emptyrow text-xs-center"></td>
                                                <td class="emptyrow text-xs-right">
                                                    <div class="btn-group dropright">
                                                        <button type="button" class="btn btn-primary button-grey">Status</button>
                                                        <button type="button" class="btn btn-primary dropdown-toggle px-3 button-grey" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <span class="sr-only button-grey">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Ongoing</a>
                                                            <a class="dropdown-item" href="#">Delivered</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="emptyrow"><i class="fas fa-cannabis iconbig text-green"></i></td>
                                                <td class="emptyrow"></td>
                                                <td class="emptyrow text-xs-center"></td>
                                                <td class="emptyrow text-xs-right"><button class="btn btn-success" @click="addPO()">Add</button></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>

</template>

<script>

    export default {

        data () {
            
            return {
                isHidden: false,
                addForms: [],
                orders: {},
                suppliers: {},
                products: {},
                producti: [],
                recipient: '',
                to_address: '',
                supplier_id: ''
            }
        },

        methods: {
            loadPO() {
                axios.get('api/po').then(({ data }) => (this.orders = data.data));
            },
            loadS() {
                axios.get('api/supplier').then(({ data }) => (this.suppliers = data.data));
            },
            loadP(){
                axios.get('api/product').then(({ data }) => (this.products = data.data));
            },
            getPrice(e){
                axios.get('/api/productd',{
                 params: {
                   product_id: this.addForms[this.addForms.length-1].product_id
                 }
              }).then(function(response){
                    this.producti = response.data;           
                }.bind(this));
            },
            addForm(){
                this.addForms.push({
                    recipient: this.recipient,
                    supplier_id: this.supplier_id,
                    to_address: this.to_address,
                    order_quantity: '',
                    product_price: '',
                    product_id: '',
                    product_total: ''
                });
            },
            addOrders(){
                
            },
            addPO() {
                axios.post('./api/po',{ordersT:this.addForms});
            }
                    
        },
        
        mounted() {
            this.loadPO();
            this.loadS();
            this.loadP();
        }
    }

</script>