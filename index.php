<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIGETRON</title>
    <!-- Menyertakan font dari Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <!-- Menyertakan file CSS eksternal -->
    <style>
        @import url('https://use.fontawesome.com/releases/v6.4.2/css/all.css');

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
            /* Menghilangkan scrollbars selama animasi */
        }

        .navbar {
            background: rgba(51, 51, 51, 0.8);
            /* Warna abu-abu gelap dengan 80% opacity */
            color: #fff;
            padding: 1rem;
            position: sticky;
            /* Membuat navbar tetap di atas saat scroll */
            top: 0;
            /* Tetap di posisi atas */
            width: 100%;
            z-index: 999;
            display: flex;
            justify-content: center;
            /* Menyusun konten di tengah secara horizontal */
            align-items: center;
            /* Menyusun item di tengah secara vertikal */
        }

        .navbar ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            /* Menyusun item di tengah secara vertikal */
            width: 100%;
            max-width: 1200px;
            /* Membatasi lebar konten navbar */
        }

        .navbar li {
            margin: 0 1rem;
        }

        .navbar .logo {
            margin-right: auto;
            /* Menyusun logo di sebelah kiri */
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #ff0000;
            /* Warna merah saat hover */
        }

        .navbar img {
            height: 60px;
            /* Menyesuaikan tinggi logo */
        }

        .content {
            padding: 2rem;
            margin-top: 70px;
            /* Menyesuaikan dengan tinggi navbar tetap */
            text-align: center;
        }

        .container-slider {
            position: center;
            width: 800px;
            height: 480px;
            background: #000000;
            /* Background hitam untuk slider */
            box-shadow: 0 30px 50px #dbdbdb;
        }

        .container-slider .slide .item {
            width: 165px;
            height: 250px;
            position: absolute;
            top: 50%;
            transform: translate(0, -50%);
            border-radius: 20px;
            box-shadow: 0 30px 50px #ffee018f;
            background-position: 50% 50%;
            /* Posisi background di tengah */
            background-size: cover;
            display: inline-block;
            transition: 0.5s;
            /* Animasi transisi 0.5 detik */
        }

        .slide .item:nth-child(1),
        .slide .item:nth-child(2) {
            top: 0;
            left: 0;
            transform: translate(0, 0);
            /* Tidak ada pergeseran */
            border-radius: 0;
            /* Tidak ada border radius */
            width: 100%;
            height: 100%;
            -webkit-transform: translate(0, 0);
            -moz-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            -o-transform: translate(0, 0);
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
        }

        .slide .item:nth-child(3) {
            left: 50%;
        }

        .slide .item:nth-child(4) {
            left: calc(50% + 210px);
        }

        .slide .item:nth-child(5) {
            left: calc(50% + 430px);
        }

        .slide .item:nth-child(n + 6) {
            left: calc(50% + 650px);
            opacity: 0;
            /* Sembunyikan item setelah yang kelima */
        }

        .item .content {
            position: absolute;
            text-shadow: 3px 3px 1px rgb(0, 0, 0);
            top: 50%;
            left: 100px;
            width: 300px;
            text-align: left;
            color: #ffffff;
            transform: translate(0, -50%);
            font-family: system-ui;
            display: none;
            /* Sembunyikan konten item secara default */
            -webkit-transform: translate(0, -50%);
            -moz-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
            -o-transform: translate(0, -50%);
        }

        .slide .item:nth-child(2) .content {
            display: block;
            /* Tampilkan konten untuk item kedua */
        }

        .content .name {
            font-size: 40px;
            text-transform: uppercase;
            font-weight: bold;
            opacity: 0;
            animation: animate 1s ease-in-out 1 forwards;
            /* Animasi nama item */
            -webkit-animation: animate 1s ease-in-out 1 forwards;
        }

        .content .des {
            margin-top: 10px;
            margin-bottom: 20px;
            opacity: 0;
            animation: animate 1s ease-in-out 0.3s 1 forwards;
            /* Animasi deskripsi */
            -webkit-animation: animate 1s ease-in-out 0.3s 1 forwards;
        }

        @keyframes animate {
            from {
                opacity: 0;
                transform: translate(0, 100px);
                filter: blur(33px);
                -webkit-transform: translate(0, 100px);
                -moz-transform: translate(0, 100px);
                -ms-transform: translate(0, 100px);
                -o-transform: translate(0, 100px);
                -webkit-filter: blur(33px);
            }

            to {
                opacity: 1;
                transform: translate(0);
                filter: blur(0);
                -webkit-transform: translate(0);
                -moz-transform: translate(0);
                -ms-transform: translate(0);
                -o-transform: translate(0);
                -webkit-filter: blur(0);
            }
        }

        .button {
            width: 100%;
            text-align: center;
            position: absolute;
            bottom: 20px;
        }

        .button button {
            width: 40px;
            height: 35px;
            border-radius: 8px;
            border: 1px solid #fff;
            /* Ubah warna border menjadi putih untuk visibilitas yang lebih baik */
            cursor: pointer;
            margin: 0 5px;
            background: transparent;
            /* Latar belakang transparan */
            color: #fff;
            /* Warna teks putih */
            transition: background 0.3s, transform 0.3s;
            /* Tambahkan transisi untuk latar belakang dan transformasi */
        }

        .button button:hover {
            background: rgba(255, 255, 255, 0.3);
            /* Latar belakang transparan ringan saat hover */
            transform: scale(1.1);
            /* Memperbesar tombol sedikit saat hover */
            color: #000;
            /* Ubah warna teks menjadi hitam saat hover */
        }
    </style>
</head>

<body>
    <?php include('navbar.php'); // Menyertakan file navbar.php untuk menampilkan navigasi ?>
    <div class="container-slider">
        <!-- Bagian slide untuk menampilkan tim-tim BIGETRON -->
        <div class="slide">
            <div class="item" style="background-image: url(asset/image/BTR.png);">
                <div class="content">
                    <div class="name">BTR DELTA</div>
                </div>
            </div>
            <div class="item" style="background-image: url(asset/image/BTR2.jpg);">
                <div class="content">
                    <div class="name">BTR ARCTIC</div>
                </div>
            </div>
            <div class="item" style="background-image: url(asset/image/BTR1.png);">
                <div class="content">
                    <div class="name">BTR BETA</div>
                </div>
            </div>
            <div class="item" style="background-image: url(asset/image/BTR3.png);">
                <div class="content">
                    <div class="name">BTR KNIGHTS</div>
                </div>
            </div>
            <div class="item" style="background-image: url(asset/image/BTR5.jpg);">
                <div class="content">
                    <div class="name">BTR ALPHA</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menyertakan file JavaScript eksternal -->
    <script>
        document.addEventListener('keydown', function (event) {
            const items = document.querySelectorAll('.item'); // Mengambil semua elemen dengan class 'item'
            const slide = document.querySelector('.slide'); // Mengambil elemen dengan class 'slide'

            if (event.key === 'ArrowRight') {
                // Jika tombol panah kanan ditekan, pindahkan item pertama ke akhir slide
                slide.appendChild(items[0]);
            } else if (event.key === 'ArrowLeft') {
                // Jika tombol panah kiri ditekan, pindahkan item terakhir ke awal slide
                slide.prepend(items[items.length - 1]);
            }
        });
    </script>
</body>

</html>