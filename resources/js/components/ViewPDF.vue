<template>
  <div v-if="show">
    <transition name="modal">
      <div class="modal-mask">
        <div class="modal-wrapper" @click="$emit('closeModal')">
          <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content"  @click.stop>
              <div class="modal-header">
                <h5 class="modal-title">{{ title }}</h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true" @click="closeModal">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <VuePDFViewer height="500px" :url="file" />
              </div>
              <div class="modal-footer">
                  <v-btn color="blue-grey lighten-4" @click="closeModal" ><span class="btn-label"><i class="fa fa-times"></i></span>
                    Tutup
                  </v-btn>
              </div>
            </div>
          </div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script>
import VuePDFViewer from "vue-instant-pdf-viewer";
export default {
  components: {
    VuePDFViewer,
  },
  props: {
    show: {
      type: Boolean,
      default: false,
    },
    title: {
      type: String,
    },
    pdf: {
      type: String,
    },
  },
  data() {
    return {};
  },
  computed: {
      file(){
          if(this.pdf){
              let baseUrl = process.env.MIX_APP_URL;
              return `${baseUrl}/file/sk/${this.pdf}`
          }
      }
  },
  methods: {
    closeModal() {
      this.$emit("closeModal");
    },
  },
};
</script>
<style scoped>
.btn-label {
  position: relative;
  left: -12px;
  display: inline;
  padding: 3px 3px;
  background: rgba(0, 0, 0, 0.15);
  border-radius: 3px 0 0 3px;
}
.btn-labeled {
  padding-top: 0;
  padding-bottom: 0;
}
.btn {
  margin-bottom: 10px;
}
.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: table;
  transition: opacity 0.3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}
</style>
