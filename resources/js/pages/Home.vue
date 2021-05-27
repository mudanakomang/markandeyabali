<template>
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
          <div
            class="row justify-content-center mr-auto"
          >
            <h5>{{ item.title }}</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
export default {
  data() {
    return {
      selected: 0,
    };
  },
  mounted(){
      this.selected = 1;
  },
  computed: {
    items() {
      return [
        {
          id: 1,
          title: "INFO KULIAH GRATIS",
        },
        {
          id: 2,
          title: "DOSEN & STAFF",
        },
        {
          id: 3,
          title: "AKREDITASI",
        },
        {
          id: 4,
          title: "BERITA TERBARU",
        },
      ];
    },
  },
  methods: {
      selectItem(id){
         this.selected = id;
      }
  }
};
</script>
<style scoped>
.callout-section {
  margin: 0px;
}

.callout-section .callout-item {
  background: #fcc254;
  padding: 35px 0 35px;
  border-left: #333333 solid 1px;
  cursor: pointer;
}

.callout-section .callout-item.light-bg {
  background: #fac967;
}

.callout-section .callout-item.deep-bg {
  background: #f7bd51;
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
</style>
