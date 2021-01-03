<template>
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
</template>

<script>
import axios from 'axios';
  export default {
    name: 'DemoMenu',
    data() {
      return {
        menuItems: null
      }
    },
    mounted() {
      const vm = this;
      axios.get(`/entity/menu/scores/tree? format=json`).then(response=>{
        vm.menuItems = _.map(response.data, 'link');
      })
    }
  }
</script>

<style scoped></style>
