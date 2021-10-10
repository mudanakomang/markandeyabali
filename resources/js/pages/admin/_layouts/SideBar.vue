<template>
  <v-navigation-drawer v-model="drawerOpen" app>
    <v-list-item>
      <v-list-item-content>
        <v-list-item-title class="title">
          ITP Markandeya Bali
        </v-list-item-title>
        <v-list-item-subtitle>
          Admin
        </v-list-item-subtitle>
      </v-list-item-content>
    </v-list-item>

    <v-divider></v-divider>

    <v-list dense nav>
      <v-list-item-group value="true">
        <template v-for="menu in navLeftMenus">
          <v-list-item v-if="!menu.hasChildren" :key="menu.id" :to="menu.route">
            <v-list-item-icon v-if="menu.icon">
              <v-icon>{{ menu.icon }}</v-icon>
            </v-list-item-icon>
            <v-list-item-content>
              <v-list-item-title>{{menu.label}}</v-list-item-title>
            </v-list-item-content>
          </v-list-item>

          <v-list-group v-else :key="menu.id" value="true" class="ml-1">
            <template v-slot:activator>
              <v-list-item-icon v-if="menu.icon">
                <v-icon>{{ menu.icon }}</v-icon>
              </v-list-item-icon>
              <v-list-item-content>
                <v-list-item-title>{{ menu.label }}</v-list-item-title>
              </v-list-item-content>
            </template>

            <v-list-item
              v-for="submenu in menu.children"
              :key="submenu.title"
              :to="submenu.route"
              exact
              class="ml-5"
            >
              <v-list-item-icon v-if="submenu.icon">
                <v-icon>{{ submenu.icon }}</v-icon>
              </v-list-item-icon>
              <v-list-item-content>
                <v-list-item-title>{{ submenu.label }}</v-list-item-title>
              </v-list-item-content>
            </v-list-item>
          </v-list-group>
        </template>
      </v-list-item-group>
    </v-list>
  </v-navigation-drawer>
</template>

<script>
const navLeftMenus = [
  {
    id: "berita",
    label: "Berita",
     icon: "mdi-newspaper",
    hasChildren: true,
    children: [
      {
        id: "berita.list",
        label: "Daftar Berita",
        route: { name: "berita" },
        hasChildren: false
      },
      {
        id: "tambah.berita",
        label: "Tambah Berita",
        route: { name: "tambah.berita" },
        hasChildren: false
      }
    ]
  },
  {
    id: "event",
    label: "Event",
     icon: "mdi-calendar-clock",
    hasChildren: true,
    children: [
      {
        id: "event.list",
        label: "Daftar Event",
        route: { name: "event" },
        hasChildren: false
      },
      {
        id: "tambah.event",
        label: "Tambah Event",
        route: { name: "tambah.event" },
        hasChildren: false
      }
    ]
  }
];
export default {
  props: {
    value: {
      type: Boolean,
      required: true
    }
  },
  data() {
    return {
      navLeftMenus
    };
  },
  computed: {
    drawerOpen: {
      get() {
        return this.value;
      },
      set(val) {
        this.$emit("input", val);
      }
    }
  },
  created() {}
};
</script>
