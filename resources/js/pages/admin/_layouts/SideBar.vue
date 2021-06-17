<template>
  <div class="row" id="body-row">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
      <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
      <!-- Bootstrap List Group -->
      <ul class="list-group">
        <!-- Separator with title -->
        <li
          class="
            list-group-item
            sidebar-separator-title
            text-muted
            d-flex
            align-items-center
            menu-collapsed
          "
        >
          <small>MAIN MENU</small>
        </li>
        <!-- /END Separator -->
        <!-- Menu with submenu -->
        <a
          href="#submenu1"
          data-toggle="collapse"
          aria-expanded="false"
          class="
            bg-dark
            list-group-item list-group-item-action
            flex-column
            align-items-start
          "
        >
          <div class="d-flex w-100 justify-content-start align-items-center">
            <span>
                <font-awesome-icon class="fa-fw mr-3" :icon="['fas', 'tachometer-alt']" />
            </span>
            <span class="menu-collapsed">Dashboard</span>
            <span class="submenu-icon ml-auto"></span>
          </div>
        </a>
        <!-- Submenu content -->
        <div id="submenu1" class="collapse sidebar-submenu">
          <a
            href="#"
            class="list-group-item list-group-item-action bg-dark text-white"
          >
            <span class="menu-collapsed">Chahgag</span>
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action bg-dark text-white"
          >
            <span class="menu-collapsed">Reports</span>
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action bg-dark text-white"
          >
            <span class="menu-collapsed">Tables</span>
          </a>
        </div>
        <a
          href="#submenu2"
          data-toggle="collapse"
          aria-expanded="false"
          class="
            bg-dark
            list-group-item list-group-item-action
            flex-column
            align-items-start
          "
        >
          <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="fa fa-user fa-fw mr-3"></span>
            <span class="menu-collapsed">Profile</span>
            <span class="submenu-icon ml-auto"></span>
          </div>
        </a>
        <!-- Submenu content -->
        <div id="submenu2" class="collapse sidebar-submenu">
          <a
            href="#"
            class="list-group-item list-group-item-action bg-dark text-white"
          >
            <span class="menu-collapsed">Settings</span>
          </a>
          <a
            href="#"
            class="list-group-item list-group-item-action bg-dark text-white"
          >
            <span class="menu-collapsed">Password</span>
          </a>
        </div>
        <a href="#" class="bg-dark list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="fa fa-tasks fa-fw mr-3"></span>
            <span class="menu-collapsed">Tasks</span>
          </div>
        </a>
        <!-- Separator with title -->
        <li
          class="
            list-group-item
            sidebar-separator-title
            text-muted
            d-flex
            align-items-center
            menu-collapsed
          "
        >
          <small>OPTIONS</small>
        </li>
        <!-- /END Separator -->
        <a href="#" class="bg-dark list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="fa fa-calendar fa-fw mr-3"></span>
            <span class="menu-collapsed">Calendar</span>
          </div>
        </a>
        <a href="#" class="bg-dark list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-start align-items-center">
            <span >
                <i class="fa fa-envelope fa-fw mr-3"></i>
            </span>
            <span class="menu-collapsed"
              >Messages
              <span class="badge badge-pill badge-primary ml-2">5</span></span
            >
          </div>
        </a>
        <!-- Separator without title -->
        <li class="list-group-item sidebar-separator menu-collapsed"></li>
        <!-- /END Separator -->
        <a href="#" class="bg-dark list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="fa fa-question fa-fw mr-3"></span>
            <span class="menu-collapsed">Help</span>
          </div>
        </a>
        <a
          href="#top"
          data-toggle="sidebar-colapse"
          class="
            bg-dark
            list-group-item list-group-item-action
            d-flex
            align-items-center
          "
        >
          <div class="d-flex w-100 justify-content-start align-items-center">
            <span id="collapse-icon" class="fa fa-2x mr-3"></span>
            <span id="collapse-text" class="menu-collapsed">Collapse</span>
          </div>
        </a>
      </ul>
      <!-- List Group END-->
    </div>
    <div class="col p-4">
      <div class="card">
        <div class="card-body">
          <router-view></router-view>
        </div>
      </div>
    </div>
    <!-- Main Col END -->
  </div>
</template>
<script>
export default {
  mounted() {
    $("#body-row .collapse").collapse("hide");

    // Collapse/Expand icon
    $("#collapse-icon").addClass("fa-angle-double-left");

    // Collapse click
    $("[data-toggle=sidebar-colapse]").click(function () {
      SidebarCollapse();
    });

    function SidebarCollapse() {
      $(".menu-collapsed").toggleClass("d-none");
      $(".sidebar-submenu").toggleClass("d-none");
      $(".submenu-icon").toggleClass("d-none");
      $("#sidebar-container").toggleClass("sidebar-expanded sidebar-collapsed");

      // Treating d-flex/d-none on separators with title
      var SeparatorTitle = $(".sidebar-separator-title");
      if (SeparatorTitle.hasClass("d-flex")) {
        SeparatorTitle.removeClass("d-flex");
      } else {
        SeparatorTitle.addClass("d-flex");
      }

      // Collapse/Expand icon
      $("#collapse-icon").toggleClass(
        "fa-angle-double-left fa-angle-double-right"
      );
    }
  },
};
</script>
<style scoped>
/* @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'); */
#body-row {
  margin-left: 0;
  margin-right: 0;
}
#sidebar-container {
  min-height: 100vh;
  background-color: #333;
  padding: 0;
}

/* Sidebar sizes when expanded and expanded */
.sidebar-expanded {
  width: 230px;
}
.sidebar-collapsed {
  width: 60px;
}

/* Menu item*/
#sidebar-container .list-group a {
  height: 50px;
  color: white;
}

/* Submenu item*/
#sidebar-container .list-group .sidebar-submenu a {
  height: 45px;
  padding-left: 30px;
}
.sidebar-submenu {
  font-size: 0.9rem;
}

/* Separators */
.sidebar-separator-title {
  background-color: #333;
  height: 35px;
}
.sidebar-separator {
  background-color: #333;
  height: 25px;
}
.logo-separator {
  background-color: #333;
  height: 60px;
}

/* Closed submenu icon */
#sidebar-container
  .list-group
  .list-group-item[aria-expanded="false"]
  .submenu-icon::after {
  content: " \f0d7";
  font-family: FontAwesome;
  display: inline;
  text-align: right;
  padding-left: 10px;
}
/* Opened submenu icon */
#sidebar-container
  .list-group
  .list-group-item[aria-expanded="true"]
  .submenu-icon::after {
  content: " \f0da";
  font-family: FontAwesome;
  display: inline;
  text-align: right;
  padding-left: 10px;
}
</style>
