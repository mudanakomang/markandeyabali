<template>
  <div>
    <h5>Identitas dan Latar Belakang Responden</h5>
    <form ref="formAlumni">
      <div
        class="form-group row"
      >
        <label for="nama" class="col-sm-12 col-lg-3 col-form-label"
          >Nama</label
        >
        <div class="col-sm-12 col-lg-6">
          <input
            type="text"
            id="nama"
            name="nama"
            required
            class="form-control"
            placeholder="Nama Alumni"
            v-model="this.dataAlumni.nama"
          />
        </div>
      </div>
      <div class="form-group row">
        <label for="tgl_lahir" class="col-sm-12 col-lg-3 col-form-label"
          >Tanggal Lahir</label
        >
        <div class="col-sm-12 col-lg-6">
          <datepicker
            :clear-button="true"
            :bootstrap-styling="true"
            v-model="this.dataAlumni.tgl_lahir"
            :language="id"
            format="dd-MM-yyyy"
            name="tgl_lahir"
            :required="true"
            input-class="form-control"
          ></datepicker>
        </div>
      </div>
      <div class="form-group row">
        <label for="alamat_alumni" class="col-sm-12 col-lg-3 col-form-label"
          >Alamat</label
        >
        <div class="col-sm-12 col-lg-6">
          <input
            type="text"
            class="form-control"
            required
            name="alamat_alumni"
            id="alamat_alumni"
            placeholder="Alamat Alumni"
            v-model="this.dataAlumni.alamat_alumni"
          />
        </div>
      </div>
      <div class="form-group row">
        <label for="no_hp" class="col-sm-12 col-lg-3 col-form-label"
          >Nomor HP</label
        >
        <div class="col-sm-12 col-lg-6">
          <input
            type="tel"
            class="form-control"
            required
            name="no_hp"
            id="no_hp"
            placeholder="081238xxxxxx"
            v-model="this.dataAlumni.no_hp"
          />
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <button class="btn btn-default">Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>
<script>
import Datepicker from "vuejs-datepicker";
import { id } from "vuejs-datepicker/dist/locale";
export default {
  components: {
    Datepicker,
  },
  data() {
    return {
      dataAlumni: {
        nama: "",
        tgl_lahir: "",
        alamat_alumni: "",
        no_hp: "",
      },
      id: id,
    };
  },
  // validations: {
  //   dataAlumni: {
  //     nama: {
  //       required,
  //     },
  //     tgl_lahir: {
  //       required,
  //     },
  //   },
  // },
  computed: {
    startDate() {
      let date = new Date();
      let year = date.getFullYear() - 15;
      let month = date.getMonth();
      let day = date.getDate();
      return new Date(year, month, day);
    },
  },
  mounted() {
    this.dataAlumni.tgl_lahir = this.startDate;
  },
};
</script>
<style scoped>
h5 {
  padding-top: 25px;
  padding-bottom: 25px;
}
</style>
