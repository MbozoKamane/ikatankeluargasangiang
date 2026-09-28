<?php
// Website Ikatan Keluarga Sangiang Jabodetabek
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikatan Keluarga Sangiang Jabodetabek</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<header class="header" id="header">
    <div class="container nav-wrap">
        <a href="#beranda" class="brand">
            <div class="brand-logo">IKS</div>
            <div class="brand-text">
                <strong>IKATAN KELUARGA<br>SANGIANG</strong>
                <span>JABODETABEK</span>
            </div>
        </a>

        <button class="menu-toggle" id="menuToggle" aria-label="Buka menu">☰</button>

        <nav class="nav" id="nav">
            <a class="active" href="#beranda">Beranda</a>
            <a href="#profil">Profil</a>
            <a href="#sejarah">Sejarah</a>
            <a href="#pengurus">Pengurus</a>
            <a href="#kegiatan">Kegiatan</a>
            <a href="#galeri">Galeri</a>
            <a href="#agenda">Agenda</a>
            <a href="#kontak">Kontak</a>
        </nav>

        <a class="admin-btn" href="admin/login.php">♙ &nbsp;Login Admin</a>
    </div>
</header>

<main>
<section class="hero" id="beranda">
    <img src="assets/hero-sangiang.png" alt="Pemandangan Sangiang" class="hero-image">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <p class="eyebrow">SELAMAT DATANG DI WEBSITE RESMI</p>
        <h1>IKATAN KELUARGA<br><span>SANGIANG</span></h1>
        <p class="hero-location">JABODETABEK</p>
        <p class="hero-quote">“Bersatu dalam Silaturahmi,<br>Menjaga Kebersamaan”</p>
        <a href="#profil" class="btn btn-gold">Tentang Kami <span>→</span></a>
    </div>
</section>

<section class="about section" id="profil">
    <div class="container about-grid">
        <div class="about-photo">
            <img src="assets/sangiang-1.jpg" alt="Sangiang">
            <div class="photo-caption">⌖ &nbsp; Sangiang, Pulau Penuh Kenangan</div>
        </div>
        <div class="about-content">
            <p class="section-label">TENTANG KAMI</p>
            <h2>Ikatan Keluarga Sangiang Jabodetabek</h2>
            <p>
                Ikatan Keluarga Sangiang Jabodetabek merupakan wadah silaturahmi
                dan kebersamaan masyarakat Sangiang yang berdomisili di wilayah
                Jabodetabek. Organisasi ini hadir untuk mempererat persaudaraan,
                menjaga nilai-nilai budaya, serta berkontribusi dalam berbagai
                kegiatan sosial dan kemasyarakatan.
            </p>
            <a href="#sejarah" class="btn btn-blue">Selengkapnya <span>→</span></a>
        </div>
        <div class="vision-card">
            <div class="vision-item">
                <div class="round-icon">◉</div>
                <div><h3>Visi</h3><p>Menjadi keluarga besar yang solid, bermanfaat dan berdaya saing.</p></div>
            </div>
            <div class="vision-item">
                <div class="round-icon">◎</div>
                <div>
                    <h3>Misi</h3>
                    <ol>
                        <li>Mempererat silaturahmi antar anggota.</li>
                        <li>Melestarikan budaya dan tradisi Sangiang.</li>
                        <li>Berkontribusi dalam kegiatan sosial dan kemasyarakatan.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="history section" id="sejarah">
    <div class="container narrow">
        <p class="section-label center">SEJARAH</p>
        <h2 class="center">Menjaga Silaturahmi, Merawat Identitas</h2>
        <p class="center muted">
            Halaman ini dapat diisi dengan sejarah terbentuknya organisasi,
            perjalanan kepengurusan, serta nilai-nilai yang menjadi dasar
            kebersamaan keluarga Sangiang di Jabodetabek.
        </p>
    </div>
</section>

