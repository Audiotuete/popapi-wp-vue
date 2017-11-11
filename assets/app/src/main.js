// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'

import App from './App'
import { routes } from './routes'

Vue.use(VueRouter)
Vue.prototype.$http = axios
Vue.config.productionTip = false

const router = new VueRouter({
  // mode: 'history',
  routes
})

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})
