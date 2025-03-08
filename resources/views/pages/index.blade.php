@extends('layouts.main')

@section('content')
    <!-- Jumbotron -->
    <section id="jumbotron" class="container-fluid bg-light">
        <div class="jumbotron d-flex flex-column text-white align-items-center justify-content-center p-5 pt-2">
            <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
            <dotlottie-player src="https://lottie.host/b9089d4f-7b47-41ae-b006-ec3ddfa8c5b9/OOkwTigYtW.lottie"
                background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>
            <h1 class="display-4 fst-italic fw-bold text-uppercase"
                style="
        text-shadow: 3px 3px 0 var(--c-brand);
        display: inline-block;">Whistle blowing
                system</h1>
            <h2 class="fw-semibold text-uppercase" style="
        text-shadow: 3px 3px 0 var(--c-brand);">dpmptsp
                kabupaten tegal</h2>
            <a class="btn btn-primary btn-lg mt-3 rounded-4 px-5" href="#formulir" role="button"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                    <path
                        d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25 25 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009l.496.008a64 64 0 0 1 1.51.048m1.39 1.081q.428.032.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a66 66 0 0 1 1.692.064q.491.026.966.06" />
                </svg>
                BUAT PENGADUAN</a>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                            class="bi bi-card-text" viewBox="0 0 16 16">
                            <path
                                d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                            <path
                                d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8m0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5" />
                        </svg>
                        <h3 class="mt-3 mb-3">Mengisi Formulir</h3>
                        <p>Pelapor mengisi formulir di situs web WBS, mengunggah bukti pendukung, lalu mengirimkan
                            laporan.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                    <div class="card rounded-4 align-items-center text-center p-3 shadow" style="max-width: 300px">
                        <h2>2.</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                            class="bi bi-card-checklist" viewBox="0 0 16 16">
                            <path
                                d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                            <path
                                d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0" />
                        </svg>
                        <h3 class="mt-3 mb-3">Proses Verifikasi</h3>
                        <p>Laporan yang masuk akan diperiksa dan diverifikasi terlebih dahulu.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                    <div class="card rounded-4 align-items-center text-center p-3 shadow" style="max-width: 300px">
                        <h2>3.</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                            class="bi bi-reply-all" viewBox="0 0 16 16">
                            <path
                                d="M8.098 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.7 8.7 0 0 0-1.921-.306 7 7 0 0 0-.798.008h-.013l-.005.001h-.001L8.8 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L4.114 8.254l-.042-.028a.147.147 0 0 1 0-.252l.042-.028zM9.3 10.386q.102 0 .223.006c.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96z" />
                            <path
                                d="M5.232 4.293a.5.5 0 0 0-.7-.106L.54 7.127a1.147 1.147 0 0 0 0 1.946l3.994 2.94a.5.5 0 1 0 .593-.805L1.114 8.254l-.042-.028a.147.147 0 0 1 0-.252l.042-.028 4.012-2.954a.5.5 0 0 0 .106-.699" />
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
                @if (session('error'))
                    <div class="alert alert-danger text-center">{{ session('error') }}</div>
                @endif
                <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-1">
                        <label for="nama" class="form-label">Pelapor*</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Pelapor"
                            required />
                    </div>
                    <div class="mb-1">
                        <input type="text" name="nomortelepon" class="form-control" id="nomortelepon"
                            placeholder="Nomor Telepon (Opsional)" />
                    </div>
                    <div class="mb-1">
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="Email (Wajib diisi)" required />
                    </div>
                    <div class="mb-3">
                        <label for="jenispelanggaran" class="form-label">Jenis Pelanggaran</label>
                        <select name="jenispelanggaran" class="form-select" id="jenispelanggaran" required>
                            <option value="" selected>Pilih jenis pelanggaran</option>
                            <option value="Korupsi">Korupsi</option>
                            <option value="Benturan Kepentingan">Benturan Kepentingan</option>
                            <option value="Pelecehan Seksual">Pelecehan Seksual</option>
                        </select>
                    </div>
                    <div class="mb-1">
                        <input type="text" name="indikasi" class="form-control" id="indikasi"
                            placeholder="Indikasi Pelanggaran" required />
                    </div>
                    <div class="mb-1">
                        <input type="text" name="tempat" class="form-control" id="tempat"
                            placeholder="Tempat Kejadian" required />
                    </div>
                    <div class="mb-1">
                        <label for="waktu" class="form-label">Waktu Kejadian</label>
                        <input type="date" name="waktu" class="form-control" id="waktu" required />
                    </div>
                    <div class="mb-1">
                        <input type="text" name="terlapor" class="form-control" id="terlapor"
                            placeholder="Nama Terlapor" required />
                    </div>
                    <div class="mb-1">
                        <label for="kronologi" class="form-label">Kronologi Kejadian*</label>
                        <textarea name="kronologi" class="form-control" id="kronologi" rows="5" placeholder="Ceritakan kronologi kejadian" required></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="attachment" class="form-label">Lampirkan Bukti (Opsional)</label>
                        <input class="form-control" type="file" name="attachment" id="attachment" />
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
                        <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Apakah setiap pengaduan yang saya sampaikan akan selalu mendapatkan tanggapan?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Setiap pengaduan yang Anda ajukan akan mendapat tanggapan dan tercatat dalam aplikasi WBS
                            ini. Status pengaduan akan diperbarui secara otomatis sesuai dengan respon dari pihak
                            penerima pengaduan. Untuk melihat tanggapan
                            tersebut, Anda perlu login terlebih dahulu menggunakan username yang telah terdaftar di
                            aplikasi ini. Anda juga dapat memantau status pengaduan melalui riwayat pengaduan
                            menggunakan nomor register pengaduan yang diterima.
                            Perlu diperhatikan bahwa pengaduan Anda akan lebih mudah diproses jika memenuhi unsur-unsur
                            pengaduan.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Berapa lama waktu yang dibutuhkan untuk memberikan tanggapan atas pengaduan yang diajukan?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Sesuai dengan peraturan yang berlaku, tanggapan atau respon atas pengaduan harus diberikan
                            paling lambat dalam waktu 10 (sepuluh) hari kerja sejak pengaduan diterima. Jika respon
                            disampaikan dalam bentuk surat tertulis,
                            pelapor perlu mencantumkan identitas yang jelas, seperti nama dan alamat koresponden.
                            Sementara itu, untuk tanggapan melalui media pengaduan lainnya, respon akan diberikan sesuai
                            dengan identitas pelapor yang tertera pada
                            media tersebut.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Saya sudah mengirimkan pengaduan, tetapi kemudian saya ingin mengubah atau menambahkan data
                            terkait pengaduan tersebut. Apa yang harus saya lakukan? Apakah saya perlu membuat pengaduan
                            baru?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">Pengaduan yang sudah Anda kirimkan tidak dapat diubah atau
                            diperbarui. Oleh karena itu, jika ada tambahan atau perubahan data, Anda perlu membuat
                            pengaduan baru.</div>
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
                            style="border: 0; width: 100%; height: 100%;" allowfullscreen="" loading="eager"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
