<template>
  <div>
    <Header />
    <section class="callout-section">
      <div class="container-fluid">
        <div class="row">
          <div
            class="callout-item col-xl-3 col-lg-3"
            v-for="item in items"
            :key="item.id"
            :class="{ 'light-bg': item.id == selected }"
            @click="selectItem(item.id)"
          >
            <div class="row justify-content-center mr-auto">
              <h5>{{ item.title }}</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="welcome-section sp-one">
      <div class="container">
        <div>
          <component :is="activeComponent"></component>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import InfoKuliahGratis from "../pages/InfoKuliahGratis";
import DosenStaff from "../pages/DosenStaff";
import Akreditasi from "../pages/Akreditasi";
import Berita from "../pages/Berita";
import Header from "../components/Header";

export default {
  components: {
    InfoKuliahGratis,
    DosenStaff,
    Berita,
    Akreditasi,
    Header,
  },
  data() {
    return {
      selected: 0,
      activeComponent: undefined,
    };
  },
  mounted() {
    this.selectItem(1);
  },
  computed: {
    items() {
      return [
        {
          id: 1,
          title: "INFO KULIAH GRATIS",
          component: InfoKuliahGratis,
        },
        {
          id: 2,
          title: "DOSEN & STAFF",
          component: DosenStaff,
        },
        {
          id: 3,
          title: "AKREDITASI",
          component: Akreditasi,
        },
        {
          id: 4,
          title: "BERITA TERBARU",
          component: Berita,
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
  },
};
</script>
<style scoped>
.callout-section {
  margin: 0px;
}

.callout-section .callout-item {
  background: #3333332d;
  padding: 35px 0 35px;
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
}
.callout-item h5 {
  font-weight: bold;
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
