<template>
  <div>
    <h2>Pejabat Struktural</h2>
    <div class="container">
      <div class="level-1 rectangle">
        <h1 class="text-center">Rektor</h1>
        <figure>
          <img src="/img/pejabat/rektor.png" alt="Rektor" />
          <figcaption>I Wayan Numertayasa, S.Pd.,M.Pd.</figcaption>
        </figure>
      </div>
      <ol class="level-2-wrapper">
        <li>
          <div class="level-2 rectangle">
            <h2 class="text-center">Wakil Rektor I</h2>
            <p class="text-center">Bidang Akademik & Kerjasama</p>
            <figure>
              <img src="/img/pejabat/wakil1.png" alt="Rektor" />
              <figcaption>Pande Agusadiwijaya, S.Pd.,M.Pd.</figcaption>
            </figure>
          </div>
        </li>
        <li>
          <div class="level-2 rectangle">
            <h2 class="text-center">Wakil Rektor II</h2>
            <p class="text-center">Bidang SDM & Keuangan</p>
            <figure>
              <img src="/img/pejabat/wakil2.png" alt="Rektor" />
              <figcaption>Md. Andhi Supriatna Arna, S.H.,M.H.</figcaption>
            </figure>
          </div>
        </li>
        <li>
          <div class="level-2 rectangle">
            <h2 class="text-center">Wakil Rektor III</h2>
            <p class="text-center">Bidang Kemahasiswaan & Alumni</p>
            <figure>
              <img src="/img/pejabat/wakil3.png" alt="Rektor" />
              <figcaption>I Putu Oka Suardana, S.Pd.,M.Pd.</figcaption>
            </figure>
          </div>
        </li>
        <li>
          <div class="level-2 rectangle">
            <p class="text-center">
              Kepala Lembaga Penelitian & Pengabdian Masyarakat
            </p>
            <figure>
              <img src="/img/pejabat/ketua-lp.png" alt="Rektor" />
              <figcaption>Ni Wayan Sri Darmayanthi S.Pd.,M.Pd.</figcaption>
            </figure>
          </div>
        </li>
        <li>
          <div class="level-2 rectangle">
            <p class="text-center">Kepala Lembaga Penjaminan Mutu</p>
            <figure>
              <img src="/img/pejabat/ketua-pm.png" alt="Rektor" />
              <figcaption>Ni Putu Eni Astuti, S.Pd.,M.Pd.</figcaption>
            </figure>
          </div>
        </li>
        <li>
          <div class="level-2 rectangle">
            <p class="text-center">Kepala Tata Usaha</p>
            <figure>
              <img src="/img/pejabat/ktu.png" alt="Rektor" />
              <figcaption>I Nyoman Sudirman, S.Pd.,M.Pd.</figcaption>
            </figure>
          </div>
        </li>
      </ol>

      <div class="unit">
        <h3 class="text-center">FAKULTAS ILMU PENDIDIKAN</h3>
        <ol class="level-1-wrapper">
          <li>
            <div class="level-1 rectangle">
              <p class="text-center">Dekan Fakultas Ilmu Pendidikan</p>
              <figure>
                <img src="/img/pejabat/dekan-fip.png" alt="Rektor" />
                <figcaption>I Nengah Sueca S.Pd.,M.Pd.</figcaption>
              </figure>
            </div>
            <ol class="level-2-wrapper">
              <li>
                <div class="level-2 rectangle">
                  <p class="text-center">Ketua Jurusan Pendidikan</p>
                  <figure>
                    <img src="/img/pejabat/kejur-fip.png" alt="Rektor" />
                    <figcaption>I Putu Beny Pradnyana S.Pd.,M.Pd.</figcaption>
                  </figure>
                </div>
              </li>
              <li></li>
              <li>
                <div class="level-2 rectangle">
                  <p class="text-center">Sekretaris Jurusan Pendidikan</p>
                  <figure>
                    <img src="/img/pejabat/tu-fip.png" alt="Rektor" />
                    <figcaption>
                      Luh Made Dwi Wedayanthi, S.Pd.,M.Pd.
                    </figcaption>
                  </figure>
                </div>
              </li>
            </ol>
          </li>
        </ol>
      </div>
      <div class="unit">
        <h3 class="text-center">FAKULTAS TEKNOLOGI DAN BISNIS</h3>
      </div>
      <div class="unit">
        <h3 class="text-center">UNIT</h3>
        <ol class="level-1-wrapper">
          <li>
            <div class="level-1 rectangle">
              <p class="text-center">
                Kepala Unit Perpustakaan, Laboratorium & Sistem Informasi
              </p>
              <figure>
                <img src="/img/pejabat/kepala-unit.png" alt="Rektor" />
                <figcaption>Desak Anom Djanawati, S.Pd.,M.Pd.</figcaption>
              </figure>
            </div>
          </li>
        </ol>
      </div>
    </div>
  </div>
