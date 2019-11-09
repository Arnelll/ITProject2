require('./bootstrap');

window.Vue = require('vue');

import { Form, HasError, AlertError } from 'vform';
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

import VueRouter from 'vue-router'
Vue.use(VueRouter)

let routes = [

    { path: '/user_profile', component: require('./components/User_Profile.vue').default },
    { path: '/dashboard', component: require('./components/Dashboard.vue').default },
    { path: '/products', component: require('./components/Products.vue').default },
    { path: '/product_checkout', component: require('./components/Product_Checkout.vue').default },
    { path: '/product_returns', component: require('./components/Product_Returns.vue').default },
    { path: '/suppliers', component: require('./components/Suppliers.vue').default },
    { path: '/purchase_orders', component: require('./components/Purchase_Orders.vue').default },
    { path: '/deliveries', component: require('./components/Deliveries.vue').default },
    { path: '/inventory_log', component: require('./components/Inventory_Log.vue').default },
    { path: '/clients', component: require('./components/Clients.vue').default },
    { path: '/walk_ins', component: require('./components/Walk_Ins.vue').default },
    { path: '/job_orders', component: require('./components/Job_Orders.vue').default },
    { path: '/vehicles', component: require('./components/Vehicles.vue').default },
    { path: '/users', component: require('./components/Users.vue').default },
    { path: '/mechanics', component: require('./components/Mechanics.vue').default }

]

const router = new VueRouter({
    mode: 'history',
    routes
})

Vue.component('example-component', require('./components/Example_Component.vue').default);

const app = new Vue({
    el: '#app',
    router
});