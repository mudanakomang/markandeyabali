<template>
  <div class="contanier hero-section">
    <nav>
      <div class="menu-icon">
        <i class="fa fa-bars fa-2x"></i>
      </div>
      <div class="logo">
        <img width="80px" src="/img/logo-transparent.png" alt="Logo">
      </div>
      <div class="menu">
        <ul>
          <li><router-link :to="{path: '/'}">Home</router-link></li>
          <li><router-link :to="{path: '/about'}">Akademik</router-link></li>
          <li><a href="#">Kemahasiswaan</a></li>
          <li><a href="#">Penjaminan Mutu</a></li>
          <li><a href="#">Penelitian</a></li>
        </ul>
      </div>
    </nav>
     <div class="hero-text">
      <h1 class="header-text">BEYOND EDUCATION</h1>
      <button type="submit" class="register">DAFTAR SEKARANG</button>
    </div>
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
.register{
    transition: all .5s ease;
    color: #fff;
    border: 3px solid white;
    font-family:'Montserrat', sans-serif;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    line-height: 1;
    font-size: 17px;
    background-color : transparent;
    padding: 10px;
    outline: none;
    border-radius: 4px;
}
.register:hover{
    color: #001F3F;
    background-color: #fcc254;
    border: 3px solid #fcc254;
}
.hero-section {
  height: 100vh;
  color: white;
  height: 75vh;
  background-image:
    linear-gradient( rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0)),
    url('/img/header.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
.hero-text {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100%;
  font-size: 1.4em;
  letter-spacing: 9px;
}

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

@media (max-width: 786px) {
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
}

nav ul {
  line-height: 60px;
  list-style: none;
  background: rgba(0, 0, 0, 0);
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

@media (max-width: 786px) {
  .logo {
    position: fixed;
    top: 0;
    margin-top: 16px;
  }

  nav ul {
    max-height: 0px;
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
