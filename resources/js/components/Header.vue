<template>
<header>

  <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
  <div class="overlay"></div>

  <!-- The HTML5 video element that will create the background video on the header -->
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"  preload="auto">
    <source src="/video/hero.mp4" type="video/mp4">
  </video>

  <!-- The header content -->
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">BEYOND EDUCATION</h1>
        <p class="lead mb-0"><a role="button" target="_blank" href="https://pmb.itp.stkipsuarbangli.ac.id" class="register">DAFTAR SEKARANG</a></p>
      </div>
    </div>
  </div>
</header>
</template>
<script>
export default {

}
</script>
<style scoped>
header {
  position: relative;
  background-color: black;
  height: 100vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;

}
header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);

}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}
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
  height: 90vh;
  color: white;
  background-image:
    linear-gradient( rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0)),
    url('/img/header.jpg?v=2');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
.hero-text {
  /* display: flex;
  flex-direction: column; */
  align-items: center;
  justify-content: center;
  height: 100%;
  font-weight: 500;
  letter-spacing: 9px;
  color: rgb(0, 0, 0);
}
.hero-text a{
    text-decoration: none;
    letter-spacing: normal;
}
body {
  font-size: 1.2rem;
}
.hero {
    left: 50%;
    margin-left: -200vw;
    margin-right: -50vw;
    max-width: 100vw;
    position: relative;
    right: 50%;
    width: 100vw;
}
h2 {
  font-weight: 500;
}

header.home-hero {
  position: relative;
  height: 89vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}
#heroVideo{
    width: 70%;

}
header.home-hero .container {
  position: relative;
  z-index: 2;
  height: 100%;
}

.text-container {
  background-image:
    linear-gradient(#141414, #0f0f0f, #000);
  border-left: 2px solid #212121;
  border-right: 2px solid #212121;
}

.btn {
  max-width: 250px;
  border-radius: 0;
  font-weight: 500;
}

</style>
