<template>
  <div>
    <nav class="navbar navbar-expand-md navbar-dark bg-grey">
      <button
        class="navbar-toggler navbar-toggler-right"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <router-link :to="{name: 'admin.home'}" class="navbar-brand">
        <img
          src="/img/logo.png"
          width="30"
          height="30"
          class="d-inline-block align-top"
          alt=""
        />
        <span class="menu-collapsed">ITP MARKANDEYA BALI</span>
      </router-link>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#" @click.prevent="logout"
              ><font-awesome-icon :icon="['fas', 'sign-out-alt']" /> Logout <span class="sr-only">(current)</span></a
            >
          </li>
          <!-- Smaller devices menu END -->
        </ul>
      </div>
    </nav>
  </div>
</template>
<script>
import store from '../../../store';
export default {
    methods: {
        logout(){
            store.dispatch('logout');
        }
    }
}
</script>
<style scoped>
.bg-grey{
    background-color: rgba(5,5,5,0.3);
}
</style>
