/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

// Making import for all time related filters below
import moment from "moment";

// Form Validation using vform
import { Form, HasError, AlertError } from "vform";
window.Form = Form;

Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

// Implementing ProgressBar for Forms, Loading etc
import VueProgressBar from "vue-progressbar";

Vue.use(VueProgressBar, {
    color: "rgb(143, 255, 199)",
    failedColor: "red",
    height: "4px"
});

/**
 * Registering sweet alert and
 * making it global for all windows
 * ES6 Modules or TypeScript
 */

import swal from "sweetalert2";
window.swal = swal;

const toast = swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000
});

window.toast = toast;

/**
 * Registering Vue Routers and components
 * Contains Routes and there Paths
 */

import VueRouter from "vue-router";
Vue.use(VueRouter);

let routes = [
    {
        path: "/dashboard",
        component: require("./components/Dashboard.vue").default
    },
    {
        path: "/users",
        component: require("./components/Users.vue").default
    }
];

const router = new VueRouter({
    mode: "history",
    routes
});

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

// Global Filters
Vue.filter("capitalize", function(value) {
    if (!value) return "";
    value = value.toString();
    return value.charAt(0).toUpperCase() + value.slice(1);
});

Vue.filter("convertDate", function(created) {
    return moment(created).format("MMMM Do YYYY");
});

/**
 * Allowing Global Fire listener of events,
 * this works by usinf fire keywork and allows
 * to listen, emit etc and do task when event
 * is successfull
 */
window.Fire = new Vue();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
    router
});
