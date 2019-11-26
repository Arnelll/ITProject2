require('./bootstrap');

window.Vue = require('vue');

import moment from 'moment'
import { Form, HasError, AlertError } from 'vform';

import Swal from 'sweetalert2'
window.Swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

window.Toast = Toast;

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import VueProgressBar from 'vue-progressbar'
Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '20px'
})

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

let routes = [

    { path: '/user_profile', component: require('./components/User_Profile.vue').default },
    { path: '/dashboard', component: require('./components/Dashboard.vue').default },
    { path: '/products', component: require('./components/Products.vue').default },
    { path: '/product_checkout', component: require('./components/Product_Checkout.vue').default },
    { path: '/product_returns', component: require('./components/Product_Returns.vue').default },
    { path: '/suppliers', component: require('./components/Suppliers.vue').default },
    { path: '/deliveries', component: require('./components/Deliveries.vue').default },
    { path: '/inventory_log', component: require('./components/Inventory_Log.vue').default },
    { path: '/clients', component: require('./components/Clients.vue').default },
    { path: '/walk_ins', component: require('./components/Walk_Ins.vue').default },
    { path: '/job_orders', component: require('./components/Job_Orders.vue').default },
    { path: '/vehicles', component: require('./components/Vehicles.vue').default },
    { path: '/users', component: require('./components/Users.vue').default }

]

const router = new VueRouter({
    mode: 'history',
    routes
})

Vue.filter('mainDateFormat', function(created) {
    return moment(created).format('MMMM Do YYYY');
});

window.Fire = new Vue();

Vue.component('example-component', require('./components/Example_Component.vue').default);

const app = new Vue({
    el: '#app',
    router
});