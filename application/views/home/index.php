<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Pembeljaran Online.</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/home/style.css' ?>">
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="button">
                <a href="<?= base_url('auth/registration') ?>" class="btn">Login</a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#courses">Kursus</a></li>
                    <li><a href="#struktur">Struktur</a></li>
                    <li><a href="#tutors">Pengajar</a></li>
                    <li><a href="#paket">Kelas & Paket</a></li>
                    <li><a href="#penghargaan">Penghargaan</a></li>
                    <li><a href="#partners">Partner</a></li>
                    <li><a href="#contact">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <div class="homeg">
                <img src="assets/home/images/1.jpg" />
            </div>
            <div class="kolom">
                <p class="deskripsi">Belajar Programming #dirumahaja</p>
                <h2>Tetap Sehat, Tetap Semangat</h2>
                <h1>VISI & MISI</h1>
                <p>Visi kami adalah menjadi konsultan yang terdepan dalam bidang Informasi Teknologi<br>
                    <br>
                    Misi kami adalah memberikan Kepuasan kepada Pelanggan dalam bidang jasa Informasi Teknologi dengan
                    prinsip :<br>
                    1.Efektifitas dan efisiensi dalam solusi<br>
                    2.Kualitas dan profesionalisme kerja yang tinggi<br>
                    3.Komitmen dalam setiap pelayanan<br>
                    4.Memberikan pelajaran yang sesuai kriteria kepada pelajar
                </p>
            </div>
        </section>

        <!-- untuk courses -->
        <section id="courses">
            <div class="kolom">
                <p class="deskripsi">Tidak Usah Bingung !!!</p>
                <h2>Kursus Online</h2>
                <p>Kursus online merupakan konsep belajar online atau e-learning yang memungkinkan murid mempunyai
                    kesempatan untuk menghadiri kelas kapanpun dan dimanapun.</p>
                <p>E-learning adalah pembelajaran baik secara formal atau informal yang dilakukan melalui media
                    elektronik seperti internet, CD-ROM, video tape, DVD, TV, handphone, PDA, dll.</p>
            </div>
            <div class="coursesimg">
                <img src="assets/home/images/bggg.jpg">
            </div>
        </section>
    </div>

    <!--untuk struktur-->
    <section id="struktur">
        <div class="tengah2">
            <h1>STRUKTUR ORGANISASI</h1>
            <p>Berikut adalah Struktur organisasi yang berada di tempat pembelajaran online kami:</p>
            <div class="struktur">
                <img src="assets/home/images/STRUKTUR.png">
                <div id="nama">
                </div>
            </div>
            <div class="struktur-list">
                <div class="kartu-struktur">
                    <p><b>Pimpinan Lembaga</b></p>
                    <img src="assets/home/images/Suhe.jpeg" width="300" height="200" frameborder="0" style="border:0"
                        allowfullscreen></iframe>
                    <p><b>Suheriandi.S.PD</b></p>
                </div>
                <div class="kartu-struktur">
                    <p><b>Sekertaris</b></p>
                    <img src="assets/home/images/syifa.jpeg" width="300" height="200" frameborder="0" style="border:0"
                        allowfullscreen></iframe>
                    <p><b>Syifa Aulia</b></p>
                </div>
            </div>
        </div>
    </section>

    <!-- untuk tutors -->
    <section id="tutors">
        <div class="tengah">
            <div class="kolom">
                <p class="deskripsi"></p>
                <h2>PENGAJAR</h2>
                <p>Belajar Bersama Kaka-Kaka Yang Bepengalaman</p>
            </div>

            <div class="tutor-list">
                <div class="kartu-tutor">
                    <img src="assets/home/images/waskito.jfif" />
                    <p>Waskito Fajar Utomo</p>
                </div>
                <div class="kartu-tutor">
                    <img src="assets/home/images/rizky2.jpeg" />
                    <p>Rizky Firmansyah</p>
                </div>
                <div class="kartu-tutor">
                    <img src="assets/home/images/afduh.jfif" />
                    <p>Afduh Hakim</p>
                </div>
            </div>
        </div>
    </section>

    <!--untuk paket-->
    <section id="paket">
        <div class="kelas">
            <h2>KELAS DAN PAKET</h2>
            <p>Di pembelajaran online kami menyediakan kelas dan paket yang dapat dipilih oleh pelajar lama atau pelajar
                yang baru ingin bergabung<br>
                Berikut ini adalah rincian kelas yang sudah kami sediakan :<br>
                1.07.00-09.00<br>
                2.13.00-15.00<br>
                3.19.00-21.00<br>
                Berikut ini adalah paket Yang kami sediakan :<br>
                1.Paket pagi dan siang untuk 3 hari selama seminggu Belajar,(harga Rp,250.000;)<br>
                2.Paket pagi dan siang untuk 5 hari selama seminggu Belajar,(harga Rp,400.000;)<br>
                3.Paket malam untuk 3 hari selama seminggu Belajar,(harga Rp,325.000;)<br>
                4.Paket malam untuk 5 hari selama seminggu Belajar,(harga Rp,475.000;)<br>
                Sekian Rincian Kelas dan paket yang ada di lembaga pembelajaran online kami, pelajar bebas menentukan
                jamnya seideal mungkin agar tidak menggangu kegiatan lainnya
            </p>
        </div>
    </section>

    <!--untuk penghargaan-->
    <section id="penghargaan">
        <div class="tengah3">
            <div class="kolom2">
                <h2>PENGHARGAAN</h2>
            </div>
            <div class="penghargaan-list">
                <div class="kartu-penghargaan">
                    <p>Departemen Pendidikan dan Kebudayaan</p>
                    <img src="assets/home/images/terbaik.webp" width="500" height="300" frameborder="0"
                        style="border: 20px;" allowfullscreen></iframe>
                </div>
            </div>
            <div class="penghargaan-list">
                <div class="kartu-penghargaan">
                    <p>Universitas Negeri Yogyakarta</p>
                    <img src="assets/home/images/uny.jpg" width="500" height="300" frameborder="0" style="border:0"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- untuk partners -->
    <section id="partners">
        <div class="tengah">
            <div class="kolom">
                <p class="deskripsi"></p>
                <h2>PARTNER</h2>
                <p>Universitas Yang Bekerja Sama Dengan Kami .</p>
            </div>

            <div class="partner-list">
                <div class="kartu-partner">
                    <img src="assets/home/images/20220620_193317.jpg" />
                </div>
                <div class="kartu-partner">
                    <img src="assets/home/images/nusa mandiri.png" />
                </div>
            </div>
        </div>
    </section>
    </div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>Belajar Online</h3>
                    <p>Tentang Kami</p>
                    <p>Karir</p>
                    <p>Partner</p>
                    <p>Blog</p>
                </div>
                <div class="footer-section">
                    <h3>Layanan</h3>
                    <p>Kelas</p>
                    <p>Beasiswa</p>
                    <p>Webinar</p>
                    <p>Paket</p>
                </div>
                <div class="footer-section">
                    <h3>Alamat</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.033264479066!2d106.91007131391675!3d-6.259348695469372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f2d355143543%3A0x717c66443776a2c1!2sJl.%20Cempaka%20Bulak%2C%20RT.007%2FRW.004%2C%20Jaticempaka%2C%20Kec.%20Pd.%20Gede%2C%20Kota%20Bks%2C%20Jawa%20Barat%2013620!5e0!3m2!1sen!2sid!4v1656400492688!5m2!1sen!2sid"
                        width="150" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <p>Jl.Cempaka bulak no. 45 Jatiwaringin Pondok Gede
                        Kota Bekasi 17411
                    </p>
                </div>
                <div class="footer-section">
                    <h3>Kontak kami</h3>
                    <p> WhatsApp : <a href="https://wa.me/628990332966">08990332966</a></p>
                    <p> Instagram : <a href="https://www.instagram.com/waskitofajar002">@waskitofajar002</a></p>
                    <p>senin-Jumat , 07.00 WIB - 16.00 WIB</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2022. <b>Belajar Online.</b> All Rights Reserved.
        </div>
    </div>
</body>

</html>