<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Mengatur karakter encoding untuk dokumen -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Mengatur viewport agar halaman responsif di berbagai perangkat -->
    <title>Profile - BIGETRON</title>
    <!-- Judul halaman yang akan ditampilkan pada tab browser -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Menghubungkan font dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <!-- Menghubungkan font "Oswald" dari Google Fonts -->

    <style>
        @import url('https://use.fontawesome.com/releases/v6.4.2/css/all.css');
        /* Mengimpor font ikon dari Font Awesome */

        html {
            scroll-behavior: smooth;
            /* Mengatur agar halaman bergerak mulus saat di-scroll */
        }

        body {
            font-family: "Oswald", sans-serif;
            color: #fff;
            background-color: #1a1a1a;
            margin: 0;
            padding: 0;
            overflow: hidden;
            /* Menghilangkan scrollbar pada body */
            position: relative;
            /* Membuat posisi elemen body relatif, memungkinkan scrolling dengan JavaScript */
        }

        .scrollable-content {
            overflow-y: scroll;
            /* Memungkinkan scrolling vertikal pada elemen ini */
            height: 100vh;
            /* Mengatur tinggi elemen agar bisa di-scroll penuh */
            scrollbar-width: none;
            /* Menghilangkan scrollbar pada Firefox */
            -ms-overflow-style: none;
            /* Menghilangkan scrollbar pada Internet Explorer 10+ */
        }

        .scrollable-content::-webkit-scrollbar {
            width: 0;
            height: 0;
            /* Menghilangkan scrollbar pada Chrome, Safari */
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            /* Mengatur elemen untuk memudar masuk dengan transisi mulus */
        }

        .fade-in.appear {
            opacity: 1;
            transform: translateY(0);
            /* Elemen muncul dengan animasi dari bawah ke posisi aslinya */
        }

        /* Sticky Navbar */
        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            /* Navbar tetap di bagian atas layar saat di-scroll */
        }

        .sticky+.content {
            padding-top: 60px;
            /* Memberikan ruang tambahan di bawah navbar saat menjadi sticky */
        }

        .navbar {
            font-family: Arial, sans-serif;
            background: rgba(51, 51, 51, 0.8);
            /* Warna abu-abu gelap dengan 80% opacity */
            color: #fff;
            padding: 1rem;
            position: sticky;
            /* Navbar akan tetap di bagian atas layar saat di-scroll */
            top: 0;
            width: 100%;
            z-index: 999;
            display: flex;
            justify-content: center;
            align-items: center;
            /* Mengatur konten navbar agar terpusat secara horizontal dan vertikal */
        }

        .navbar ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            /* Mengatur item dalam navbar agar sejajar */
            width: 100%;
            max-width: 1200px;
            /* Membatasi lebar konten navbar */
        }

        .navbar li {
            margin: 0 1rem;
            /* Menambahkan jarak antar item di navbar */
        }

        .navbar .logo {
            margin-right: auto;
            /* Logo akan terdorong ke sisi kiri */
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            /* Mengatur link dalam navbar agar berwarna putih dan tebal */
        }

        .navbar a:hover {
            color: #ff0000;
            /* Link akan berubah warna menjadi merah saat dihover */
        }

        .navbar img {
            height: 60px;
            /* Mengatur tinggi logo pada navbar */
        }

        .hero {
            text-align: center;
            padding: 10px 0;
            background-color: #1a1a1a;
            /* Bagian hero dengan latar belakang hitam */
        }

        .hero h1 {
            font-size: 72px;
            color: #ff0000;
            /* Judul besar berwarna merah */
        }

        .hero p {
            font-size: 34px;
            color: #ddd;
            margin: 50px;
            /* Teks deskripsi dengan warna abu-abu terang */
        }

        .hero p span {
            color: #ff0000;
            /* Menyorot kata atau frasa tertentu dengan warna merah */
        }

        .mission {
            text-align: center;
            padding: 10px 0;
            background-color: #1a1a1a;
            /* Bagian misi dengan latar belakang hitam */
        }

        .mission h2 {
            font-size: 36px;
            color: #ff0000;
            /* Judul bagian misi berwarna merah */
        }

        .mission p {
            font-size: 32px;
            color: #ddd;
            margin: 50px;
            /* Teks bagian misi berwarna abu-abu terang */
        }

        .vision {
            text-align: center;
            padding: 10px 0;
            background-color: #1a1a1a;
            /* Bagian visi dengan latar belakang hitam */
        }

        .vision h2 {
            font-size: 36px;
            color: #ff0000;
            /* Judul bagian visi berwarna merah */
        }

        .vision p {
            font-size: 32px;
            color: #ddd;
            margin: 50px;
            /* Teks bagian visi berwarna abu-abu terang */
        }

        .divisions {
            text-align: center;
            padding: 50px 0;
            /* Bagian untuk divisi/divisi game dengan padding yang cukup besar */
        }

        .divisions h2 {
            font-size: 36px;
            color: #ff0000;
            margin-bottom: 20px;
            /* Judul bagian divisi berwarna merah */
        }

        .games {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            /* Mengatur divisi game agar teratur dalam bentuk grid */
        }

        .game {
            position: relative;
            width: 300px;
            height: 400px;
            /* Mengatur ukuran setiap divisi game */
        }

        .game img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: grayscale(100%);
            /* Gambar divisi dalam grayscale */
        }

        .game img:hover {
            filter: grayscale(0%);
            /* Gambar divisi akan berwarna saat dihover */
        }

        .game h3 {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 24px;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            color: #fff;
            /* Judul divisi dengan latar belakang semi-transparan di bagian bawah gambar */
        }

        .footer {
            background-color: #000;
            color: #fff;
            padding: 20px 0;
            /* Bagian footer dengan latar belakang hitam */
        }

        .footer-sponsors {
            text-align: center;
            padding: 5px 0;
            /* Bagian untuk sponsor dalam footer */
        }

        .footer-sponsors h2 {
            font-size: 28px;
            color: #ff0000;
            margin-bottom: 20px;
            /* Judul bagian sponsor di footer berwarna merah */
        }

        .sponsor-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            /* Mengatur logo sponsor agar terpusat dan rapi */
        }

        .sponsor-logos img {
            width: 150px;
            height: 100px;
            object-fit: contain;
            /* Mengatur ukuran dan menjaga rasio aspek logo sponsor */
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            padding: 5px 0;
            border-top: 1px solid #444;
            /* Bagian bawah footer dengan garis pemisah */
        }

        .footer-logo {
            flex: 1;
            text-align: center;
            padding-top: 28px;
            /* Logo dalam footer */
        }

        .footer-logo img {
            width: 100px;
            /* Mengatur ukuran logo di footer */
        }

        .footer-links {
            flex: 2;
            display: flex;
            justify-content: center;
            gap: 20px;
            /* Tautan dalam footer diatur agar sejajar di tengah */
        }

        .footer-links a {
            color: #fff;
            text-decoration: none;
            /* Tautan dalam footer berwarna putih */
        }

        .footer-links a:hover {
            color: #ff0000;
            /* Tautan berubah warna menjadi merah saat dihover */
        }

        .footer-social {
            flex: 1;
            text-align: center;
            /* Bagian untuk tautan sosial dalam footer */
        }

        .footer-social a {
            color: #fff;
            margin: 0 10px;
            font-size: 24px;
            /* Tautan sosial dengan ikon besar dan berwarna putih */
        }

        .footer-social a:hover {
            color: #ff0000;
            /* Tautan sosial berubah warna menjadi merah saat dihover */
        }

        .footer-copyright {
            flex-basis: 100%;
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #aaa;
            /* Hak cipta dalam footer dengan teks abu-abu terang */
        }
    </style>
