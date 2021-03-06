
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');
import moment from 'moment';
import { Form, HasError, AlertError } from 'vform';

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import VueProgressBar from 'vue-progressbar'
Vue.use(VueProgressBar,{
    color: 'rgb(143,255,199)',
    failedColor: 'red',
    height: '5px'
})

import Swal from 'sweetalert2'

import Dropdown from 'vue-simple-search-dropdown';

Vue.use(Dropdown);

Vue.component('pagination', require('laravel-vue-pagination'));

window.Swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });

window.Toast = Toast; //Global Alert

window.Fire = new Vue(); //Custom Events

let routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue').default },
    { path: '/products', component: require('./components/Products.vue').default },
    { path: '/clients', component: require('./components/Clients.vue').default },
    { path: '/providers', component: require('./components/Providers.vue').default },
    { path: '/transactions', component: require('./components/Transactions.vue').default },
    { path: '/pl', component: require('./components/Providers.vue').default },
    { path: '/productCheckout', component: require('./components/ProductCheckout.vue').default },
    { path: '/productReturn', component: require('./components/ProductReturn.vue').default },
    { path: '/po', component: require('./components/Orders.vue').default },
    { path: '/jo', component: require('./components/JobOrders.vue').default }
]


const router = new VueRouter({
    mode: 'history',
    routes, // short for routes:routes'
    linkActiveClass: 'active'
})

Vue.filter('upFirstLetter', function(text){
    return text.charAt(0).toUpperCase() + text.slice(1)
});

Vue.filter('readableDate', function(det){
    return moment(det).format('MMMM Do YYYY');
})


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
    data: {
        search: ''
    },
    methods: {
        searchThis(){
            Fire.$emit('search');
        }
    }
});
