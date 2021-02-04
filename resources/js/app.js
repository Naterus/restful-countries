import Vue from "vue";
import './bootstrap';
import router from './routes';
import './jquery-plugin';
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';

import Navigation from "../js/components/Navigation";
import Footer from "../js/components/FooterView";
import DocNavigation from "./components/DocNavigation";


Vue.component('doc-navigation', DocNavigation);
Vue.component('navigation', Navigation);
Vue.component('footer-view', Footer);

new Vue({
    router,
}).$mount('#app')

