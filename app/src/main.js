import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'

Vue.config.productionTip = false

//tell vue to use the router and resource
Vue.use(VueRouter)
Vue.use(VueResource)

//importing components for the routers
import Album from './components/Album'
import Artist from './components/Artist'

//define your routes
const routes = [
  {
    path: '/',
    component: Album,
  }, {
    path: '/artist',
    component: Artist
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