<section class="news section" id="kegiatan">
    <div class="container">
        <div class="section-heading">
            <div>
                <p class="section-label">BERITA & KEGIATAN TERBARU</p>
                <h2>Informasi Terkini</h2>
            </div>
            <a href="#" class="see-all">Lihat Semua →</a>
        </div>

        <div class="news-grid">
            <article class="news-card">
                <img src="assets/kegiatan-1.jpg" alt="Halal Bihalal">
                <div class="news-body">
                    <small>▣ &nbsp; 12 Mei 2025</small>
                    <h3>Halal Bihalal Keluarga Sangiang Jabodetabek</h3>
                    <p>Kegiatan halal bihalal sebagai ajang silaturahmi dan mempererat persaudaraan antar anggota.</p>
                    <a href="#">Selengkapnya →</a>
                </div>
            </article>

            <article class="news-card">
                <img src="assets/kegiatan-2.jpg" alt="Gathering">
                <div class="news-body">
                    <small>▣ &nbsp; 20 April 2025</small>
                    <h3>Family Gathering</h3>
                    <p>Kegiatan kebersamaan keluarga besar Sangiang Jabodetabek dalam suasana penuh kekeluargaan.</p>
                    <a href="#">Selengkapnya →</a>
                </div>
            </article>

            <article class="news-card">
                <img src="assets/kegiatan-3.jpg" alt="Rapat Pengurus">
                <div class="news-body">
                    <small>▣ &nbsp; 15 Maret 2025</small>
                    <h3>Rapat Pengurus dan Evaluasi Program</h3>
                    <p>Rapat pengurus untuk membahas program kerja dan evaluasi kegiatan yang telah berjalan.</p>
                    <a href="#">Selengkapnya →</a>
                </div>
            </article>

            <article class="news-card">
                <img src="assets/kegiatan-4.jpg" alt="Bakti Sosial">
                <div class="news-body">
                    <small>▣ &nbsp; 10 Februari 2025</small>
                    <h3>Bakti Sosial dan Santunan</h3>
                    <p>Penyaluran bantuan kepada masyarakat yang membutuhkan sebagai bentuk kepedulian sosial.</p>
                    <a href="#">Selengkapnya →</a>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="management section" id="pengurus">
    <div class="container">
        <p class="section-label center">KEPENGURUSAN</p>
        <h2 class="center">Struktur Organisasi</h2>
        <div class="org-chart">
            <div class="person-card main"><span>KETUA</span><strong>Nama Ketua</strong></div>
            <div class="line"></div>
            <div class="org-row">
                <div class="person-card"><span>SEKRETARIS</span><strong>Nama Sekretaris</strong></div>
                <div class="person-card"><span>BENDAHARA</span><strong>Nama Bendahara</strong></div>
                <div class="person-card"><span>BIDANG</span><strong>Koordinator Bidang</strong></div>
            </div>
        </div>
    </div>
</section>

<section class="gallery section" id="galeri">
    <div class="container">
        <div class="section-heading">
            <div><p class="section-label">GALERI</p><h2>Dokumentasi Kegiatan</h2></div>
            <a href="#" class="see-all">Lihat Semua →</a>
        </div>
        <div class="gallery-grid">
            <img src="assets/kegiatan-1.jpg" alt="Dokumentasi 1">
            <img src="assets/sangiang-2.jpg" alt="Dokumentasi 2">
            <img src="assets/kegiatan-3.jpg" alt="Dokumentasi 3">
            <img src="assets/sangiang-3.jpg" alt="Dokumentasi 4">
            <img src="assets/kegiatan-2.jpg" alt="Dokumentasi 5">
            <img src="assets/sangiang-4.jpg" alt="Dokumentasi 6">
        </div>
    </div>
</section>

<section class="agenda section" id="agenda">
    <div class="container">
        <p class="section-label center">AGENDA</p>
        <h2 class="center">Agenda Mendatang</h2>
        <div class="agenda-list">
            <div class="agenda-item"><div class="date"><b>15</b><span>OKT</span></div><div><h3>Silaturahmi Keluarga Besar Sangiang</h3><p>Jakarta • 09.00 WIB</p></div></div>
            <div class="agenda-item"><div class="date"><b>08</b><span>NOV</span></div><div><h3>Kegiatan Sosial dan Kebersamaan</h3><p>Tangerang • 08.00 WIB</p></div></div>
            <div class="agenda-item"><div class="date"><b>21</b><span>DES</span></div><div><h3>Musyawarah dan Evaluasi Tahunan</h3><p>Jabodetabek • 10.00 WIB</p></div></div>
        </div>
    </div>
</section>
</main>

<footer class="footer" id="kontak">
    <div class="container footer-grid">
        <div class="footer-brand">
            <div class="brand-logo">IKS</div>
            <div class="brand-text"><strong>IKATAN KELUARGA<br>SANGIANG</strong><span>JABODETABEK</span></div>
        </div>
        <div class="contact">
            <p>⌖ &nbsp; Jabodetabek, Indonesia</p>
            <p>☎ &nbsp; +62 812 3456 7890</p>
            <p>✉ &nbsp; iks.jabodetabek@gmail.com</p>
        </div>
        <div class="social">
            <p>Ikuti Kami</p>
            <div><a href="#">f</a><a href="#">◎</a><a href="#">▶</a><a href="#">◉</a></div>
        </div>
        <div class="slogan">“Sangiang di Hati,<br>Kebersamaan Abadi”</div>
    </div>
    <div class="copyright">© 2026 Ikatan Keluarga Sangiang Jabodetabek. All Rights Reserved.</div>
</footer>

<script src="assets/script.js"></script>
</body>
</html>
