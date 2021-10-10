<template>
  <div style="display: contents">
    <v-btn @click.stop="isOpen = true" v-bind="$attrs" :class="btnClass">
      <slot>
        <v-icon>mdi-delete</v-icon>
      </slot>
    </v-btn>

    <v-dialog v-model="isOpen" max-width="300">
      <v-card>
        <v-card-title class="headline">
          {{ text.title }}
        </v-card-title>

        <v-card-text>
          <p>
            {{ text.body }}
          </p>
        </v-card-text>

        <v-divider></v-divider>

        <v-card-actions>
          <v-btn color="normal" @click="close">
            {{ text.cancel }}
          </v-btn>
          <v-spacer></v-spacer>
          <v-btn color="error" @click="confirm">
            {{ text.confirm }}
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </div>
</template>
<script>
export default {
  inheritAttrs: false,
  props: {
    onConfirm: Function,
    cardText: {
      type: Object,
      default: () => ({}),
    },
    btnClass: {
      type: Array,
      default: () => [],
    },
  },
  data() {
    return {
      isOpen: false,
      text: {
        title: 'Apakah Anda yakin?',
        body: 'Item yang dipilih akan dihapus permanen!',
        confirm: 'Hapus',
        cancel: 'Batal'
      },
    };
  },
  methods: {
    confirm() {
      this.isOpen = false;
      this.onConfirm();
    },
    close() {
      this.isOpen = false;
    }
  },
};
</script>
<style lang="scss" scoped></style>
