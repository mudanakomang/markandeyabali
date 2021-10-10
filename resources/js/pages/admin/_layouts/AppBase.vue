
<template>
  <div>
    <nav-bar v-model="drawerOpen"></nav-bar>
    <side-bar v-model="drawerOpen"></side-bar>

   <v-main>

      <v-container class="py-8 px-6 mb-10" fluid>
        <router-view :key="$route.path"></router-view>
      </v-container>
     </v-main>
  </div>
</template>

<script>

import NavBar from './NavBar.vue';
import SideBar from './SideBar.vue';
export default {
  data() {
    return {
      drawerOpen: true
    };
  },
  components: {
    NavBar,
    SideBar,

  }
};
</script>
