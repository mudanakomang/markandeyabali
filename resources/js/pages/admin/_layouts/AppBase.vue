<template>
  <div>
      <NavBar />
       <SideBar />
    <!-- <router-view></router-view> -->
  </div>
</template>
<script>
import NavBar from './NavBar.vue';
import SideBar from './SideBar.vue';
export default {
  components: {
      NavBar,
      SideBar
  },
};
</script>
