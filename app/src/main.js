import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.config.productionTip = false

//tell vue to use the router and resource
Vue.use(VueRouter)
Vue.use(VueResource)

//importing components for the routers
import Album from './components/Album'
import Artist from './components/Artist'
import HelloWorld from "@/components/HelloWorld";

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

//define your routes
const routes = [
  {
    path: '/',
    component: Album,
  }, {
    path: '/artist',
    component: Artist
  },
  {
    path: '/about',
    component: HelloWorld
  }
]

//Create the router instance and pass the `routes` option
const router = new VueRouter({
  routes, //short for routes:routes
  mode: 'history'
})

new Vue({
  render: h => h(App),
  router
}).$mount('#app')
