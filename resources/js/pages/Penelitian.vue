<template>
  <div>
    <section class="welcome-section sp-one">
      <div class="container" data-target="html">
        <div class="title pull-left">
          <h2>Penelitian</h2>
        </div>
        <ul class="title-manu pull-right">
          <li><router-link :to="{ path: '/home' }">Home</router-link></li>
          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
          <li>Penelitian</li>
        </ul>
      </div>
    </section>
    <section class="content">
      <div class="container">
        <div class="wrapper center-block">
          <div
            class="panel-group"
            id="accordion"
            role="tablist"
            aria-multiselectable="true"
          >
            <div class="panel panel-default">
              <div class="panel-heading active" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a
                    role="button"
                    data-toggle="collapse"
                    data-parent="#accordion"
                    href="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    Profil Lembaga Penelitian
                    <i
                      class="fa fa-angle-double-up pull-right panel-icon"
                      aria-hidden="true"
                    ></i>
                  </a>
                </h4>
              </div>
              <div
                id="collapseOne"
                class="panel-collapse collapse in show"
                role="tabpanel"
                aria-labelledby="headingOne"
              >
                <div class="panel-body">
                  <p class="text-justify">
                    Lembaga penelitian dan pengabdian kepada masyarakat Institut
                    Teknologi dan Pendidikan (ITP) Markandeya Bali didirikan
                    berdasarkan SK Rektor No 059/ITP-MB/IV/2021. Lembaga ini
                    bertujuan mewadahi pelaksanaan tugas Tri Dharma Perguruan
                    Tinggi Dosen ITP Markandeya Bali.
                  </p>
                  <h5>Program kerja</h5>
                  <p>
                    LPPM ITP Markandeya Bali memiliki program kerja yang salah
                    satunya dapat meningkatkan publikasi ilmiah Dosen serta
                    peningkatan proposal penelitian dan pengabdian Dosen lolos
                    Hibah Dikti.
                  </p>
                  <h5>Pimpinan Lembaga</h5>
                  <div class="container">
                    <div class="row p-5">
                      <div class="col-lg-4 col-sm-12">
                        <img
                          width="100%"
                          src="/img/ketua-lp.jpg"
                          alt="Ketua Lembaga Penelitian"
                        />
                      </div>
                      <div class="col-lg-8 col-sm-12 list">
                        <div class="title">Kepala LPPM ITP Markandeya Bali</div>
                        <div class="item">
                          Nama : Ni Wayan Sri Darmayanti, S.Pd.,M.Pd.
                        </div>
                        <div class="item">
                          Tempat/Tanggal Lahir: Tampaksiring, 26 Februari 1989
                        </div>
                        <div class="item">NIDN : 0026028903</div>
                        <div class="item">Jabatan Akademik : Lektor</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a
                    class="collapsed"
                    role="button"
                    data-toggle="collapse"
                    data-parent="#accordion"
                    href="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    Panduan Penelitan dan Pengabdian
                    <i
                      class="fa fa-angle-double-up pull-right panel-icon"
                      aria-hidden="true"
                    ></i>
                  </a>
                </h4>
              </div>
              <div
                id="collapseTwo"
                class="panel-collapse collapse"
                role="tabpanel"
                aria-labelledby="headingTwo"
              >
                <div class="panel-body">
                  <div class="download">Download</div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a
                    class="collapsed"
                    role="button"
                    data-toggle="collapse"
                    data-parent="#accordion"
                    href="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                    Jurnal penelitian
                    <i
                      class="fa fa-angle-double-up pull-right panel-icon"
                      aria-hidden="true"
                    ></i>
                  </a>
                </h4>
              </div>
              <div
                id="collapseThree"
                class="panel-collapse collapse"
                role="tabpanel"
                aria-labelledby="headingThree"
              >
                <div class="panel-body">
                  ITP Markandeya Bali memiliki tiga jurnal ilmiah, yaitu:
                  <div class="single-product-section sp-nine">
                    <div class="container">
                      <div class="row">
                        <div class="col-xl-12 col-sm-12">
                          <div class="left-side-area">
                            <div class="single-product-one">
                              <div class="row">
                                <div class="col-xl-4 col-md-4 col-sm-12">
                                  <div class="product-info">
                                    <div class="">
                                      <div class="item">
                                        <img
                                          src="/img/deiksis.png"
                                          alt="Awesome Image"
                                        />
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xl-8 col-md-8 col-sm-12">
                                  <div class="shop-item-one">
                                    <h6>Deiksis</h6>
                                    <div class="product-text">
                                      <p class="text-justify">
                                        Jurnal Pendidikan Deiksis hadir untuk
                                        mewadahi tulisan baik berupa artikel
                                        penelitian, artikel ilmiah, maupun
                                        kajian ilmiah lain yang berkaitan dengan
                                        bidang Pendidikan Bahasa dan Sastra
                                        Indonesia. Penggunaan Deiksis sebagai
                                        nama jurnal ilmiah diilhami istilah
                                        deiksis dalam ilmu linguistik yang
                                        berarti acuan. Diharapkan dengan
                                        menggunakan nama ini, jurnal khsusus
                                        untuk pendidikan bahasa dan sastra
                                        Indonesia milik ITP Markandeya Bali
                                        mampu menjadi acuan untuk menerbitkan
                                        karya ilmiah yang berkaitan dengan ilmu
                                        kebahasaan, khususnya dalam bahasa
                                        Indonesia. Jurnal ini terbit setahun 2
                                        kali, yaitu bulan Januari dan Juli.
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="single-product-section sp-nine">
                    <div class="container">
                      <div class="row">
                        <div class="col-xl-12 col-sm-12">
                          <div class="left-side-area">
                            <div class="single-product-one">
                              <div class="row">
                                <div class="col-xl-4 col-md-4 col-sm-12">
                                  <div class="product-info">
                                    <div class="">
                                      <div class="item">
                                        <img
                                          src="/img/rare-pustaka.png"
                                          alt="Awesome Image"
                                        />
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xl-8 col-md-8 col-sm-12">
                                  <div class="shop-item-one">
                                    <h6>Rare Pustaka</h6>
                                    <div class="product-text">
                                      <p class="text-justify">
                                        Jurnal Pendidikan Rare Pustaka adalah
                                        jurnal ilmiah kependidikan berkala yang
                                        diterbitkan oleh Program Studi
                                        Pendidikan Guru Sekolah Dasar (PGSD)
                                        STKIP Suar Bangli. Rare berasal dari
                                        kata raray yang diambil dari bahasa jawa
                                        kuno mengandung arti anak kecil dan
                                        pustaka berasal dari kata pustakah yang
                                        diambil dari bahasa sanskerta mengandung
                                        makna kumpulan pengetahuan. Rare
                                        melambangkan anak kecil dengan
                                        perkembangan dan keunikannya, sedangkan
                                        pustaka mengandung makna kumpulan karya
                                        yang memuat berbagai macam pengetahuan.
                                        Falsafah dari dua kata ini menjadi dasar
                                        diterbitkannya jurnal berkala ini.
                                        Jurnal ini diharapkan memuat kumpulan
                                        karya yang didalamnya mengulas tentang
                                        anak-anak sekolah dasar dalam proses
                                        pembelajaran yang diterimanya secara
                                        mendalam. Harapannya, jurnal ini dapat
                                        berkontribusi dalam membangun dunia
                                        pendidikan khususnya bidang pendidikan
                                        dasar yang lebih berkualitas. Jurnal ini
                                        terbit pada bulan Juli dan Desember.
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="single-product-section sp-nine">
                    <div class="container">
                      <div class="row">
                        <div class="col-xl-12 col-sm-12">
                          <div class="left-side-area">
                            <div class="single-product-one">
                              <div class="row">
                                <div class="col-xl-4 col-md-4 col-sm-12">
                                  <div class="product-info">
                                    <div class="">
                                      <div class="item">
                                        <img
                                          src="/img/wahana-chitta.png"
                                          alt="Awesome Image"
                                        />
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xl-8 col-md-8 col-sm-12">
                                  <div class="shop-item-one">
                                    <h6>Wahana Chitta</h6>
                                    <div class="product-text">
                                      <p class="text-justify">
                                        Wahana Chitta merupakan kumpulan artikel
                                        ilmiah di bidang Kependidikan maupun
                                        Non-Kependidikan. Jurnal ini terbit 2
                                        kali setahun yaitu, bulan Maret dan
                                        September. Jurnal ini diharapkan bisa
                                        menjembatani hubungan yang penuh
                                        kedekatan dan kehangatan antara
                                        masyarakat ilmiah, baik internal maupun
                                        eksternal, sehingga dapat berjalan
                                        secara berdampingan dan saling
                                        mendukung.
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingFour">
                <h4 class="panel-title">
                  <a
                    role="button"
                    data-toggle="collapse"
                    data-parent="#accordion"
                    href="#collapseFour"
                    aria-expanded="true"
                    aria-controls="collapseFour"
                  >
                    Repository
                    <i
                      class="fa fa-angle-double-up pull-right panel-icon"
                      aria-hidden="true"
                    ></i>
                  </a>
                </h4>
              </div>
              <div
                id="collapseFour"
                class="panel-collapse collapse in"
                role="tabpanel"
                aria-labelledby="headingFour"
              >
                <div class="panel-body">
                  <p class="text-justify">
                    Repository Institut Teknologi Dan Pendidikan Markandeya Bali
                    menyimpan beberapa data karya ilmiah mahasiswa dari berbagai
                    prodi yang ada di Institut Teknologi Dan Pendidikan
                    Markandeya Bali. Institut Pendidikan Dan Teknologi
                    Markandeya Bali terdiri dari empat prodi yakti prodi Bahasa
                    dan Sastra Indonesia, Prodi Pendidikan Bahasa Inggris, Prodi
                    Pendidikan Guru Sekolah Dasar dan prodi Sistem Informasi.
                    Saat ini sudah tersimpan beberapa karya ilmiah dari prodi
                    Bahasa dan Sastra Indonesia, Prodi Pendidikan Bahasa
                    Inggris, Prodi Pendidikan Guru Sekolah Dasar. Prodi sistem
                    informasi belum menghasilkan lulusan sehingga belum ada data
                    karya ilmiah yang tersimpan di repository.
                  </p>
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
export default {
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
  },
};
</script>
<style scoped>
.sp-nine {
  padding: 25px 0px 25px;
}
.left-side-area {
  margin-right: -20px;
}
.left-side-area .product-info {
  margin-bottom: 40px;
}
.shop-item-one {
  margin-bottom: 30px;
}

