import './bootstrap';
import router from './routes';
import Vue from "vue";
import Navigation from "../js/components/Navigation";
import Footer from "../js/components/FooterView";
import VueSwal from "vue-swal";


Vue.use(VueSwal);

Vue.component('navigation', Navigation);
Vue.component('footer-view', Footer);

new Vue({
    router,
}).$mount('#app')

