<template>
    <div class="d-flex flex-row mb-6">
    <div class="image-preview">
      <input
        id = "component_file"
        type="file"
        ref="fileInput"
        style="display: none"
        accept="image/gif,image/jpeg,image/jpg,image/png"
        @input="pickFile"
      />
      <v-img
        max-width="400px"
        min-width="200px"
        width="400px"
        :src="previewImage"
        class="img-thumbnail"
        @click="selectImage"
      >
      </v-img>
    </div>
    <div class="d-flex flex-column ml-2">
      <v-btn
        fab
        small
        color="cyan darken-2"
        class="mb-1 white--text"
        @click.stop="$refs.fileInput.click()"
      >
        <v-icon>
          mdi-pencil
        </v-icon>
      </v-btn>

      <v-btn v-if="previewImage !=='/img/noimage.png'"
        fab
        small
        color="grey darken-2"
        class="white--text"
        @click="deleteFile"
      >
        <v-icon>
          mdi-delete
        </v-icon>
      </v-btn>
    </div>
  </div>
</template>

<script>
export default {
  props: {
      image: {
          default: ''
      }
  },
  data() {
      return {
        previewImage: ''
      };
    },
  created() {
      this.previewImage = this.image;
  } ,
  methods: {
      selectImage () {
          this.$refs.fileInput.click()
      },
      pickFile () {
        let input = this.$refs.fileInput
        let file = input.files
        if (file && file[0]) {
            console.log(file[0])
          let reader = new FileReader
          reader.onload = e => {
            this.previewImage = e.target.result
          }
          reader.readAsDataURL(file[0])
          this.$emit('input', file[0])
          this.$emit('modified', true)
        }
      },
    deleteFile() {
      this.previewImage = '/img/noimage.png'
      this.$emit("delete");
      this.reset();
    },
     reset() {
      const input = this.$refs.fileInput;
      input.type = "text";
      input.type = "file";

    },
  }
}
</script>

<style lang="scss" scoped>
.image-preview {
  width: 400px;
  margin-top: 10px;
  position: relative;
}
.img-thumbnail {
  padding: 0.25rem;
  background-color: #ffffff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
  max-width: 100%;
  height: auto;
}
</style>