.shop-item-one .image-box {
  position: relative;
  overflow: hidden;
  border: 1px solid #e0e0e0;
}
.item img {
  max-width: 270px;
}
.shop-item-one .overly-box {
  position: absolute;
  text-align: center;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  background: rgba(249, 190, 77, 0.7);
  transition: 0.5s cubic-bezier(0.4, 0, 1, 1);
  opacity: 0;
  content: "";
  visibility: hidden;
}

.shop-item-one .image-box:hover .overly-box {
  visibility: visible;
  opacity: 1;
  transition: all 500ms ease;
}

.shop-item-one a i {
  font-size: 13px;
  line-height: 29px;
  margin-right: 10px;
}

.shop-item-one .image-text {
  padding: 20px 0px;
}

.shop-item-one .image-text h6 {
  font-size: 16px;
  font-weight: bold;
  line-height: 22px;
  color: #333333;
}
.shop-item-one h6 {
  font-size: 16px;
  font-weight: bold;
  line-height: 22px;
  color: #000000;
}
.list {
  padding: 15px 15px 15px 15px;
}
.list .title {
  padding-bottom: 5px;
  font-weight: bold;
}
.list .item {
  padding: 5px 0px;
}
.title-manu {
  padding-top: 15px;
}
.content {
  padding: 100px 0px;
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
</style>