</template>
<style scoped>
figure figcaption {
  text-align: center;
  font-size: 1.3rem;
}
h2 {
  padding-bottom: 25px;
}
.unit {
  padding-bottom: 25px;
  padding-top: 15px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.15);
}
img {
  width: 100%;
  height: auto;
}
:root {
  --level-1: #8dccad;
  --level-2: #f5cc7f;
  --level-3: #7b9fe0;
  --level-4: #f27c8d;
  --black: black;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

ol {
  list-style: none;
}

body {
  margin: 50px 0 100px;
  text-align: center;
  font-family: "Inter", sans-serif;
}

.container {
  max-width: 1000px;
  padding: 0 10px;
  margin: 0 auto;
}

.rectangle {
  position: relative;
  padding: 20px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
}

/* LEVEL-1 STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.level-1 {
  width: 50%;
  margin: 0 auto 40px;
  background: var(--level-1);
}

.level-1::before {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translateX(-50%);
  width: 2px;
  height: 20px;
  background: var(--black);
}

/* LEVEL-2 STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.level-2-wrapper {
  position: relative;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
}

.level-2-wrapper::before {
  content: "";
  position: absolute;
  top: -20px;
  left: 25%;
  width: 50%;
  height: 2px;
  background: var(--black);
}

.level-2-wrapper::after {
  display: none;
  content: "";
  position: absolute;
  left: -20px;
  bottom: -20px;
  width: calc(100% + 20px);
  height: 2px;
  background: var(--black);
}

.level-2-wrapper li {
  position: relative;
}

.level-2-wrapper > li::before {
  content: "";
  position: absolute;
  bottom: 100%;
  left: 50%;
  transform: translateX(-50%);
  width: 2px;
  height: 20px;
  background: var(--black);
}

.level-2 {
  width: 90%;
  margin: 0 auto 40px;
  background: var(--level-2);
}

.level-2::before {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translateX(-50%);
  width: 2px;
  height: 20px;
  background: var(--black);
}

.level-2::after {
  display: none;
  content: "";
  position: absolute;
  top: 50%;
  left: 0%;
  transform: translate(-100%, -50%);
  width: 20px;
  height: 2px;
  background: var(--black);
}

/* LEVEL-3 STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.level-3-wrapper {
  position: relative;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-column-gap: 20px;
  width: 90%;
  margin: 0 auto;
}

.level-3-wrapper::before {
  content: "";
  position: absolute;
  top: -20px;
  left: calc(25% - 5px);
  width: calc(50% + 10px);
  height: 2px;
  background: var(--black);
}

.level-3-wrapper > li::before {
  content: "";
  position: absolute;
  top: 0;
  left: 50%;
  transform: translate(-50%, -100%);
  width: 2px;
  height: 20px;
  background: var(--black);
}

.level-3 {
  margin-bottom: 20px;
  background: var(--level-3);
}

/* LEVEL-4 STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.level-4-wrapper {
  position: relative;
  width: 80%;
  margin-left: auto;
}

.level-4-wrapper::before {
  content: "";
  position: absolute;
  top: -20px;
  left: -20px;
  width: 2px;
  height: calc(100% + 20px);
  background: var(--black);
}

.level-4-wrapper li + li {
  margin-top: 20px;
}

.level-4 {
  font-weight: normal;
  background: var(--level-4);
}

.level-4::before {
  content: "";
  position: absolute;
  top: 50%;
  left: 0%;
  transform: translate(-100%, -50%);
  width: 20px;
  height: 2px;
  background: var(--black);
}

/* MQ STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
@media screen and (max-width: 700px) {
  .rectangle {
    padding: 20px 10px;
  }

  .level-1,
  .level-2 {
    width: 100%;
  }

  .level-1 {
    margin-bottom: 20px;
  }

  .level-1::before,
  .level-2-wrapper > li::before {
    display: none;
  }

  .level-2-wrapper,
  .level-2-wrapper::after,
  .level-2::after {
    display: block;
  }

  .level-2-wrapper {
    width: 90%;
    margin-left: 10%;
  }

  .level-2-wrapper::before {
    left: -20px;
    width: 2px;
    height: calc(100% + 40px);
  }

  .level-2-wrapper > li:not(:first-child) {
    margin-top: 50px;
  }
}
</style>
