<template>
  <div class="contanier hero-section">
    <div class="hero-text">
      <h1 class="header-text">BEYOND EDUCATION</h1>
      <a role="button" target="_blank" href="https://pmb.itp.stkipsuarbangli.ac.id" class="register">DAFTAR SEKARANG</a>
    </div>
  </div>
</template>
<script>
export default {

}
</script>
<style scoped>
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
.hero-text a{
    text-decoration: none;
    letter-spacing: normal;
}

</style>
