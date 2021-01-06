import Vue from 'vue';
Vue.config.devtools = true;

import DemoMenu from "./components/DemoMenu";

new Vue({
  el: '#demo-menu',
  name: 'GolfChannelBase',
  components: {
    DemoMenu,
  }
});
