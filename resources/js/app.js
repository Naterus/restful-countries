import Vue from "vue";
import './bootstrap';
import router from './routes';
import './jquery-plugin';
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'popper.js';
import Navigation from "../js/components/Navigation";
import Footer from "../js/components/FooterView";


Vue.component('navigation', Navigation);
Vue.component('footer-view', Footer);

new Vue({
    router,
}).$mount('#app')

