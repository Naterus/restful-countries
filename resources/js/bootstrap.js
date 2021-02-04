import Vue from 'vue';
import axios from 'axios';
import VueRouter from 'vue-router';
import VueSwal from "vue-swal"; //sweet alert
import VueMeta from 'vue-meta'; //meta title


window.Vue = Vue;
window.axios = axios;

Vue.use(VueRouter);
Vue.use(VueMeta);
Vue.use(VueSwal);


window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