</head>

<body>
    <div class="scrollable-content">
        <!-- Konten ini dapat di-scroll -->
        <?php include('navbar.php'); ?>
        <!-- Menyertakan file navbar.php untuk menampilkan navigasi di bagian atas halaman -->

        <main>
            <!-- Bagian utama konten halaman -->
            <section class="hero fade-in">
                <!-- Bagian hero yang mencakup judul besar dan deskripsi -->
                <h1>BIGETRON</h1>
                <!-- Judul utama -->
                <p>Programmed To Win</p>
                <!-- Slogan singkat -->
                <p><span>Bigetron Esports</span> is an Esports organization founded in 28th March 2017. Since then, It
                    has won over
                    150 national titles and 2 world titles (PUBGM world championship (PMCO) in 2019, and PUBG Mobile
                    World League: West in 2020). The organization has evolved into a multinational brand and an industry
                    leader in the region.</p>
                <!-- Deskripsi singkat tentang Bigetron Esports -->
            </section>

            <section class="divisions fade-in">
                <!-- Bagian yang menampilkan divisi-divisi Bigetron -->
                <h2>DIVISIONS</h2>
                <!-- Judul bagian divisi -->
                <div class="games">
                    <!-- Kontainer untuk game-game yang termasuk dalam divisi -->
                    <div class="game fade-in">
                        <!-- Masing-masing divisi game -->
                        <a href="https://bigetron.gg/divisions/pubgm/details">
                            <!-- Tautan ke halaman detail divisi PUBG Mobile -->
                            <img src="asset/image/PUBG.jpg" alt="PUBG Mobile">
                            <!-- Gambar yang mewakili game PUBG Mobile -->
                        </a>
                        <h3>PUBG MOBILE</h3>
                        <!-- Nama game PUBG Mobile -->
                    </div>
                    <div class="game fade-in">
                        <a href="https://bigetron.gg/divisions/mobile-legends/details">
                            <!-- Tautan ke halaman detail divisi Mobile Legends -->
                            <img src="asset/image/ML.jpg" alt="Mobile Legends">
                            <!-- Gambar yang mewakili game Mobile Legends -->
                        </a>
                        <h3>MOBILE LEGENDS</h3>
                        <!-- Nama game Mobile Legends -->
                    </div>
                    <div class="game fade-in">
                        <a href="https://bigetron.gg/divisions/free-fire/details">
                            <!-- Tautan ke halaman detail divisi Free Fire -->
                            <img src="asset/image/FF.jpg" alt="Free Fire">
                            <!-- Gambar yang mewakili game Free Fire -->
                        </a>
                        <h3>FREE FIRE</h3>
                        <!-- Nama game Free Fire -->
                    </div>
                    <div class="game fade-in">
                        <a href="https://bigetron.gg/divisions/valorant/details">
                            <!-- Tautan ke halaman detail divisi Valorant -->
                            <img src="asset/image/VALORANT.jpg" alt="Free Fire">
                            <!-- Gambar yang mewakili game Valorant -->
                        </a>
                        <h3>VALORANT</h3>
                        <!-- Nama game Valorant -->
                    </div>
                    <div class="game fade-in">
                        <a href="https://bigetron.gg/divisions/honor-of-kings/details">
                            <!-- Tautan ke halaman detail divisi Honor of Kings -->
                            <img src="asset/image/HOK.png" alt="Free Fire">
                            <!-- Gambar yang mewakili game Honor of Kings -->
                        </a>
                        <h3>Honor Of Kings</h3>
                        <!-- Nama game Honor of Kings -->
                    </div>
                </div>
            </section>

            <section class="mission fade-in">
                <!-- Bagian yang menampilkan misi Bigetron -->
                <h2>MISSION</h2>
                <!-- Judul bagian misi -->
                <p>Nurture and breed young talents to thrive in the competitive scene of Esports</p>
                <!-- Deskripsi singkat tentang misi Bigetron -->
            </section>

            <section class="vision fade-in">
                <!-- Bagian yang menampilkan visi Bigetron -->
                <h2>VISION</h2>
                <!-- Judul bagian visi -->
                <p>To take Indonesia to the center of the global Esports stage</p>
                <!-- Deskripsi singkat tentang visi Bigetron -->
            </section>
        </main>

        <?php include('footer.php'); ?>
        <!-- Menyertakan file footer.php untuk menampilkan footer di bagian bawah halaman -->
    </div>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                // Mencegah perilaku default dari link agar tidak langsung melompat
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
                // Mengambil elemen yang menjadi target link dan melakukan scroll dengan efek smooth
            });
        });

        const faders = document.querySelectorAll('.fade-in');
        // Mengambil semua elemen dengan kelas 'fade-in' yang akan diberikan efek animasi saat muncul

        const appearOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -100px 0px"
            // Opsi untuk Intersection Observer, menentukan kapan animasi muncul:
            // - threshold: berapa persen elemen terlihat sebelum animasi dijalankan
            // - rootMargin: jarak tambahan dari viewport untuk memulai animasi
        };

        const appearOnScroll = new IntersectionObserver(function (entries, appearOnScroll) {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    return;
                    // Jika elemen belum terlihat (tidak berpotongan), keluar dari fungsi
                } else {
                    entry.target.classList.add('appear');
                    // Jika elemen terlihat, tambahkan kelas 'appear' untuk memulai animasi
                    appearOnScroll.unobserve(entry.target);
                    // Setelah animasi dijalankan, berhenti mengamati elemen tersebut
                }
            });
        }, appearOptions);

        faders.forEach(fader => {
            appearOnScroll.observe(fader);
            // Mengamati setiap elemen dengan kelas 'fade-in' menggunakan Intersection Observer
        });

        window.onscroll = function () {
            myFunction()
            // Menambahkan fungsi yang dipanggil setiap kali halaman di-scroll
        };

        var navbar = document.getElementById("navbar");
        // Mengambil elemen navbar yang ingin dijadikan sticky

        var sticky = navbar.offsetTop;
        // Menyimpan posisi awal navbar dari atas halaman

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
                // Jika posisi scroll lebih dari atau sama dengan posisi navbar, tambahkan kelas 'sticky'
            } else {
                navbar.classList.remove("sticky");
                // Jika posisi scroll kurang dari posisi navbar, hapus kelas 'sticky'
            }
        }
    </script>
    <!-- Menghubungkan file JavaScript untuk menambahkan interaktivitas ke halaman -->
</body>

</html>