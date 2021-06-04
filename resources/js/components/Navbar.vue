<template>
<div>
 <nav>
      <div class="menu-icon">
        <i class="fa fa-bars fa-2x"></i>
      </div>
      <div class="logo">
        <img width="75px" src="/img/logo.png" alt="Logo">
      </div>
      <div class="menu">
        <ul>
          <li><router-link :to="{path: '/'}">Home</router-link></li>
          <li><router-link :to="{path: '/akademik'}">Akademik</router-link></li>
          <li><router-link :to="{path: '/kemahasiswaan'}">Kemahasiswaan</router-link></li>
          <li><router-link :to="{path: '/penjaminan-mutu'}">Penjaminan Mutu</router-link></li>
          <li><router-link :to="{path: '/penelitian'}">Penelitian</router-link></li>
        </ul>
      </div>
    </nav>
</div>

</template>
<script>
import $ from 'jquery';
export default {
    mounted (){
        $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect
     $(document).ready(function(){
         $('li a').on('click', function(){
             $('nav ul').removeClass('showing')
         })
     })
     $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
    }
}
</script>
<style  scoped>
h1 {
  margin: 0 0 3rem 0;
  font-family: 'Varta', sans-serif;
  text-shadow: 2px 2px black;
}

p {
  font-family: 'Archivo', sans-serif;
  text-shadow: 2px 2px black;
  letter-spacing: 3px;
  color: white;
  text-justify: right;
}
@media (max-width: 883px) {
    .hero-text p{
        font-family: 'Archivo', sans-serif;
        text-shadow: 2px 2px black;
        letter-spacing: 3px;
        color: white;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
}
.logo {
  line-height: 60px;
  position: fixed;
  float: left;
  margin: 16px 46px;
  color: #fff;
  font-weight: bold;
  font-size: 20px;
  letter-spacing: 2px;
}

nav {
  position: fixed;
  width: 100%;
  line-height: 60px;
  z-index: 999999;
}

nav ul {
  line-height: 60px;
  list-style: none;
  background: rgba(0, 0, 0, 0.5);
  overflow: hidden;
  color: #fff;
  padding: 0;
  text-align: right;
  margin: 0;
  padding-right: 40px;
  transition: 1s;
}

nav.black ul {
  background: #000;
}

nav ul li {
  display: inline-block;
  padding: 16px 40px;
}

nav ul li a {
  text-decoration: none;
  color: #fff;
  font-size: 16px;
}

.menu-icon {
  line-height: 60px;
  width: 100%;
  background: #000;
  text-align: right;
  box-sizing: border-box;
  padding: 15px 24px;
  cursor: pointer;
  color: #fff;
  display: none;
}

@media (max-width: 883px) {
  .logo {
    position: fixed;
    top: 0;
    margin-top: 16px;
  }

  nav ul {
    max-height: 10px;
    background: #000;
  }

  nav.black ul {
    background: #000;
  }

  .showing {
    max-height: 38em;
  }

  nav ul li {
    box-sizing: border-box;
    width: 100%;
    padding: 24px;
    text-align: center;
  }

  .menu-icon {
    display: block;
  }
}
</style>
