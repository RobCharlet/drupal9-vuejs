<template>
  <div>
    <h1>Hello</h1>
    <div v-if="menuItems" :key="Link.meta_data.entity_id">
      <ul>
        <li v-for="link in menuItems" :key="Link.meta_data.entity_id">
          <a :href="link.url">
          <span>
            {{ link.title }}
          </span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'DemoMenu',
  data() {
    return {
      menuItems: null,
    };
  },
  mounted() {
    const vm = this;
    axios.get('/entity/menu/scores/tree? format=json').then((response) => {
      vm.menuItems = response.data.map('link');
    });
  },
};
</script>

<style scoped></style>
