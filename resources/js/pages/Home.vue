<template>
  <div>
    <Header />
    <section class="callout-section">
      <div class="container-fluid">
        <div class="row">
          <div
            class="callout-item col-xl-2 col-lg-2"
            v-for="item in items"
            :key="item.id"
            :class="{ 'light-bg': item.id == selected }"
            @click="selectItem(item.id); scrollPage()"
          >
            <div class="row justify-content-center mr-auto">
              <h5>{{ item.title }}</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="welcome-section sp-home">
      <div class="container" ref="scroll">
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
import Sambutan from '../pages/Sambutan';
import PejabatStruktural from '../pages/PejabatStruktural';
import Header from "../components/Header";

export default {
  components: {
    InfoKuliahGratis,
    DosenStaff,
    Berita,
    Akreditasi,
    Sambutan,
    PejabatStruktural,
    Header,
  },
  data() {
    return {
      selected: 1,
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
         {
          id: 5,
          title: "SAMBUTAN KETUA YAYASAN KRESNA ANDHI MANDIRI",
          component: Sambutan,
        },
        {
          id: 6,
          title: "PEJABAT STRUKTURAL",
          component: PejabatStruktural,
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
    scrollPage(){
        let yOffset = -600;
        let el = this.$refs.scroll;
        let y = el.getBoundingClientRect().top + window.pageYOffset + yOffset;
        window.scrollTo({ top: y, behavior: 'smooth' });
    }
  },
};
</script>
<style scoped>
.callout-section {
  margin: 0px;
  position: relative;
  z-index: 0;
  display: flex;
  align-items: center;
}

.callout-section .callout-item {
  background: #3333332d;
  padding: 40px 0 10px;
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
  font-size: 0.9rem;
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
@media (max-width: 883px) {
  .callout-section .callout-item {
    padding: 20px 5px 10px;
  }
  .callout-item h5 {
    font-weight: bold;
    font-size: 0.85rem;
    text-align: center;
    }

}
</style>
