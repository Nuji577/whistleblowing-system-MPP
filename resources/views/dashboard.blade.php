<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <title>WBS | Dashboard</title>
    {{-- style --}}
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

:root {
    --c-dark:#252525;
    --c-brand:#00976a;
    --c-brand-light:#8bfbff;
    --c-body:#3f3f3f;
    --font-base:"Poppins", sans-serif;
    --box-shadow:0px, 15px, 25px, rgba(0,0,0,0.8);
    --transition:all 0.5s ease;
}

body {
    font-family: var(--font-base);
    overflow-x: hidden;
}

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
    font-weight: 600;
    font-family: var(--font-base);
}

.section {
    position: relative;
    scroll-margin-top: 100px; /* biar offset pas */
    min-height: 100vh !important;
}

.section-padding {
    padding-top: 140px;
    padding-bottom: 140px;
}
/* Navbar */
.navbar-nav .nav-link {
    font-family: "Poppins", sans-serif;
    font-weight: 400 !important;
    color:var(--c-dark);
}

.nav-link.active {
    color: var(--c-brand) !important;
    font-weight: bold;
  }


.nav-link:hover {
    color: var(--c-brand) !important;
    transform: translateY(-4px) !important;
    transition:all 0.1s ease-in-out !important;
}

.navbar-nav .nav-link.active {
    color: var(--c-brand);
}

.navbar-toggler {
    border: none !important;
}

.navbar-toggler:focus {
    box-shadow: none !important;
}

.navbar-toggler:hover {

}

/* BTN */
.btn {
    font-weight: 600 !important;
    font-size: 14px !important;
    text-transform: uppercase !important;
    border-radius: 0 !important;
    padding: 10px 24px !important;
    background-color: var(--c-brand) !important;
    border: var(--c-brand-light) !important;
    box-shadow: 0 4px 10px var(--c-brand-light) !important;
}

.btn-brand {
    background-color: var(--c-brand) !important;
    border-color: var(--c-brand) !important;
    color: white !important;
}

.btn:hover {
    color: var(--c-brand) !important;
    background-color:white !important;
    box-shadow: 0 4px 10px var(--c-brand) !important; /* Tambahkan offset, blur, dan spread */
    border-color: var(--c-brand-light) !important;
    transition: var(--transition) !important;
}


/* Jumbotron */
#jumbotron {
    background: #004c95;
    background: linear-gradient(180deg, rgba(0,76,149,1) 17%, rgba(0,95,175,1) 43%, rgba(48,155,237,1) 74%, rgba(255,255,255,1) 100%);
}
/* Cara Kerja */
#carakerja {
    font-family: var(--font-base);
}

.carakerja {
    position: relative;
    overflow: hidden;
    z-index: 2;
}

.card h2 {
    font-size: 60px !important;
    transform: translateX(-100%) !important;
}
.card img {
    transform: translateX(50%);
}

/* Formulir */
#formulir {
    
}
/* FAQ */
#faq {

}

/* Footer */
#footer {
    background: rgb(255,255,255);
    background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(48,155,237,1) 63%, rgba(0,95,175,1) 87%, rgba(0,76,149,1) 100%);
}

/* Section Title */
.section-title {
    margin-bottom: 40px;
}
.section-title .line {
    width: 60px;
    height: 4px;
    background-color: var(--c-brand);
    margin: 16px auto 24px auto;
}

/* Ukuran Tablet */
@media (min-width: 768px) and (max-width: 991px) {
    .jumbotron h1,
    .jumbotron h5 {
      justify-content: center;
      display: flex; /* Tambahin ini biar justify-content jalan */
    }
  }
  
  /* Ukuran Mobile */
  @media (max-width: 767px) {
    .jumbotron h1,
    .jumbotron h5 {
      text-align: center;
    }

  }
