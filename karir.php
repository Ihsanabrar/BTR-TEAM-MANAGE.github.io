<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career - BIGETRON</title>
    <!-- Menyertakan file CSS eksternal untuk styling -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <style>
        @import url('https://use.fontawesome.com/releases/v6.4.2/css/all.css');

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Oswald", sans-serif;
            color: #fff;
            background-color: #1a1a1a;
            margin: 0;
            padding: 0;
            overflow: hidden;
            /* Menghilangkan scrollbar */
            position: relative;
            /* Memungkinkan scrolling dengan JavaScript */
        }



        .scrollable-content {
            overflow-y: scroll;
            /* Memungkinkan scrolling pada elemen ini */
            height: 100vh;
            /* Mengatur tinggi elemen agar bisa di-scroll */
            scrollbar-width: none;
            /* Firefox */
            -ms-overflow-style: none;
            /* Internet Explorer 10+ */
        }

        .scrollable-content::-webkit-scrollbar {
            /* Webkit (Chrome, Safari) */
            width: 0;
            height: 0;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .fade-in.appear {
            opacity: 1;
            transform: translateY(0);
        }

        /* Sticky Navbar */
        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .sticky+.content {
            padding-top: 60px;
        }

        .navbar {
            font-family: Arial, sans-serif;
            background: rgba(51, 51, 51, 0.8);
            /* Dark gray with 80% opacity */
            color: #fff;
            padding: 1rem;
            position: sticky;
            /* Make the navbar sticky */
            top: 0;
            /* Stick to the top */
            width: 100%;
            z-index: 999;
            display: flex;
            justify-content: center;
            /* Center the content horizontally */
            align-items: center;
            /* Center items vertically */
        }

        .navbar ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            /* Center items vertically */
            width: 100%;
            max-width: 1200px;
            /* Optional: to limit the width of the navbar content */
        }

        .navbar li {
            margin: 0 1rem;
        }

        .navbar .logo {
            margin-right: auto;
            /* Pushes logo to the left */
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #ff0000;
        }

        .navbar img {
            height: 60px;
            /* Adjust the height as needed for a larger logo */
        }

        .hero {
            text-align: center;
            padding: 10px 0;
            background-color: #1a1a1a;
            margin-bottom: 50px;
        }

        .hero h1 {
            font-size: 72px;
            color: #ff0000;
        }

        .hero p {
            font-size: 32px;
            color: #ddd;
            margin: 50px;
        }

        .hero p span {
            color: #ff0000;
        }

        .hero img {
            margin: 20px;
            width: 560px;
            height: 620px;
        }

        .footer {
            background-color: #000;
            color: #fff;
            padding: 20px 0;
        }

        .footer-sponsors {
            text-align: center;
            padding: 5px 0;
        }

        .footer-sponsors h2 {
            font-size: 28px;
            color: #ff0000;
            margin-bottom: 20px;
        }

        .sponsor-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .sponsor-logos img {
            width: 150px;
            /* Atur ukuran lebar yang sama untuk semua logo */
            height: 100px;
            /* Atur ukuran tinggi yang sama untuk semua logo */
            object-fit: contain;
            /* Menjaga rasio aspek gambar */
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            padding: 5px 0;
            border-top: 1px solid #444;
        }

        .footer-logo {
            flex: 1;
            text-align: center;
            padding-top: 28px;
        }

        .footer-logo img {
            width: 100px;
            /* Atur ukuran logo */
        }

        .footer-links {
            flex: 2;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .footer-links a {
            color: #fff;
            text-decoration: none;
        }

        .footer-links a:hover {
            color: #ff0000;
        }

        .footer-social {
            flex: 1;
            text-align: center;
        }

        .footer-social a {
            color: #fff;
            margin: 0 10px;
            font-size: 24px;
        }

        .footer-social a:hover {
            color: #ff0000;
        }

        .footer-copyright {
            flex-basis: 100%;
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #aaa;
        }
    </style>
</head>

<body>
    <div class="scrollable-content">
        <?php include('navbar.php'); ?> <!-- Menyertakan file navbar.php untuk navigasi -->
        <main>
            <!-- Bagian konten utama yang berisi informasi tentang Bigetron Esports -->
            <section class="hero fade-in">
                <h1>BIGETRON</h1>
                <p>Bigetron Esports Mengukir Banyak Kisah di Tahun 20</p>
                <p>Dimulai pada awal tahun 2022, Januari 2022 Divisi PUBG dan MLBB Ladies yang biasa kita kenal
                    Belletron berubah nama menjadi Bigetron ACE dan Bigetron ERA. Perubahan itu nyatanya memberikan efek
                    positif dengan keluarnya Bigetron ERA sebagai Juara WSL Season 4.</p>

                <!-- Menampilkan gambar dengan sumber dari folder asset -->
                <img src="asset/image/ryzen.jpg">

                <p><strong>Februari</strong> ada berita yang cukup mengejutkan dari Ryzen selaku pemain Bigetron RA yang
                    menyatakan rehat
                    untuk beberapa waktu. Hal tersebut banyak mengejutkan para bigetroopers. Lantas akankah Ryzen akan
                    comeback pada 2023? Kita lihat nanti ya!</p>

                <img src="asset/image/seagames.jpg">

                <p><strong>Maret 2022</strong> datang dari Divisi PUBG Bigetron Red Aliens. Ryzen, Luxxy, dan juga
                    Genfos mewakili
                    Indonesia untuk ajang SEA Games di Vietnam. Dan di bulan yang sama dari Divisi Mobile Legends
                    Bigetron Alpha saat season 9 MPL ID, para roster dan CEO Bigetron Esports atau yang akrab disapa
                    Bujed sepakat untuk mencukur botak semua rambutnya dengan harapan membuang sial dan juga sebagai
                    semangat baru untuk seluruh roster Bigetron Alpha.</p>

                <img src="asset/image/dgwib.jpg">

                <p><strong>April 2022</strong>, jadi bulan yang luar biasa bagi Bigetron BETA karena berhasil menjadi
                    juara untuk DGWIB
                    Special Ramadhan, sekaligus bulan yang kurang baik untuk Bigetron ERA karena harus berpisah dengan
                    salah satu EXP Laner terbaik mereka yaitu Valanyr.</p>

                <img src="asset/image/beta.jpg">

                <p><strong>Oktober 2022</strong> penuh dengan pencapaian dan juga sejarah baru, dimulai dari Bigetron
                    BETA yang akhirnya
                    mengukir sejarah menjadi juara MDL untuk pertama kali. Mengawali turnamen dengan kurang baik namun
                    berbuah manis di akhir, Razeboy sebagai pelatih baru dan juga pemain BETA saat itu menjadi saksi
                    kebangkitan Bigetron BETA pada MDL Season 6.


                    Selain itu Bigetron Arctic juga menjuarai turnamen Juara Garuda Valorant Invitational Season 3
                    diikuti divisi Free Fire Ladies Bigetron LUX yang keluar sebagai juara Free Fire Asian Guild Season
                    5.</p>

            </section>
        </main>

        <?php include('footer.php'); ?> <!-- Menyertakan file footer.php untuk footer situs -->
    </div>

    <!-- Menyertakan file JavaScript eksternal -->
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault(); // Mencegah perilaku default dari tautan
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth' // Efek scroll halus
                });
            });
        });

        // Fade-in effect for elements on scroll
        const faders = document.querySelectorAll('.fade-in');
        const appearOptions = {
            threshold: 0.1, // Persentase elemen yang terlihat sebelum trigger
            rootMargin: "0px 0px -100px 0px" // Margin untuk trigger observasi
        };

        const appearOnScroll = new IntersectionObserver(function (entries, appearOnScroll) {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    return; // Jika elemen tidak terlihat, keluar dari fungsi
                } else {
                    entry.target.classList.add('appear'); // Tambah kelas 'appear' untuk efek fade-in
                    appearOnScroll.unobserve(entry.target); // Hentikan observasi elemen
                }
            });
        }, appearOptions);

        faders.forEach(fader => {
            appearOnScroll.observe(fader); // Mulai observasi untuk setiap elemen dengan kelas 'fade-in'
        });

        // Sticky navbar functionality
        window.onscroll = function () {
            myFunction(); // Panggil fungsi myFunction saat scroll
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky"); // Tambah kelas 'sticky' jika scroll melewati posisi navbar
            } else {
                navbar.classList.remove("sticky"); // Hapus kelas 'sticky' jika scroll di atas posisi navbar
            }
        }

    </script>
</body>

</html>