<template>
  <div id="app">
    <header class="header">
      <nav class="navbar navbar-expand-lg justify-content-between">
        <a class="navbar-brand" href="/">
          <img src="./assets/logo.png" alt=" EDM LOGO">
          <span class="p-3">Headless Drupal</span>
        </a>
        <ul class="navbar-nav">
          <li class="nav-item active">
            <router-link v-bind:to="'/'" class="nav-link">EDM albums</router-link>
          </li>
          <li class="nav-item">
            <router-link v-bind:to="'/artist'" class="nav-link">EDM artist</router-link>
          </li>
          <li class="nav-item">
            <router-link v-bind:to="'/about'" class="nav-link">About me</router-link>
          </li>
        </ul>
      </nav>
    </header>
    <div class="container">
      <!--      router view tags to load components into the router-->
      <router-view></router-view>
    </div>
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
