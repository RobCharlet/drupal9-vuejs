import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'

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

Vue.config.productionTip = false

//instantiate the vue instance
new Vue({
  //define the selector for the root component
  el:'#app',
  //pass the template to the root component
  template:'<App/>',
  //declare components that the root component can access
  components: {
    App
  },
  //pass in the router to the view instance
  router
}).$mount('#app')
