<template>
<div>
    <footer class="main-footer bg-four sp-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-sm-12 footer-colmun">
                <div class="footer-clomun footer-about-widget">
                    <div class="footer-logo">
                        <figure>
                            <router-link :to="{name: 'home'}"><img width="120px" src="/img/logo.png" alt="Logo Bottom"></router-link>
                        </figure>
                    </div>
                    <p class="text-dark">These days are all share them with me oh said Cali forny till the one day when the making your way in the world  and when the odds are against him and their dangers work to do.</p>
                    <ul class="social-links">
                        <li><a href="#"><font-awesome-icon size="2x" :icon="{ prefix: 'fab', iconName: 'facebook' }" /></a></li>
                        <li><a href="#"><font-awesome-icon size="2x" :icon="{ prefix: 'fab', iconName: 'twitter' }" /></a></li>
                        <li><a href="#"><font-awesome-icon size="2x" :icon="{ prefix: 'fab', iconName: 'instagram' }" /></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-6 col-sm-12 footer-colmun">
                <!-- <div class="footer-clomun footer-menu-link">
                    <div class="sec-title-one pb-one">
                        <h6>Archives</h6>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Janaury 2018</a></li>
                        <li><a href="#"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>February 2018</a></li>
                        <li><a href="#"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>March 2018</a></li>
                        <li><a href="#"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>April 2018</a></li>
                        <li><a href="#"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>May 2018</a></li>
                    </ul>
                </div> -->
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-12 footer-colmun">
                <!-- <div class="footer-clomun footer-blog">
                    <div class="sec-title-one pb-one">
                        <h6>Twitter Feeds</h6>
                    </div>
                    <div class="item">
                        <div class="icon-box">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </div>
                        <div class="icon-text">
                            <p><a href="#">HJDUYDYTSBS</a> share is the baby said Californy.</p>
                            <span><i class="fa fa-calendar" aria-hidden="true"></i>5 min ago</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon-box">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </div>
                        <div class="icon-text">
                            <p><a href="#">HJDUYDYTSBS</a> share is the baby said Californy.</p>
                            <span><i class="fa fa-calendar" aria-hidden="true"></i>3 days ago</span>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-12 footer-colmun">
                <!-- <div class="footer-clomun footer-gallery-widget">
                    <div class="sec-title-one pb-one">
                        <h6>Image Gallery</h6>
                    </div>
                    <div class="innar-box">
                        <div class="row">
                            <div class="col-sm-4">
                                <figure class="image">
                                    <a data-fancybox="1" href="images/gallery/1.jpg" class="img-popup"><img src="images/gallery/1.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="col-sm-4">
                                <figure class="image">
                                    <a data-fancybox="1" href="images/gallery/2.jpg" class="img-popup"><img src="images/gallery/2.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="col-sm-4">
                                <figure class="image">
                                    <a data-fancybox="1" href="images/gallery/3.jpg" class="img-popup"><img src="images/gallery/3.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="col-sm-4">
                                <figure class="image">
                                    <a data-fancybox="1" href="images/gallery/4.jpg" class="img-popup"><img src="images/gallery/4.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="col-sm-4">
                                <figure class="image">
                                    <a href="#"><img src="images/gallery/5.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="col-sm-4">
                                <figure class="image">
                                    <a data-fancybox="1" href="images/gallery/6.jpg" class="img-popup"><img src="images/gallery/6.jpg" alt=""></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</footer>
<!--End main-footer-->


<!--Start Footer Bottom-->
<section class="footer-bottom bg-three">
    <div class="container">
        <div class="bottom-text text-center">
            <p>&copy; Copyrights {{ new Date().getFullYear()}} {{ appName }}</p>
        </div>
    </div>
</section>
<!--End Footer Bottom-->
</div>
</template>
<script>
export default {
   data() {
    return {
      hover: false,
      appName: process.env.MIX_APP_NAME,
    };
  },
}

</script>
<style scoped>
.main-footer{
    position: relative;
    z-index: -1;
}
.main-footer h6 {
	font-size: 20px;
	line-height: 27px;
	color: #ffffff;
	font-weight: 700;
	text-transform: capitalize;
}

.main-footer .sec-title-one {
	margin-bottom: 25px;
}

.footer-about-widget {
	margin-right: 50px;
}

.footer-about-widget p {
	color: #b3b3b3;
}

.footer-about-widget .footer-logo {
	padding-bottom: 10px;
}

.footer-about-widget .social-links {
	padding-top: 10px;
}

.footer-about-widget .social-links li {
	display: inline-block;
	margin: 0px 2px;
}

.footer-about-widget .social-links li i {
	font-size: 14px;
	width: 45px;
	height: 45px;
	color: #adadad;
	text-align: center;
	background: #222222;
	line-height: 45px;
	transition: all 500ms ease;
}

.footer-about-widget .social-links li:hover i {
	color: #f6f6f6;
	background: #f36371;
	transition: all 500ms ease;
}

.footer-menu-link li a {
	font-size: 16px;
	color: #b3b3b3;
	line-height: 41px;
	transition: all 500ms ease;
}

.footer-menu-link li a:hover {
	color: #f36371;
	transition: all 500ms ease;
}

.footer-menu-link li i {
	margin-right: 8px;
	color: #f36371;
}

.footer-blog {
	margin-left: 25px;
}

.footer-blog .item {
	position: relative;
	padding-bottom: 15px;
	margin-bottom: 15px;
	border-bottom: 1px solid #3e3e3e;
}

.footer-blog .item:last-child {
	border-bottom: none;
}

.footer-blog .icon-box {
	position: absolute;
	top: 5px;
	left: 0px;
}

.footer-blog .icon-box i {
	font-size: 16px;
	color: #0084b4;
}

.footer-blog .icon-text {
	position: relative;
	padding-left: 35px;
}

.footer-blog .icon-text p {
	font-size: 16px;
	color: #b3b3b3;
	line-height: 24px;
	margin-bottom: 5px;
}

.footer-blog .icon-text a {
	font-size: 15px;
	color: #0084b4;
	text-transform: uppercase;
}

.footer-blog .icon-text span {
	font-size: 14px;
	color: #b3b3b3;
	font-style: normal;
	font-weight: 400;
}

.footer-blog .icon-text span i {
	font-size: 12px;
	margin-right: 10px;
	color: #f9be4d;
}

.footer-gallery-widget {
	position: relative;
	margin-left: 30px;
}

.footer-gallery-widget .innar-box {
	padding: 0px 10px;
}

.footer-gallery-widget .image {
	position: relative;
	margin: 5px -10px;
}

.footer-gallery-widget img {
	width: 100%;
}

ul, li {
    list-style: none;
    margin: 0;
    padding: 0;
}

.sp-one {
	padding: 100px 0px;
}

.bg-four {
	background: #3333332d;
}

/*===Footer Bottom===*/

.bottom-text p {
	font-size: 15px;
	color: #333333;
	line-height: 28px;
	padding: 16px 0px;
	margin-bottom: 0px;
}

</style>
