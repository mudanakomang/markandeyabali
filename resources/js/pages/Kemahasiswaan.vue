<template>
  <div>
    <section class="welcome-section sp-one">
      <div class="container" data-target="html">
        <div class="title pull-left">
          <h2>Kemahasiswaan</h2>
        </div>
        <ul class="title-manu pull-right">
          <li><router-link :to="{ path: '/' }">Home</router-link></li>
          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
          <li>Kemahasiswaan</li>
        </ul>
      </div>
    </section>
    <section class="callout-section">
      <div class="container-fluid">
        <div class="row">
          <div
            class="callout-item col-xl-2 col-lg-2"
            v-for="item in items"
            :key="item.id"
            :class="{ 'light-bg': item.id == selected }"
            @click="
              selectItem(item.id);
              scrollPage();
            "
          >
            <div class="row justify-content-center mr-auto">
              <h5>{{ item.title }}</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="welcome-section sp-one">
      <div class="container" ref="scroll">
        <div>
          <component :is="activeComponent"></component>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import BemOnDuty from '../pages/kemahasiswaan/BemOnDuty';
import TracerStudy from '../pages/kemahasiswaan/TracerStudy';
import UpcomingEvent from '../pages/kemahasiswaan/UpcomingEvent';
import Sayembara from '../pages/kemahasiswaan/Sayembara';
import MarkandeyaNews from '../pages/kemahasiswaan/MarkandeyaNews';
import Moment from '../pages/kemahasiswaan/Moment';
export default {
    components:{
        BemOnDuty,
        TracerStudy,
        UpcomingEvent,
        Sayembara,
        MarkandeyaNews,
        Moment
    },
     mounted() {
    this.selectItem(1);
  },
  data() {
    return {
      selected: 1,
      activeComponent: undefined,
    };
  },
  computed: {
    items() {
      return [
        {
          id: 1,
          title: "BEM on Duty",
          component: BemOnDuty,
        },
        {
          id: 2,
          title: "Tracer Study",
          component: TracerStudy,
        },
        {
          id: 3,
          title: "Upcoming Event",
          component: UpcomingEvent,
        },
        {
          id: 4,
          title: " Sayembara Berhadiah",
          component: Sayembara,
        },
        {
          id: 5,
          title: "Markandeya News",
          component: MarkandeyaNews,
        },
        {
          id: 6,
          title: "Capture The Moment",
          component: Moment,
        },
      ];
    },
  },
  methods: {
    selectItem(id) {
      this.selected = id;
      this.activeComponent = this.items.filter((item) => {
        return item.id === id;
      })[0].component;
    },
    scrollPage() {
      let yOffset = -600;
      let el = this.$refs.scroll;
      let y = el.getBoundingClientRect().top + window.pageYOffset + yOffset;
      window.scrollTo({ top: y, behavior: "smooth" });
    },
  },
};
</script>
<style scoped>
.welcome-section .title-manu li {
  position: relative;
  font-size: 15px;
  line-height: 26px;
  font-weight: 700;
  color: #f36371;
  margin-left: 15px;
  padding: 17px 0px;
  display: inline-block;
  font-family: "Montserrat", sans-serif;
  text-transform: capitalize;
}
.welcome-section .title-manu li a {
  color: #333333;
  font-family: "Montserrat", sans-serif;
  transition: all 500ms ease;
}

.welcome-section .title-manu li a:hover {
  color: #f36371;
  transition: all 500ms ease;
}
.title h2 {
  padding-top: 25px;
}

.title-manu {
  padding-top: 15px;
}

body {
  padding: 50px;
  background: #fff;
}

@media (max-width: 883px) {
    .callout-section{
        width: 100%;
    }
  .callout-section .callout-item {
    padding: 20px 5px 10px;
  }
  .callout-item h5 {
    font-weight: bold;
    font-size: 0.85rem;
    text-align: center;
    }

}
.callout-section {
  margin: 0px;
  position: relative;
  z-index: 0;
  display: flex;
  align-items: center;
}

.callout-section .callout-item {
  background: #3333332d;
  padding: 35px 0 25px;
  /* border-left: #333333 solid 1px; */
  cursor: pointer;
}

.callout-section .callout-item.light-bg {
  background: transparent;
}

.callout-section .callout-item.deep-bg {
  background: transparent;
}

.callout-section .default-bg {
  margin: 0px;
  height: 10vh;
}
.callout-item h5 {
  font-weight: bold;
  text-align: center;
}

.callout-item .inner-item {
  position: relative;
  margin: 0px 30px 0px 100px;
}

.callout-item .icon-box {
  position: absolute;
  top: 5px;
  left: 0px;
}

.callout-item .icon-box i:before {
  font-size: 50px;
  color: #333333;
}

.callout-item h5 {
  transition: 0.5s ease;
}

.callout-item .text {
  color: #222;
}
.sp-one {
  padding: 100px 0px;
}

.sp-two {
  padding: 130px 0px 80px;
}

.sp-three {
  padding: 130px 0px 100px;
}

.sp-four {
  padding: 120px 0px 80px;
}

.sp-five {
  padding: 50px 0px 20px;
}

.sp-six {
  padding: 75px 0px 55px;
}

.sp-seven {
  padding: 95px 0px 65px;
}

.sp-eight {
  padding: 60px 0px 30px;
}

.sp-nine {
  padding: 150px 0px 40px;
}

.sp-ten {
  padding: 150px 0px 110px;
}

.sp-eleven {
  padding: 150px 0px;
}
</style>
