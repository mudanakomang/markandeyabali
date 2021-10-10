<template>
  <div>
    <div class="alert-top alert alert-success" style=" position: fixed; top: 75px; left:5%; width: 90%;z-index:999999;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Sukses! </strong> Kartu Mahasiswa Berhasil Diunduh.
    </div>
    <section class="welcome-section sp-one">
      <div class="container" data-target="html">
        <div class="title pull-left">
          <h2>Akademik</h2>
        </div>
        <ul class="title-manu pull-right">
          <li><router-link :to="{ path: '/' }">Home</router-link></li>
          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
          <li>Akademik</li>
        </ul>
      </div>
    </section>
    <section class="content">
      <div class="container">
        <div class="wrapper center-block">
          <p class="text-justify">
            Institut Teknologi dan Pendidikan Markandeya Bali menyelenggarakan
            program pendidikan Sarjana (S-1) pada dua Fakultas yaitu Fakultas
            Ilmu Pendidikan dan Fakultas Teknologi.
          </p>
          <div
            class="panel-group"
            id="accordion"
            role="tablist"
            aria-multiselectable="true"
          >
            <div class="panel panel-default">
              <div class="panel-heading active" role="tab" id="headingKurikulum">
                <h4 class="panel-title">
                  <a
                    role="button"
                    data-toggle="collapse"
                    data-parent="#accordion"
                    href="#kurikulum"
                    aria-expanded="true"
                    aria-controls="kurikulum"
                  >
                    Kurikulum
                    <i
                      class="fa fa-angle-double-up pull-right panel-icon"
                      aria-hidden="true"
                    ></i>
                  </a>
                </h4>
              </div>
              <div
                id="kurikulum"
                class="panel-collapse collapse in show"
                role="tabpanel"
                aria-labelledby="headingKurikulum"
              >
                <div class="panel-body">
                  <h5>Fakultas Ilmu Pendidikan</h5>
                  <ol>
                    <li>
                      Program Studi Pendidikan Bahasa dan Sastra Indonesia
                    </li>
                    <dl>
                      <dt>Visi Program Studi</dt>
                      <dd>
                        “Menjadi pusat pengembangan pendidikan bahasa dan sastra
                        Indonesia yang unggul, serta menghasilkan calon guru
                        pendidikan bahasa dan sastra Indonesia yang cerdas,
                        bermartabat, dan berdaya saing pada tahun 2021”
                      </dd>
                      <dt>Misi Program Studi</dt>
                      <dd>
                        <ul>
                          <li>
                            Menyelenggarakan pendidikan dan pengajaran
                            pendidikan bahasa dan sastra indonesia berorientasi
                            pada kemandirian mahasiswa dalam mengembangkan
                            potensinya.
                          </li>
                          <li>
                            Menyelenggarakan penelitian sebagai media
                            pengembangan diri dan pengetahun tentang pengajaran
                            pendidikan bahasa dan sastra indonesia.
                          </li>
                          <li>
                            Menyelenggarakan pengabdian kepada masyarakat yang
                            berbentuk penerapan ilmu pengetahuan dan
                            keterampilan dalam bidang pendidikan bahasa dan
                            sastra indonesia.
                          </li>
                          <li>
                            Mengembangkan kecakapan hidup untuk mempersiapkan
                            mahasiswa menghadapi tuntutan dan tantangan dunia
                            kerja.
                          </li>
                          <li>
                            Membangun karakter mahasiswa agar memiliki wawasan
                            kebangsaan.
                          </li>
                        </ul>
                      </dd>
                      <dt>Tujuan Program Studi</dt>
                      <dd>
                        <ul>
                          <li>
                            Menghasilkan lulusan yang memiliki kompetensi
                            pedagogik, profesional, kepribadian, dan sosial.
                          </li>
                          <li>
                            Menghasilkan karya-karya penelitian sebagai landasan
                            untuk memecahkan masalah di bidang pendidikan bahasa
                            dan sastra indonesia
                          </li>
                          <li>
                            Terselenggaranya pengabdian kepada masyarakat untuk
                            meningkatkan kesejahteraan sosial masyarakat.
                          </li>
                          <li>
                            Menghasilkan lulusan pendidikan bahasa dan sastra
                            Indonesia yang terampil sehingga mampu menghadapi
                            tuntutan dan tantangan dunia kerja.
                          </li>
                          <li>
                            Menghasilkan lulusan pendidikan bahasa dan sastra
                            Indonesia yang memiliki wawasan kebangsaan.
                          </li>
                        </ul>
                      </dd>
                      <dt>Profil Lulusan</dt>
                      <dd>
                        <dl class="row pl-5">
                          <dt class="col-sm-3">
                            Pendidik pemula bahasa Indonesia
                          </dt>
                          <dd class="col-sm-9">
                            Lulusan Prodi Pendidikan Bahasa dan Sastra Indonesia
                            bisa menjadi pendidik pemula Bahasa Indonesia di
                            tingkat sekolah menengah.
                          </dd>

                          <dt class="col-sm-3">
                            Peneliti pemula bidang pendidikan bahasa Indonesia
                          </dt>
                          <dd class="col-sm-9">
                            Lulusan Prodi Pendidikan Bahasa dan Sastra Indonesia
                            bisa menjadi peneliti Bahasa Indonesia dalam bidang
                            kebahasaan dan sastra.
                          </dd>

                          <dt class="col-sm-3">Wirausahawan</dt>
                          <dd class="col-sm-9">
                            Lulusan Prodi Pendidikan Bahasa dan Sastra Indonesia
                            bisa menjadi wirausahawan idang bahasa Indonesia
                            serta pembelajarannya yang berakhlak mulia,
                            berkemampuan akademis-profesional, berjiwa pemimpin,
                            kreatif-inovatif, dan mandiri berlandaskan karakter
                            kebangsaan dan berorientasi global.
                          </dd>

                          <dt class="col-sm-3">Penulis</dt>
                          <dd class="col-sm-9">
                            Lulusan Prodi Pendidikan Bahasa dan Sastra Indonesia
                            bisa menjadi penulis karya sastra maupun karya
                            ilmiah.
                          </dd>

                          <dt class="col-sm-3">Jurnalis</dt>
                          <dd class="col-sm-9">
                            Lulusan Prodi Pendidikan Bahasa dan Sastra Indonesia
                            bisa menjadi seorang jurnalis yang objektif.
                          </dd>
                        </dl>
                      </dd>
                    </dl>
                    <li>Program Studi Pendidikan Bahasa Inggris</li>
                    <dl>
                      <dt>Visi Program Studi</dt>
                      <dd>
                        “Menyiapkan tenaga pendidik dalam bidang Bahasa Inggris
                        yang cerdas dan berdaya saing pada tahun 2021”
                      </dd>
                      <dt>Misi Program Studi</dt>
                      <dd>
                        <ul>
                          <li>
                            Menyelenggarakan pendidikan dan pengajaran bahasa
                            Inggris yang berorientasi pada kemandirian mahasiswa
                            dalam mengembangkan potensinya.
                          </li>
                          <li>
                            Menyelenggarakan penelitian untuk meningkatkan
                            penguasaan dasar-dasar penelitian dan keterampilan
                            di bidang pendidikan bahasa Inggris.
                          </li>
                          <li>
                            Menyelenggarakan pengabdian kepada masyarakat yang
                            berbentuk penerapan ilmu pengetahuan dan
                            keterampilan dalam bidang bahasa Inggris.
                          </li>
                          <li>
                            Mengembangkan keterampilan hidup untuk mempersiapkan
                            mahasiswa menghadapi tuntutan dan tantangan dunia
                            kerja.
                          </li>
                        </ul>
                      </dd>
                      <dt>Tujuan Program Studi</dt>
                      <dd>
                        <ul>
                          <li>
                            Menghasilkan lulusan yang memiliki kompetensi
                            pedagogik, profesional, kepribadian dan sosial.
                          </li>
                          <li>
                            Melahirkan karya-karya penelitian yang menggambarkan
                            pemahaman terhadap dasar-dasar/prinsip-prinsip
                            ilmiah sebagai landasan untuk memecahkan masalah di
                            bidang pendidikan bahasa Inggris.
                          </li>
                          <li>
                            Mendiseminasikan hasil pendidikan dan pengajaran
                            serta penelitian di bidang pendidikan bahasa Inggris
                            kepada masyarakat.
                          </li>
                          <li>
                            Menghasilkan lulusan yang memiliki kecakapan hidup
                            khususnya yang terkait dengan dunia kerja.
                          </li>
                        </ul>
                      </dd>
                      <dt>Profil Luulusan</dt>
                      <dd>
                        <dl class="row pl-5">
                          <dt class="col-sm-3">
                            Calon Pendidik Bahasa Inggris
                          </dt>
                          <dd class="col-sm-9">
                            Lulusan Prodi Pendidikan Bahasa Inggris bisa menjadi
                            calon pendidik Bahasa Inggris di jenjang Sekolah
                            Menengah, maupun sekolah dasar. Selanjutnya, lulusan
                            juga bisa menjadi guru setelah mengikuti sertifikasi
                            guru. Lulusan juga bisa menjadi pengajar/ instruktur
                            Bahasa Inggris di Lembaga-lembaga pendidikan
                            non-formal.
                          </dd>
                          <dt class="col-sm-3">Penerjemah/ Juru Bahasa</dt>
                          <dd class="col-sm-9">
                            Lulusan Prodi Pendidikan Bahasa Inggris bisa menjadi
                            seorang penerjemah Bahasa Inggris karena memiliki
                            kemampuan komunikasi non-verbal yang baik. Selain
                            itu, lulusan juga memiliki kesempatan menjadi
                            seorang juru Bahasa dikarenakan memiliki kemampuan
                            verbal yang baik pula.
                          </dd>
                          <dt class="col-sm-3">
                            Pengembang Program Pengajaran Bahasa Inggris
                          </dt>
                          <dd class="col-sm-9">
                            Selain sebagai pengajar/instruktur Bahasa Inggris,
                            lulusan juga mempunyai kemampuan untuk mengembangakn
                            suatu program pengajaran Bahasa Inggris baik dalam
                            institusi pendidikan formal maupun non-formal.
                          </dd>
                          <dt class="col-sm-3">Peneliti Bidang Pendidikan</dt>
                          <dd class="col-sm-9">
                            Lulusan juga mempunyai kesempatan menjadi seorang
                            peneliti di bidang pendidikan, khususnya bidang
                            pendidikan Bahasa Inggris. Hal ini dikarenakan para
                            lulusan sudah mendapatkan pengalaman empiris dalam
                            melaksanakan penelitian di kampus.
                          </dd>
                          <dt class="col-sm-3">Wirausahawan</dt>
                          <dd class="col-sm-9">
                            Lulusan juga mempunyai kesempatan untuk bisa menjadi
                            seorang wirausahawan khususnya di bidang pendidikan
                            Bahasa Inggris. Hal ini dimungkinkan karena lulusan
                            sudah mendapatkan pendidikan kewirausahaan pada
                            proses pendidikan mereka.
                          </dd>
                          <dt class="col-sm-3">
                            Praktisi/ tenaga profesional di dunia industri
                            pariwisata
                          </dt>
                          <dd class="col-sm-9">
                            Sebagai penciri utama kurikulum, ilmu dan praktek
                            mengenai kepariwisataan juga diberikan kepada para
                            mahasiswa. Hal ini memungkinkan para lulusan bisa
                            menjadi seorang praktisi/ tenaga profesional di
                            bidang pariwisata, khususnya pada bidang F&B, FO,
                            Guiding, dan HK.
                          </dd>
                        </dl>
                      </dd>
                    </dl>
                    <li>Program Studi Pendidikan Guru Sekolah Dasar</li>
                    <dl>
                      <dt>Visi Program Studi</dt>
                      <dd>
                        “Menjadi program studi yang siap mencetak calon guru
                        sekolah dasar yang cerdas dan berdaya saing tinggi di
                        tingkat nasional tahun 2025”
                      </dd>
                      <dt>Misi Program Studi</dt>
                      <dd>
                        <ul>
                          <li>
                            Menyelenggarakan pendidikan dan pengajaran
                            pendidikan dasar yang berorientasi pada kemandirian
                            mahasiswa dalam mengembangkan potensinya.
                          </li>
                          <li>
                            Menyelenggarakan penelitian untuk meningkatkan
                            penguasaan dasar-dasar penelitian dan keterampilan
                            di bidang pendidikan dasar.
                          </li>
                          <li>
                            Menyelenggarakan pengabdian kepada masyarakat yang
                            berbentuk penerapan ilmu pengetahuan dan
                            keterampilan dalam bidang pendidikan dasar.
                          </li>
                          <li>
                            Mengembangkan keterampilan hidup untuk mempersiapkan
                            mahasiswa menghadapi tuntutan dan tantangan dunia
                            kerja.
                          </li>
                        </ul>
                      </dd>
                      <dt>Tujuan Program Studi</dt>
                      <dd>
                        <ul>
                          <li>
                            Menghasilkan lulusan yang memiliki kompetensi
                            pedagogik, profesional, kepribadian dan sosial.
                          </li>
                          <li>
                            Melahirkan karya-karya penelitian yang menggambarkan
                            pemahaman terhadap dasar-dasar/prinsip-prinsip
                            ilmiah sebagai landasan untuk memecahkan masalah di
                            bidang pendidikan dasar.
                          </li>
                          <li>
                            Mendiseminasikan hasil pendidikan dan pengajaran
                            serta penelitian di bidang pendidikan bahasa Inggris
                            kepada masyarakat.
                          </li>
                          <li>
                            Menghasilkan lulusan yang memiliki kecakapan hidup
                            khususnya yang terkait dengan dunia kerja.
                          </li>
                        </ul>
                      </dd>
                      <dt>Profil Luulusan</dt>
                      <dd>
                        <dl class="row pl-5">
                          <dt class="col-sm-3">Tenaga Pendidik di SD</dt>
                          <dd class="col-sm-9">
                            Tenaga Pendidik pada jenjang sekolah dasar yang
                            mampu merencanakan, melaksanakan, mengevaluasi dan
                            mengembangkan pembelajaran berdasar keilmuan,
                            karakter, dan inovasi untuk meningkatkan mutu
                            pendidikan
                          </dd>
                          <dt class="col-sm-3">Peneliti</dt>
                          <dd class="col-sm-9">
                            Peneliti yang mampu memecahkan permasalahan
                            pembelajaran serta mampu menghasilkan inovasi
                            pembelajaran yang teruji untuk peningkatan mutu
                            pendidikan di sekolah dasar.
                          </dd>
                          <dt class="col-sm-3">Konsultan Pendidikan</dt>
                          <dd class="col-sm-9">
                            Konsultan Pendidikan di tingkat satuan pendidikan
                            dasar dalam bidang pengelola pendidikan, pembina
                            ekstra kurikuler, evaluator pelaksanaan
                            pembelajaran, dan pengembang media serta sumber
                            belajar.
                          </dd>
                          <dt class="col-sm-3">Wirausahawan</dt>
                          <dd class="col-sm-9">
                            Lulusan prodi PGSD juga bisa menjadi seorang
                            wirausahawan dikarenakan mendapatkan proses
                            pendidikan kewirausahaan.
                          </dd>
                          <dt class="col-sm-3">Pengajar PAUD</dt>
                          <dd class="col-sm-9">
                            Selain sebagai tenaga pengajar di jenjang SD,
                            lulusan prodi PGSD juga dibekali dengan ilmu
                            pedagogi dan psikologi untuk mengajar di tingkat
                            PAUD.
                          </dd>
                          <dt class="col-sm-3">Konselor</dt>
                          <dd class="col-sm-9">
                            Lulusan prodi PGSD juga bisa menjadi seorang
                            konselor di SD. Hal ini dimungkinkan karena para
                            mahasiswa dibekali dengan pengetahuan dan
                            keterampilan dalam bidang psikologi, dalam hal
                            konseling di SD.
                          </dd>
                        </dl>
                      </dd>
                    </dl>
                  </ol>
                  <h5>Fakultas Teknologi</h5>
                  <ol>
                    <li>Program Studi Sistem Informasi</li>
                    <dl>
                      <dt>Visi Program Studi</dt>
                      <dd>
                        “Menjadi program studi unggulan Nasional pada bidang
                        sistem informasi pemerintahan dan industri pada tahun
                        2030”
                      </dd>
                      <dt>Misi Program Studi</dt>
                      <dd>
                        <ul>
                          <li>
                            Menyelenggarakan pendidikan dan pengajaran bidang
                            sistem informasi yang berorientasi pada pengembangan
                            sistem informasi pemerintahan (pusat dan daerah)
                            serta industri (pariwisata, ekonomi kreatif,
                            perusahaan, dan UMKM)
                          </li>
                          <li>
                            Menyelenggarakan penelitian bidang sistem informasi
                            yang berorientasi pada pengembangan sistem informasi
                            pemerintahan (pusat dan daerah) serta industri
                            (pariwisata, ekonomi kreatif, perusahaan, dan UMKM)
                          </li>
                          <li>
                            Menyelenggarakan pengabdian kepada masyarakat yang
                            berbentuk penerapan ilmu pengetahuan, teknologi dan
                            keterampilan dalam bidang sistem informasi yang
                            berorientasi pada pengembangan sistem informasi
                            pemerintahan (pusat dan daerah) serta industri
                            (pariwisata, ekonomi kreatif, perusahaan, dan UMKM)
                          </li>
                        </ul>
                      </dd>
                      <dt>Tujuan Program Studi</dt>
                      <dd>
                        <ul>
                          <li>
                            Menghasilkan lulusan yang memiliki daya saing dalam
                            bidang sistem informasi yang berorientasi pada
                            pengembangan sistem informasi pemerintahan (pusat
                            dan daerah) serta industri (pariwisata, ekonomi
                            kreatif, perusahaan, dan UMKM)
                          </li>
                          <li>
                            Menghasilkan karya-karya penelitian yang inovatif
                            dalam bidang sistem informasi yang berorientasi pada
                            pengembangan sistem informasi pemerintahan (pusat
                            dan daerah) serta industri (pariwisata, ekonomi
                            kreatif, perusahaan, dan UMKM)
                          </li>
                          <li>
                            Menghasilkan karya dan kegiatan pengabdian kepada
                            masyarakat yang mampu mengatasi permasalahan
                            masyarakat dalam bidang pemerintahan (pusat dan
                            daerah) serta industri (pariwisata, ekonomi kreatif,
                            perusahaan, dan UMKM)
                          </li>
                        </ul>
                      </dd>
                      <dt>Profil Lulusan</dt>
                      <dd>
                        <ul>
                          <li>
                            Menjadi tenaga profesional pengembang Sistem
                            Informasi e-Government dalam bidang Pemerintahan
                            Pusat, Pemerintahan Daerah dan Pemerintahan Desa
                            Adat
                          </li>
                          <li>
                            Menjadi tenaga profesional pengembang Sistem
                            Informasi e-Business bidang Pariwisata, perusahaan,
                            dan UMKM
                          </li>
                          <li>
                            Menjadi wirausahawan berbasis teknologi informasi
                            (<i>technopreneur</i>)
                          </li>
                          <li>Siap melanjutkan jenjang studi S2 dan S3</li>
                        </ul>
                      </dd>
                    </dl>
                  </ol>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingKalenderAkademik">
                <h4 class="panel-title">
                  <a
                    role="button"
                    data-toggle="collapse"
                    data-parent="#accordion"
                    href="#kalenderAkademik"
                    aria-expanded="true"
                    aria-controls="kalenderAkademik"
                  >
                    Kalender Akademik
                    <i
                      class="fa fa-angle-double-up pull-right panel-icon"
                      aria-hidden="true"
                    ></i>
                  </a>
                </h4>
              </div>
              <div
                id="kalenderAkademik"
                class="panel-collapse collapse in"
                role="tabpanel"
                aria-labelledby="headingKalenderAkademik"
              >
                <div class="panel-body">
                  <p class="text-justify">
                    Kalender Akademik ITP Markandeya Bali dapat dilihat pada
                    bagian ini
                  </p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingInformasiAkademik">
                <h4 class="panel-title">
                  <a
                    role="button"
                    data-toggle="collapse"
                    data-parent="#accordion"
                    href="#informasiAkademik"
                    aria-expanded="true"
                    aria-controls="informasiAkademik"
                  >
                    Informasi Akademik
                    <i
                      class="fa fa-angle-double-up pull-right panel-icon"
                      aria-hidden="true"
                    ></i>
                  </a>
                </h4>
              </div>
              <div
                id="informasiAkademik"
                class="panel-collapse collapse in"
                role="tabpanel"
                aria-labelledby="headingInformasiAkademik"
              >
                <div class="panel-body">
                  <p class="text-justify">
                    Informasi Akademik ITP Markandeya Bali dapat dilihat pada
                    bagian ini
                  </p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingKuliahOnline">
                <h4 class="panel-title">
                  <a
                    role="button"
                    data-toggle="collapse"
                    data-parent="#accordion"
                    href="#kuliahOnline"
                    aria-expanded="true"
                    aria-controls="kuliahOnline"
                  >
                    Kuliah Online
                    <i
                      class="fa fa-angle-double-up pull-right panel-icon"
                      aria-hidden="true"
                    ></i>
                  </a>
                </h4>
              </div>
              <div
                id="kuliahOnline"
                class="panel-collapse collapse in"
                role="tabpanel"
                aria-labelledby="headingKuliahOnline"
              >
                <div class="panel-body">
                  <p class="text-justify">
                    Kuliah Online ITP Markandeya Bali bisa diakses pada link
                    berikut
                  </p>
                  <div class="link">
                    <a
                      href="https://ceo.markandeyabali.ac.id"
                      target="_blank"
                      ><strong>Kuliah Online</strong></a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingKtm">
                <h4 class="panel-title">
                  <a
                    role="button"
                    data-toggle="collapse"
                    data-parent="#accordion"
                    href="#unduhKtm"
                    aria-expanded="true"
                    aria-controls="unduhKtm"
                  >
                    Unduh Kartu Mahasiswa
                    <i
                      class="fa fa-angle-double-up pull-right panel-icon"
                      aria-hidden="true"
                    ></i>
                  </a>
                </h4>
              </div>
              <div
                id="unduhKtm"
                class="panel-collapse collapse in"
                role="tabpanel"
                aria-labelledby="headingKtm"
              >
                <div class="panel-body">
                  <div>
                    <h5 class="pt-2">Form Pencarian Kartu Mahasiswa</h5>
                    <form ref="formKtm">
                      <div class="form-group row pt-2">
                        <!-- <label
                          for="nama"
                          class="col-sm-12 col-lg-3 col-form-label"
                          >Nama</label
                        > -->
                        <div class="col-sm-12 col-lg-6">
                          <input
                            type="text"
                            id="nama"
                            name="nama"
                            required
                            class="form-control"
                            placeholder="Nama/NIM Mahasiswa"
                            v-model="payload"
                          />
                        </div>
                      </div>
                      <div class="container pl-0 pb-3">
                        <div class="row">
                          <div class="col text-left">
                            <button type="button" class="btn btn-primary" @click="getUser()">
                              Cari
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                    <table class="table" v-if="displayResults.length>0">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Jurusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(item, index) in displayResults" :key="index" style="cursor:pointer" @click="unduhKtm(item)">
                            <th scope="row">{{index+1}}</th>
                            <td>{{ item.nama}}</td>
                            <td>{{ item.nim }}</td>
                            <td>{{ item.jurusan.nama }}</td>
                            </tr>
                        </tbody>
                        </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import axios from 'axios';
