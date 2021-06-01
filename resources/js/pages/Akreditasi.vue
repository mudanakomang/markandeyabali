<template>
  <div>
    <h2>Akreditasi</h2>
    <div class="content-text">
      <div class="container grid-striped">
        <div class="grid-content">
          <div class="row font-weight-bold py-2">
            <div class="col">Nama Jurusan</div>
            <div class="col">Jenjang</div>
            <div class="col">NO. SK BAN-PT</div>
            <div class="col">Awal</div>
            <div class="col">Akhir</div>
            <div class="col">Akreditasi</div>
            <div class="col">Status</div>
            <div class="col">File</div>
          </div>
          <div
            class="row py-2"
            v-for="(item, index) in akreditasi"
            :key="index"
          >
            <div class="col">{{ item.nama }}</div>
            <div class="col">{{ item.jenjang }}</div>
            <div class="col">{{ item.sk }}</div>
            <div class="col">{{ item.awal }}</div>
            <div class="col">{{ item.akhir }}</div>
            <div class="col">{{ item.akreditasi }}</div>
            <div class="col">{{ item.status }}</div>
            <div class="col"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {};
  },
  computed: {
    akreditasi() {
      return [
        {
          nama: "Akreditasi Institusi Perguruan Tinggi",
          jenjang: "",
          sk: "458/SK/BAN-PT/Ak-PNB/PT/V/2021",
          awal: "2018",
          akhir: "2023",
          akreditasi: "Baik/C",
          status: "Masih Berlaku",
          file: "",
        },
        {
          nama:
            "Akreditasi Program Studi Pendidikan Bahasa dan Sastra Indonesia",
          jenjang: "S1",
          sk: "2971/SK/BAN-PT/Ak-PNB/S/V/2021",
          awal: "2020",
          akhir: "2025",
          akreditasi: "Sangat Baik/B",
          status: "Masih Berlaku",
          file: "",
        },
        {
          nama: "Pendidikan Bahasa Inggris",
          jenjang: "S1",
          sk: "2970/SK/BAN-PT/Ak-PNB/S/V/2021",
          awal: "2016",
          akhir: "2021",
          akreditasi: "Sangat Baik/B",
          status: "Masih Berlaku",
          file: "",
        },
        {
          nama: "Pendidikan Guru Sekolah Dasar",
          jenjang: "S1",
          sk: "2969/SK/BAN-PT/Ak-PNB/S/V/2021",
          awal: "2020",
          akhir: "2025",
          akreditasi: "Sangat Baik/B",
          status: "Masih Berlaku",
          file: "",
        },
        {
          nama: "Sistem Informasi",
          jenjang: "S1",
          sk: "",
          awal: "2021",
          akhir: "2023",
          akreditasi: "Baik/C",
          status: "Masih Berlaku",
          file: "",
        },
      ];
    },
  },
};
</script>
<style scoped>
.grid-striped .row:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05);
}
@media (max-width: 833px) {
  .grid-content {
    position: relative;
    overflow: auto;
  }
  .row {
    width: 860px;
    overflow-wrap: break-word;
  }
}
</style>
