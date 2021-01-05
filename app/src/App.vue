<!--<template>-->
<!--  <div id="app">-->
<!--    <img alt="Vue logo" src="./assets/logo.png">-->
<!--    <HelloWorld msg="Welcome to Your Vue.js App"/>-->
<!--  </div>-->
<!--</template>-->

<!--<script>-->
<!--import HelloWorld from './components/HelloWorld.vue'-->

<!--export default {-->
<!--  name: 'App',-->
<!--  components: {-->
<!--    HelloWorld-->
<!--  }-->
<!--}-->
<!--</script>-->

<!--<style>-->
<!--#app {-->
<!--  font-family: Avenir, Helvetica, Arial, sans-serif;-->
<!--  -webkit-font-smoothing: antialiased;-->
<!--  -moz-osx-font-smoothing: grayscale;-->
<!--  text-align: center;-->
<!--  color: #2c3e50;-->
<!--  margin-top: 60px;-->
<!--}-->
<!--</style>-->

<template>
  <div id="app">
    <nav class="navbar  fixed-top navbar-expand-lg justify-content-between">
      <a class="navbar-brand" href="#"><img src="./assets/logo.png" alt=" EDM LOGO"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="nav ml-auto navbar-nav">
          <li class="nav-item active">
            <router-link v-bind:to="'/'">Edm albums</router-link>
          </li>
          <li class="nav-item">
            <router-link v-bind:to="'/artist'">edm artist</router-link>
          </li>
          <li class="nav-item">
            <router-link v-bind:to="'/about'">about me</router-link>
          </li>
        </ul>
      </div>
    </nav>

    //router view tags to load components into the router
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style type="text/css">
@import url('./assets/style.css');
</style>
