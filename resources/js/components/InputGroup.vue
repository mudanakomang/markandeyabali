<template>
  <v-row fill-height fluid>
    <v-col lg="2" md="3" sm="12" align="center" justify="center">
      <v-row align="center" justify="center">
        <span class="input-title mr-2 font-weight-black">{{ title }}</span>
        <span class="input-title-label required" v-if="required">
          {{ "Wajib" }}
        </span>
        <span class="input-title-label optional" v-if="optional">
          {{ "Optional" }}
        </span>
      </v-row>
    </v-col>
    <v-col lg="10" md="9" sm="12">
      <slot></slot>
    </v-col>
  </v-row>
</template>
<script>
export default {
  props: {
    title: {
      required: true
    },
    required: Boolean,
    optional: Boolean
  }
};
</script>

<style lang="scss">
.input-title {
  font-size: 16px;
}
.input-title-label {
  font-size: 11px;
  position: relative;
  padding: 2px 10px;
  border-radius: 4px 10px;
  display: inline-block;
  margin-left: 0px;
}
.input-title-label.required {
  color: red;
  border: solid 1px red;
}
.input-title-label.optional {
  color: green;
  border: solid 1px green;
}
</style>
