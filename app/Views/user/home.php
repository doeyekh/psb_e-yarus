<?= $this->extend('template/templateUser') ?>
<?= $this->section('content') ?>
<!-- slide -->
<div class="section full mb-3">
    <div class="carousel-single owl-carousel owl-theme">
        <div class="item">
            <img src="assets/img/sample/photo/wide1.jpg" alt="alt" class="imaged w-100">
        </div>
        <div class="item">
            <img src="assets/img/sample/photo/wide2.jpg" alt="alt" class="imaged w-100">
        </div>
        <div class="item">
            <img src="assets/img/sample/photo/wide3.jpg" alt="alt" class="imaged w-100">
        </div>
    </div>
</div>

<div class="section mb-3">
    <a href="<?= base_url() ?>daftar" class="btn btn-block btn-outline-primary">Daftar</a>
    <a href="<?= base_url() ?>#informasi" class="btn btn-block btn-outline-info">Informasi Pendaftaran</a>
    <a href="<?= base_url() ?>biaya" class="btn btn-block btn-primary">Biaya Pendaftaran</a>
    <a href="" class="btn btn-block btn-info">Panduan PSB</a>
</div>

<section id="welcome">
    <div class="section full">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Selamat Datang Di Info PSB YARUS</h5>
                <p class="card-text">
                As-Syifa merupakan sekolah islam terpadu dengan basis sistem Boarding School (SMPIT/MTs, SMAIT/MA, SMK IT, LTIQ) dan Full Day (PAUD IT dan STIQ). As-Syifa dibangun di lokasi strategis tepatnya di kabupaten Subang, Jawa Barat dan menyebar ke 3 tempat yakni Jalancagak, Wanareja dan Sagalaherang.
                </p>

                <p class="card-text">
                Alhamdulillah berkat rahmat Allah SWT, As-Syifa kini sudah diamanahi beberapa jenjang sekolah mulai dari PAUDIT, SMPIT/MTs, SMAIT/MA, SMK IT, LTIQ, hingga Sekolah Tinggi Ilmu Qur’an atau disingkat STIQ. Mudah-mudahan As-Syifa bisa memberikan manfaat terutama di dunia pendidikan.
                </p>
                    <iframe width="367" height="150" src="https://www.youtube.com/embed/U5vzbPZPiVo" title="After Movie Gema Mukhoyam Ke X Tahun 2023" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen ></iframe>
            </div>
        </div>
    </div>
</section>

<section id="informasi">
    <div class="section mb-3">
        <h3 class="mt-3 text-center">Informasi PSB 2024 / 2025</h3>
        <div class="divider bg-primary mt-2 mb-3 w-80"></div>
        <p class="text-justify">
        Dibuka pendaftaran santri baru Tahun Pendidikan 2023-2024.
Pendaftaran dibuka tanggal 30 September 2022, dan akan ditutup jika kuota santri baru sudah terpenuhi.

Pendaftaran santri baru dilakukan secara online melalui: bit.ly/psbyarus2023 atau bisa juga datang langsung ke kantor pendaftaran di hari Jum’at, Sabtu dan Ahad jam 08.00-16.00 WIB.

Untuk informasi selengkapnya dapat  melihat Informasi  dibawah ini:
        </p>
        <a href="" class="btn btn-primary btn-block">Daftar Sekarang</a>

                    <div class="wide-block pt-2 pb-2">

                        <ul class="nav nav-tabs style1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active p-2" data-toggle="tab" href="#waktu" role="tab">
                                    Waktu Pendaftaran
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#syarat" role="tab">
                                    Persyaratan Pendaftaran
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mt-2">
                            <div class="tab-pane fade show active" id="waktu" role="tabpanel">
                            <strong> Waktu Pendaftaran</strong>
                                <div class="wide-block">
                                    <div class="timeline timed">
                                        <div class="item">
                                            <div class="dot"></div>
                                            <div class="content">
                                                <h4 class="title">Gelombang 1</h4>
                                                <div class="text">10 Oktober - 30 Desember 2023</div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="dot"></div>
                                            <div class="content">
                                                <h4 class="title">Gelombang 1</h4>
                                                <div class="text">10 Oktober - 30 Desember 2023</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="syarat" role="tabpanel">
                                <strong> Persyaratan </strong>
                                <ul class="listview image-listview media">
                                    <li>
                                        <div class="item">
                                            <div class="imageWrapper">
                                            </div>
                                            <div class="in">
                                                <div>
                                                    Fc Ijazah (Legalisir)
                                                    <div class="text-muted">4 Rangkap</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item">
                                            <div class="imageWrapper">
                                            </div>
                                            <div class="in">
                                                <div>
                                                    Street Photos
                                                    <div class="text-muted">15 photos</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                
    </div>
</section>
<?= $this->endSection() ?>