export default {
  data(){
      return {
        payload: '',
        searchResults: []
      }
  },
  computed: {
      displayResults(){
          return this.searchResults.map((mhs)=>({
              ...mhs
          }))
      }
  },
  methods: {
      getUser: function(){
       if(this.payload !==''){
        let url = 'api/ktm/search';
        axios.post(url,  {search: this.payload })
        .then(res => {
            this.searchResults = res.data.mahasiswa;
        })
       }
      },
      unduhKtm(item){
        let url = 'api/ktm/download';
        axios.post(url, {item}).then(res => {
          let url = res.data;
          axios.get(url, {responseType: 'blob'}).then((res) => {
              const url = window.URL.createObjectURL(new Blob([res.data]));
              const link = document.createElement('a');
              link.href = url;
              link.setAttribute('download', item.nim+'.png');
              document.body.appendChild(link);
              link.click();
              this.clearTempImage(item.nim);
          })
        })
      },
      clearTempImage(nim){
          let url = 'api/ktm/cleartemp';
          axios.post(url, {nim}).then(res => {
              if(res){
                this.alertShow();
              }
          })
      },
      alertShow(){
        $(".alert-top").show();
        setTimeout(function(){
            $(".alert-top").hide();
        }, 3000);
      }
  },
  mounted() {
    $(".panel-collapse").on("show.bs.collapse", function () {
      $(this).siblings(".panel-heading").addClass("active");
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        1000
      );
      var currentId = $(this).attr("id");
      $(".panel-collapse").each(function () {
        var id = $(this).attr("id");
        if (currentId !== id) {
          $(this).removeClass("show");
          $(this).siblings(".panel-heading").removeClass("active");
        }
      });
    });

    $(".panel-collapse").on("hide.bs.collapse", function () {
      $(this).siblings(".panel-heading").removeClass("active");
    });

    $(".alert-top").hide();

    if (location.hash !== null && location.hash !== "") {
      $(location.hash + ".collapse").collapse("show");
    }
  },
};
</script>
<style scoped>
ol > li {
  font-weight: bold;
}
.sp-one {
  padding: 100px 0px;
  z-index: 0;
}
.welcome-section .title-manu li {
  position: relative;
  font-size: 15px;
  line-height: 26px;
  font-weight: 700;
  color: #f36371;
  margin-left: 15px;
  padding: 17px 0px;
  display: inline-block;
  font-family: "Montserrat", sans-serif;
  text-transform: capitalize;
}
.welcome-section .title-manu li a {
  color: #333333;
  font-family: "Montserrat", sans-serif;
  transition: all 500ms ease;
}