</style>
  
  </head>
  <body id="body" data-bs-spy="scroll" data-bs-target="navbar" data-bs-offset="100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top shadow">
      <div class="container">
        <a class="navbar-brand px-5 fw-semibold" href="#"> belum ada logo </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto column-gap-5">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#jumbotron">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#carakerja">Cara Kerja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#formulir">Buat Pengaduan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#faq">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary p-2 px-5 rounded-4" role="button" href="login"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
              </svg> Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Jumbotron -->
    <section id="jumbotron" class="container-fluid bg-light">
      <div class="jumbotron d-flex flex-column text-white align-items-center justify-content-center p-5 pt-2">
        <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
        <dotlottie-player src="https://lottie.host/b9089d4f-7b47-41ae-b006-ec3ddfa8c5b9/OOkwTigYtW.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>
        <h1 class="display-4 fst-italic fw-bold text-uppercase" style="
        text-shadow: 3px 3px 0 var(--c-brand);
        display: inline-block;">Whistle blowing system</h1>
        <h2 class="fw-semibold text-uppercase" style="
        text-shadow: 3px 3px 0 var(--c-brand);">dpmptsp kabupaten tegal</h2>
        <a class="btn btn-primary btn-lg mt-3 rounded-4 px-5" href="#formulir" role="button"
          ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
            <path
              d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25 25 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009l.496.008a64 64 0 0 1 1.51.048m1.39 1.081q.428.032.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a66 66 0 0 1 1.692.064q.491.026.966.06"
            />
          </svg>
          BUAT PENGADUAN</a
        >
      </div>
    </section>

    <!-- Cara Kerja -->
    <section id="carakerja" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="section-title">
              <h1 class="text-uppercase fw-semibold">cara kerja</h1>
              <div class="line"></div>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, sunt.</p>
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-center p-5 align-items-center flex-wrap">
          <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
            <div class="card rounded-4 align-items-center text-center p-3 shadow" style="max-width: 300px">
              <h2>1.</h2>
              <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8m0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5" />
              </svg>
              <h3 class="mt-3 mb-3">Mengisi Formulir</h3>
              <p>Pelapor mengisi formulir di situs web WBS, mengunggah bukti pendukung, lalu mengirimkan laporan.</p>
            </div>
          </div>
          <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
            <div class="card rounded-4 align-items-center text-center p-3 shadow" style="max-width: 300px">
              <h2>2.</h2>
              <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                <path
                  d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"
                />
              </svg>
              <h3 class="mt-3 mb-3">Proses Verifikasi</h3>
              <p>Laporan yang masuk akan diperiksa dan diverifikasi terlebih dahulu.</p>
            </div>
          </div>
          <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
            <div class="card rounded-4 align-items-center text-center p-3 shadow" style="max-width: 300px">
              <h2>3.</h2>
              <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-reply-all" viewBox="0 0 16 16">
                <path
                  d="M8.098 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.7 8.7 0 0 0-1.921-.306 7 7 0 0 0-.798.008h-.013l-.005.001h-.001L8.8 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L4.114 8.254l-.042-.028a.147.147 0 0 1 0-.252l.042-.028zM9.3 10.386q.102 0 .223.006c.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96z"
                />
                <path d="M5.232 4.293a.5.5 0 0 0-.7-.106L.54 7.127a1.147 1.147 0 0 0 0 1.946l3.994 2.94a.5.5 0 1 0 .593-.805L1.114 8.254l-.042-.028a.147.147 0 0 1 0-.252l.042-.028 4.012-2.954a.5.5 0 0 0 .106-.699" />
              </svg>
              <h3 class="mt-3 mb-3">Tindak Lanjut</h3>
              <p>Dalam waktu 5 hari, instansi akan memproses dan memberikan tanggapan atas laporan Anda.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Formulir -->
    <section id="formulir">
      <div class="row">
        <div class="col-12 text-center">
          <div class="section-title">
            <h1 class="text-uppercase fw-semibold pt-3">buat pengaduan</h1>
            <div class="line"></div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, sunt.</p>
          </div>
        </div>
      </div>
      <div class="container mt-5">
        <div class="card mx-auto p-4 shadow" style="max-width: 500px; width: 90%">
          <form>
            <div class="mb-1">
              <label for="pelapor" class="form-label">Pelapor*</label>
              <input type="text" class="form-control" id="nama" placeholder="Nama Pelapor" />
            </div>
            <div class="mb-1">
              <label for="nomortelepon" class="form-label"></label>
              <input type="text" class="form-control" id="nomortelepon" placeholder="Nomor Telepon (Opsional)" />
            </div>
            <div class="mb-1">
              <label for="email" class="form-label"></label>
              <input type="text" class="form-control" id="email" placeholder="Email (Wajib diisi)" />
            </div>
            <div class="mb-3 pt-5 position-relative">
              <label for="jenisLaporan" class="form-label">Jenis Pelanggaran</label>
              <div class="position-relative">
                <input type="text" class="form-control pe-5" id="jenispelanggaran" placeholder="Pilih jenis pelanggaran" onclick="toggleOptions()" readonly />
                <span class="position-absolute end-0 top-50 translate-middle-y me-2" onclick="toggleOptions()" style="cursor: pointer">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-square" viewBox="0 0 16 16">
                    <path d="M3.626 6.832A.5.5 0 0 1 4 6h8a.5.5 0 0 1 .374.832l-4 4.5a.5.5 0 0 1-.748 0z" />
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z" />
                  </svg>
                </span>
              </div>
              <div id="options" class="position-absolute w-100 bg-white border rounded shadow-sm d-none" style="z-index: 1000">
                <div class="list-group">
                  <button type="button" class="list-group-item list-group-item-action" onclick="selectOption('Korupsi')">Korupsi</button>
                  <button type="button" class="list-group-item list-group-item-action" onclick="selectOption('Benturan Kepentingan')">Benturan Kepentingan</button>
                  <button type="button" class="list-group-item list-group-item-action" onclick="selectOption('Pelecehan Seksual')">Pelecehan Seksual</button>
                </div>
              </div>
            </div>

            <div class="mb-1 pt-2">
              <input type="text" class="form-control" id="indikasi" placeholder="Indikasi Pelanggaran" />
            </div>
            <div class="mb-1">
              <label for="tempat" class="form-label"></label>
              <input type="tempat" class="form-control" id="tempat" placeholder="Tempat Kejadian" />
            </div>
            <div class="mb-1 pt-5">
              <label for="waktu" class="form-label">Waktu Kejadian</label>
              <input type="date" class="form-control" id="waktu" placeholder="Tanggal Kejadian" onclick="this.showPicker()" />
            </div>                  
            <div class="mb-1">
              <label for="terlapor" class="form-label"></label>
              <input type="terlapor" class="form-control" id="terlapor" placeholder="Nama Terlapor" />
            </div>
            <div class="mb-1">
              <label for="Kronologi" class="form-label"></label>
              <textarea class="form-control" id="saran" rows="5" placeholder="Kronologis Kejadian"></textarea>
            </div>
            <div class="mb-3 pt-5">
              <label for="attachment" class="form-label">Lampirkan Bukti (Opsional)</label>
              <input class="form-control" type="file" id="attachment" />
            </div>
            <button type="submit" class="btn btn-primary w-100">Kirim</button>
          </form>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="d-flex flex-column mt-5 justify-content-center align-items-center text-center">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <div class="section-title">
            <h1 class="text-uppercase fw-semibold mt-5 pt-5">Frequently asked question</h1>
            <div class="line"></div>
            <p></p>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center w-100">
        <div class="accordion rounded-4 shadow" id="accordionExample" style="max-width: 600px; width: 80%">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Apakah setiap pengaduan yang saya sampaikan akan selalu mendapatkan tanggapan?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Setiap pengaduan yang Anda ajukan akan mendapat tanggapan dan tercatat dalam aplikasi WBS ini. Status pengaduan akan diperbarui secara otomatis sesuai dengan respon dari pihak penerima pengaduan. Untuk melihat tanggapan
                tersebut, Anda perlu login terlebih dahulu menggunakan username yang telah terdaftar di aplikasi ini. Anda juga dapat memantau status pengaduan melalui riwayat pengaduan menggunakan nomor register pengaduan yang diterima.
                Perlu diperhatikan bahwa pengaduan Anda akan lebih mudah diproses jika memenuhi unsur-unsur pengaduan.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Berapa lama waktu yang dibutuhkan untuk memberikan tanggapan atas pengaduan yang diajukan?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Sesuai dengan peraturan yang berlaku, tanggapan atau respon atas pengaduan harus diberikan paling lambat dalam waktu 10 (sepuluh) hari kerja sejak pengaduan diterima. Jika respon disampaikan dalam bentuk surat tertulis,
                pelapor perlu mencantumkan identitas yang jelas, seperti nama dan alamat koresponden. Sementara itu, untuk tanggapan melalui media pengaduan lainnya, respon akan diberikan sesuai dengan identitas pelapor yang tertera pada
                media tersebut.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Saya sudah mengirimkan pengaduan, tetapi kemudian saya ingin mengubah atau menambahkan data terkait pengaduan tersebut. Apa yang harus saya lakukan? Apakah saya perlu membuat pengaduan baru?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">Pengaduan yang sudah Anda kirimkan tidak dapat diubah atau diperbarui. Oleh karena itu, jika ada tambahan atau perubahan data, Anda perlu membuat pengaduan baru.</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Lokasi -->
    <section id="location" class="py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="mb-4">Lokasi Kami</h2>
            <p class="mb-4">Kunjungi lokasi kami dengan mudah menggunakan peta interaktif di bawah ini.</p>
          </div>
        </div>
        <div class="row shadow justify-content-center">
          <div class="col-md-10">
            <div class="ratio ratio-16x9">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d633.0645512050083!2d109.139095!3d-6.971113199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbf5179efe331%3A0xf8a6bf60db4d6180!2sMAL%20PELAYANAN%20PUBLIK%20KABUPATEN%20TEGAL!5e0!3m2!1sen!2sid!4v1616468984124!5m2!1sen!2sid"
                style="border: 0; width: 100%; height: 100%;"
                allowfullscreen=""
                loading="eager"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>    

    <!-- Footer -->
    <footer id="footer" class="text-dark py-4">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-4 mb-3">
            <h5 class="fw-semibold">DPMPTSP Kabupaten Tegal</h5>
            <p class="fw-semibold">Jl. Jenderal Ahmad Yani, Procot, Kec. Slawi, Kabupaten Tegal, Jawa Tengah.</p>
          </div>
          <div class="col-md-4 mb-3">
            <h5 class="fw-semibold">Contact Us</h5>
            <p>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path
                  d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                />
              </svg>
            </p>
            <p class="fw-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
            </svg></p>
          </div>
        </div>
        <div class="mt-3 text-light">
          <p>&copy; 2025 DPMPTSP Kabupaten Tegal.</p>
        </div>
      </div>
    </footer>
    {{-- script --}}
    <script>
        // Script navbar
