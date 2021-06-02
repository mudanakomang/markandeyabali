<template>
  <div>
    <section class="welcome-section sp-one">
      <div class="container" data-target="html">
        <div class="title pull-left">
          <h2>Penjaminan Mutu</h2>
        </div>
        <ul class="title-manu pull-right">
          <li><router-link :to="{ path: '/' }">Home</router-link></li>
          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
          <li>Penjaminan Mutu</li>
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
                    Profil Lembaga Penjaminan Mutu
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
                    Lembaga Penjaminan Mutu Institut Teknologi dan Pendidikan
                    (ITP) Markandeya Bali didirikan berdasarkan SK Rektor ITP
                    Markandeya Bali Nomor: 032/ITP-MB/III/2021. Lembaga ini
                    bertujuan untuk menyelenggarakan pendidikan di Institut
                    Pendidikan dan Teknologi (ITP) Markandeya Bali berbasis
                    kepuasan pemangku kepentingan dan taat pada peraturan dan
                    perundang undangan yang berlaku, serta melakukan perbaikan
                    secara berkelanjutan.
                  </p>
                  <p>
                    Di dalam mewujudkan visi dan misi serta tujuan
                    penyelenggaraan pendidikan ITP Markandeya Bali, Lembaga
                    Penjaminan Mutu memiliki kerangka kerja yang terbagi menjadi
                    5 Bidang yakni:
                  </p>
                  <ol>
                    <li>Pendidikan</li>
                    <li>Penelitian</li>
                    <li>Pengabdian</li>
                    <li>Manajemen Perguruan Tinggi</li>
                    <li>Kemahasiswaan</li>
                  </ol>
                  <div class="container">
                    <div class="row p-5">
                      <div class="col-lg-4 col-sm-12">
                        <img
                          width="100%"
                          src="/img/ketua-pm.jpg"
                          alt="Ketua Lembaga Penelitian"
                        />
                      </div>
                      <div class="col-lg-8 col-sm-12 list">
                        <div class="title">Kepala Lembaga Penjaminan Mutu</div>
                        <div class="item">
                          Nama : Ni Putu Eni Astuti, S.Pd., M.Pd.
                        </div>
                        <div class="item">
                          Tempat/Tanggal Lahir: Buahan, 10 Mei 1988
                        </div>
                        <div class="item">NIDN : 0810058802</div>
                        <div class="item">Jabatan Akademik : Lektor</div>
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
                      Panduan
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
                    <ol>
                      <li>
                        <span class="title">Buku Kebijakan SPMI</span>
                        <span class="">
                          <a
                            class="btn btn-sm btn-success btn-labeled pull-right"
                            href="#"
                            role="button"
                            @click.prevent="previewPdf"
                          >
                            <span class="btn-label"
                              ><i class="fa fa-search"></i></span
                            >Lihat</a
                          >
                        </span>
                      </li>
                      <li>
                        <span class="title">Buku Manual SPMI</span>
                        <span class="">
                          <a
                            class="btn btn-sm btn-success btn-labeled pull-right"
                            href="#"
                            role="button"
                            @click.prevent="previewPdf"
                          >
                            <span class="btn-label"
                              ><i class="fa fa-search"></i></span
                            >Lihat</a
                          >
                        </span>
                      </li>
                      <li>
                        <span class="title"> Standar SPMI</span>
                        <span class="">
                          <a
                            class="btn btn-sm btn-success btn-labeled pull-right"
                            href="#"
                            role="button"
                            @click.prevent="previewPdf"
                          >
                            <span class="btn-label"
                              ><i class="fa fa-search"></i></span
                            >Lihat</a
                          >
                        </span>
                      </li>
                      <li>
                        <span class="title"> Buku Formulir SPMI</span>
                        <span class=""
                          ><a
                            class="btn btn-sm btn-success btn-labeled pull-right"
                            href="#"
                            role="button"
                            @click.prevent="previewPdf"
                          >
                            <span class="btn-label"
                              ><i class="fa fa-search"></i></span
                            >Lihat</a
                          >
                        </span>
                      </li>
                    </ol>
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
  methods: {
    previewPdf() {
      console.log("PDF");
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
ol {
  padding-top: 25px;
}
ol > li {
  font-weight: bold;
  padding-bottom: 10px;
  width: 60%;
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
.title h2 {
  padding-top: 25px;
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
  ol > li {
    font-weight: bold;
    padding-bottom: 10px;
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
</style>
