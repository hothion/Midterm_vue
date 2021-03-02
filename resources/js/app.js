require('./bootstrap');
window.Vue = require('vue').default;
import VueRouter from 'vue-router';
Vue.use(VueRouter);
import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);
import App from './components/App.vue';
import Login from './components/Login.vue';
import Profile from './components/Profile.vue';

const routes = [
    {
        name: 'login',
        path: '/login',
        component: Login
    },
    {
        name: 'profile',
        path: '/profile',
        component: Profile
    }
  ];
  const router = new VueRouter({ mode: 'history', routes: routes});
  const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');


