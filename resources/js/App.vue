<template>
  <div id="app">
    <Navbar />
    <router-view />
    <Footer />
    <div
      class="scroll-to-top scroll-to-target"
      data-target="html"
      style="display: none"
    >
      <font-awesome-icon :icon="['fas', 'angle-double-up']" />
    </div>
  </div>
</template>
<script>
import Navbar from "./components/Navbar";
import Footer from "./components/Footer";
export default {
  components: {
    Navbar,
    Footer,
  },
  mounted(){
     $(window).on('scroll', function(){
         var scrollPos = 100;
         if($(window).scrollTop() > scrollPos){
              $('.scroll-to-top').fadeIn(1500);
         }else{
             $('.scroll-to-top').fadeOut(1500);
         }
     })
     if ($('.scroll-to-target').length) {
        $(".scroll-to-target").on('click', function() {
            var target = $(this).attr('data-target');
            // animate
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 1000);

        });
    }
  }
};
</script>
<style>
body p {
  font-size: 16px;
}
.scroll-to-top {
	background: #fcc254;
	border-radius: 50%;
	bottom: 25px;
	color: #333333;
	cursor: pointer;
	display: none;
	font-size: 30px;
	font-weight: normal;
	height: 55px;
	line-height: 50px;
	position: fixed;
	right: 15px;
	text-align: center;
	transition: all 500ms ease 0s;
	width: 55px;
	z-index: 99999;
	-webkit-box-shadow: 0px 8px 23px -6px rgba(27, 27, 27, 1);
	-moz-box-shadow: 0px 8px 23px -6px rgba(27, 27, 27, 1);
	box-shadow: 0px 8px 23px -6px rgba(27, 27, 27, 1);
}

.scroll-to-top .fa {
	color: #fff;
}
</style>