.link a {
  color: #333333;
  font-family: "Montserrat", sans-serif;
  transition: all 500ms ease;
}
.link a:hover {
  color: #f36371;
  transition: all 500ms ease;
  text-decoration: none;
}
.welcome-section .title-manu li a:hover {
  color: #f36371;
  transition: all 500ms ease;
}
.title h2 {
  padding-top: 25px;
}
body {
  padding: 50px;
  background: #fff;
}
.wrapper {
  width: 90%;
}
@media (max-width: 992px) {
  .wrapper {
    width: 100%;
  }
}
.panel-heading {
  padding: 0;
  border: 0;
}
.panel-icon {
  -moz-transition: all 0.5 linear;
  -webkit-transition: all 0.5 linear;
  transition: all 0.5s linear;
}
.panel-heading.active .panel-icon {
  -ms-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}
.panel-title {
  border-bottom: #f36371 solid 2px;
}
.panel-title a:hover {
  color: #f36371;
}
.panel-title > a,
.panel-title > a:active {
  display: block;
  padding: 15px;
  color: #555;
  font-size: 16px;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 1px;
  word-spacing: 3px;
  text-decoration: none;
}
/* .panel-heading a:before {
  font-family: "Glyphicons Halflings";
  content: "\e114";
  float: right;
  transition: all 0.5s;
} */
.panel-body {
  padding: 0px 25px 0px 25px;
}
.panel-body h5 {
  font-weight: bold;
}
.panel-heading.active a:before {
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  transform: rotate(180deg);
}
.sp-one , .content{
    width: 80%;
    margin: auto;
}
</style>
