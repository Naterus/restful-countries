import Vue from 'vue';
import axios from 'axios';
import VueRouter from 'vue-router';


window.Vue = Vue;
window.axios = axios;

Vue.use(VueRouter);
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
