// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import VueCookies from 'vue-cookies'
import BootstrapVue from 'bootstrap-vue'
import axios from 'axios'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import DG from '2gis-maps'

/* eslint-disable no-new */
Vue.prototype.$axios = axios

Vue.use(DG)
Vue.use(VueCookies)
Vue.use(axios)
Vue.use(BootstrapVue)
Vue.component('NavBar',require('./components/navbar.vue').default)
Vue.config.productionTip = false
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})

