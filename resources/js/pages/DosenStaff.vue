<template>
  <div>
    <h2>Dosen & Staff</h2>
    <div class="content-text">
      <div v-for="(item, index) in dosen" :key="index">
        <h5>{{ item.fakultas }}</h5>
        <div class="container grid-striped">
          <div class="grid-content">
            <div class="prodi" v-for="(prodi, i) in item.prodi" :key="i">
              <h6>DOSEN {{ prodi.nama }}</h6>
              <div class="row font-weight-bold py-2">
                <div class="col">Nama</div>
                <div class="col">NIDN</div>
              </div>
              <div
                class="row py-2"
                v-for="(dosenProdi, idx) in prodi.dosen"
                :key="idx"
              >
                <div class="col">{{ dosenProdi.nama }}</div>
                <div class="col">{{ dosenProdi.nidn }}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pegawai">
        <h5>STAF PEGAWAI ITP MARKANDEYA BALI</h5>
        <div class="container grid-striped">
          <div class="grid-content">
            <div class="row font-weight-bold py-2">
              <div class="col">Nama</div>
            </div>
            <div class="row py-2" v-for="(item, idx) in pegawai" :key="idx">
              <div class="col">{{ item.nama }}</div>
            </div>
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
    dosen() {
      return [
        {
          fakultas: "FAKULTAS ILMU PENDIDIKAN",
          prodi: [
            {
              nama: "PENDIDIKAN BAHASA DAN SASTRA INDONESIA",
              dosen: [
                {
                  nama: "I Wayan Numertayasa, S.Pd.,M.Pd",
                  nidn: "0818078901",
                },
                {
                  nama: "Drs. I Wayan S Arsana, MM., MAP",
                  nidn: "0031125769",
                },
                {
                  nama: "I Made Eka Sulantara, S.Pd.,M.Pd",
                  nidn: "0812028201",
                },
                {
                  nama: "I Nengah Sueca, S.Pd.,M.Pd",
                  nidn: "0802079101",
                },
                {
                  nama: "I Nyoman Sudirman, S.Pd.,M.Pd",
                  nidn: "0815108301",
                },
                {
                  nama: "I Putu Oka Suardana, S.Pd.,M.Pd",
                  nidn: "0826019002",
                },
                {
                  nama: "Md. Andhi Supriatna Arna, SH., MH",
                  nidn: "0813078903",
                },
              ],
            },
            {
              nama: "PENDIDIKAN BAHASA INGGRIS",
              dosen: [
                {
                  nama: "I Gusti Putu Ari Putrayasa, S.Pd.,M.Pd",
                  nidn: "0807089001",
                },
                {
                  nama: "Ida Bagus Arya Lawa Manuaba, S.Pd.,M.Pd",
                  nidn: "0824128803",
                },
                {
                  nama: "Kadek Cahyadi Putra, S.Pd.,M.Pd",
                  nidn: "0830039101",
                },
                {
                  nama: "Luh Made Dwi Wedayanthi, S.Pd.,M.Pd",
                  nidn: "0817068801",
                },
                {
                  nama: "Pande Agus Adiwijaya, S.Pd.,M.Pd",
                  nidn: "0806018701",
                },
                {
                  nama: "Ni Made Ayu Purnami, S.Pd.,M.Pd",
                  nidn: "0821129103",
                },
                {
                  nama: "Putu Dwila Yosiani, S.Pd., M.Pd.",
                  nidn: "",
                },
              ],
            },
            {
              nama: "PENDIDIKAN GURU SEKOLAH DASAR",
              dosen: [
                {
                  nama: "Ni Putu Eni Astuti, S.Pd., M.Pd.",
                  nidn: "0810058802",
                },
                {
                  nama: "Desak Putu Anom Janawati, S.Pd., M.Pd.",
                  nidn: "0816018702",
                },
                {
                  nama: "Putu Beny Pradnyana, S.Pd., M.Pd.",
                  nidn: "0808018901",
                },
                {
                  nama: "I Ketut Dody Arta Kariawan",
                  nidn: "0802028501",
                },
                {
                  nama: "Kadek Alit Putri Adriani,S.Pd., M.Pd",
                  nidn: "0809019301",
                },
                {
                  nama: "I Ketut Dedi Agung Susanto Putra,S.Pd., M.Pd",
                  nidn: "",
                },
                {
                  nama: "I Wayan Suantara, S.Pd., M.Pd.",
                  nidn: "",
                },
              ],
            },
          ],
        },
        {
          fakultas: "FAKULTAS TEKNOLOGI DAN BISNIS",
          prodi: [
            {
              nama: "SISTEM INFORMASI",
              dosen: [],
            },
          ],
        },
      ];
    },
    pegawai() {
      return [
        {
          nama: "Agus Widiana, S.Pd",
        },
        {
          nama: "I Kadek Karisma Putra, S.Pd",
        },
      ];
    },
  },
};
</script>
<style scoped>
.pegawai{
    padding: 15px 0px 10px 0px;
}
.prodi {
  padding-top: 20px;
  border-bottom: solid 1px rgba(0, 0, 0, 0.5);
}
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
h6 {
  font-weight: bold;
  padding-bottom: 10px;
}
h5 {
  font-weight: bold;
  padding-bottom: 5px;
  padding-top: 20px;
}
</style>