document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-link");
  
    navLinks.forEach((link) => {
      link.addEventListener("click", function () {
        navLinks.forEach((nav) => nav.classList.remove("active"));
        this.classList.add("active");
      });
    });
  
    var scrollSpy = new bootstrap.ScrollSpy(document.body, {
      target: "#navbarNav",
      offset: 100,
    });
  
    document.addEventListener("activate.bs.scrollspy", function (e) {
      console.log("Active section:", e.relatedTarget);
    });
  });
  
  // Script dropdown jenis laporan
  function toggleOptions() {
    const options = document.getElementById("options");
    options.classList.toggle("d-none");
  }
  
  function selectOption(value) {
    document.getElementById("jenisLaporan").value = value;
    document.getElementById("options").classList.add("d-none");
  }
  
  document.addEventListener("click", function (event) {
    const options = document.getElementById("options");
    const input = document.getElementById("jenisLaporan");
    if (!input.contains(event.target) && !options.contains(event.target)) {
      options.classList.add("d-none");
    }
  });
  
  function toggleOptions() {
    const options = document.getElementById('options');
    options.classList.toggle('d-none');
  }
  
  function selectOption(value) {
    const input = document.getElementById('jenispelanggaran');
    input.value = value;
    toggleOptions();
  }
  
  document.addEventListener('click', function(event) {
    const options = document.getElementById('options');
    const input = document.getElementById('jenispelanggaran');
    if (!input.contains(event.target) && !options.contains(event.target)) {
      options.classList.add('d-none');
    }
  });
  
    </script>

    <!-- Script cdn -->
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
