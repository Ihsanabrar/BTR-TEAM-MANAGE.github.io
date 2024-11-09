<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players - BIGETRON</title>
    <!-- Menyertakan file CSS eksternal -->
    <link rel="stylesheet" href="asset/style4.css">
    <!-- Menyertakan font dari Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:wght@400;700&display=swap" rel="stylesheet">

    <style>
        @import url('https://use.fontawesome.com/releases/v6.4.2/css/all.css');
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Flex:wght@400;700&display=swap');

        html {
            scroll-behavior: smooth;
            /* Mengatur perilaku scroll agar halus */
        }

        body {
            font-family: "Oswald", sans-serif;
            /* Menggunakan font Oswald untuk teks */
            color: #fff;
            /* Warna teks putih */
            background-color: #1a1a1a;
            /* Warna latar belakang gelap */
            margin: 0;
            padding: 0;
            overflow: hidden;
            /* Menghindari scroll pada body */
            position: relative;
        }

        .scrollable-content {
            overflow-y: scroll;
            /* Scroll vertikal untuk konten */
            height: 100vh;
            /* Tinggi 100% dari viewport */
            scrollbar-width: none;
            /* Menyembunyikan scrollbar pada Firefox */
            -ms-overflow-style: none;
            /* Menyembunyikan scrollbar pada IE */
        }

        .scrollable-content::-webkit-scrollbar {
            width: 0;
            height: 0;
            /* Menyembunyikan scrollbar pada WebKit */
        }

        .scrollable-content h2 {
            margin-top: 50px;
            text-align: center;
            justify-content: center;
            font-size: 30px;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            /* Efek transisi untuk muncul */
        }

        .fade-in.appear {
            opacity: 1;
            transform: translateY(0);
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .sticky+.content {
            padding-top: 60px;
            /* Mengatur padding top untuk konten setelah sticky navbar */
        }

        .navbar {
            font-family: Arial, sans-serif;
            background: rgba(51, 51, 51, 0.8);
            /* Latar belakang navbar dengan transparansi */
            color: #fff;
            /* Warna teks putih */
            padding: 1rem;
            position: sticky;
            top: 0;
            width: 100%;
            z-index: 999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .navbar ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 1200px;
        }

        .navbar li {
            margin: 0 1rem;
        }

        .navbar .logo {
            margin-right: auto;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #ff0000;
            /* Warna teks saat hover */
        }

        .navbar img {
            height: 60px;
            /* Ukuran gambar logo navbar */
        }

        .team-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .team-section {
            margin: 20px 0;
            margin-top: 80px;
            width: 80%;
            text-align: center;
        }

        .team-title {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .team {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* Grid dengan 3 kolom */
            gap: 20px;
            justify-content: center;
        }

        .player-slot {
            background-color: #3d0000;
            /* Warna latar belakang slot pemain */
            border-top-right-radius: 35px;
            border-bottom-right-radius: 35px;
            width: 340px;
            height: 220px;
            display: flex;
            flex-direction: row;
            align-items: center;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            /* Menunjukkan bahwa slot ini bisa diklik */
        }

        .player-slot img {
            height: 100%;
            object-fit: cover;
            object-position: center;
            border-radius: 10px 0 0 10px;
        }

        .player-info {
            background-color: rgba(0, 0, 0, 0.7);
            /* Background semi-transparan */
            width: 100%;
            text-align: left;
            padding: 10px;
            box-sizing: border-box;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 20px;
        }

        .player-name {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .player-attack {
            font-size: 1em;
        }

        /* Popup Styles */
        .player-details {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            /* Background semi-transparan */
            z-index: 1000;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.4s ease, visibility 0.4s ease;
        }

        .player-details.show {
            display: flex;
            opacity: 1;
            visibility: visible;
        }

        .player-details-content {
            background-color: #333;
            border-radius: 12px;
            max-width: 800px;
            width: 90%;
            padding: 20px;
            display: flex;
            gap: 20px;
            align-items: center;
            transform: scale(0.9);
            transition: transform 0.4s ease;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
        }

        .player-details.show .player-details-content {
            transform: scale(1);
        }

        .player-details-content img {
            width: 230px;
            /* Ukuran gambar dalam popup */
            height: 230px;
            border-radius: 10px;
            object-fit: cover;
            object-position: center top;
            /* Menampilkan bagian tengah hingga kepala */
        }

        .player-details-text {
            color: #fff;
            font-family: "Roboto Flex", sans-serif;
            max-width: 500px;
        }

        .player-details-text h2 {
            font-size: 2em;
            color: #ff0000;
            /* Warna judul dalam popup */
            margin-bottom: 10px;
            border-bottom: 2px solid #ff0000;
            padding-bottom: 10px;
        }

        .player-details-text p {
            font-size: 1.1em;
            margin: 10px 0;
        }

        .player-details-close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 50px;
            color: #ff0000;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .player-details-close:hover {
            color: #fff;
            /* Warna ikon close saat hover */
        }

        .footer {
            margin-top: 120px;
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
            /* Warna judul sponsor */
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
            /* Ukuran lebar logo sponsor */
            height: 100px;
            /* Ukuran tinggi logo sponsor */
            object-fit: contain;
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
            /* Ukuran logo footer */
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
            /* Warna tautan footer saat hover */
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
            /* Warna tautan sosial footer saat hover */
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
        <?php include('navbar.php'); // Menyertakan file navbar.php untuk menampilkan navigasi ?>

        <div class="team-container">
            <?php
            include('config.php'); // Menyertakan file konfigurasi untuk koneksi database
            
            // Mengambil daftar tim yang berbeda dari tabel players
            $teams_result = $conn->query("SELECT DISTINCT team FROM players");

            // Jika terjadi error pada query, tampilkan pesan error
            if (!$teams_result) {
                echo "Query error: " . $conn->error;
            }

            // Loop melalui setiap tim
            while ($team_row = $teams_result->fetch_assoc()):
                $team = $team_row['team'];
                ?>
                <div class="team-section">
                    <!-- Bagian ini untuk setiap tim -->
                    <div class="team" id="<?php echo htmlspecialchars($team); ?>">
                        <?php
                        // Mengambil data pemain berdasarkan tim
                        $players_result = $conn->query("SELECT * FROM players WHERE team = '$team'");

                        // Jika terjadi error pada query, tampilkan pesan error
                        if (!$players_result) {
                            echo "Query error: " . $conn->error;
                        }

                        // Loop melalui setiap pemain dalam tim
                        while ($row = $players_result->fetch_assoc()):
                            ?>
                            <div class="player-slot"
                                onclick="showPlayerDetails('<?php echo htmlspecialchars($row['id']); ?>', '<?php echo htmlspecialchars($row['name']); ?>', '<?php echo htmlspecialchars($row['attack_type']); ?>', '<?php echo htmlspecialchars($row['team']); ?>', '<?php echo htmlspecialchars($row['description']); ?>', '<?php echo htmlspecialchars($row['image']); ?>', '<?php echo htmlspecialchars($row['divisi']); ?>')">
                                <!-- Slot untuk pemain -->
                                <img src="<?php echo $row['image']; ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
                                <div class="player-info">
                                    <div class="player-name"><?php echo htmlspecialchars($row['name']); ?></div>
                                    <div class="player-attack"><?php echo htmlspecialchars($row['attack_type']); ?></div>
                                    <div class="player-division"><?php echo htmlspecialchars($row['divisi']); ?></div>
                                    <!-- Menampilkan divisi -->
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <!-- Popup untuk menampilkan detail pemain -->
        <div id="player-details-popup" class="player-details">
            <div class="player-details-content">
                <span class="player-details-close" onclick="closePlayerDetails()">&times;</span> <!-- Tombol close -->
                <img id="popup-image" src="" alt="Player Image"> <!-- Gambar pemain -->
                <div class="player-details-text">
                    <h2 id="popup-name"></h2> <!-- Nama pemain -->
                    <p id="popup-attack-type"></p> <!-- Tipe serangan pemain -->
                    <p id="popup-division"></p> <!-- Divisi pemain -->
                    <p id="popup-description"></p> <!-- Deskripsi pemain -->
                </div>
            </div>
        </div>

        <?php include('footer.php'); // Menyertakan file footer.php ?>
    </div>

    <script>
        // Fungsi untuk menampilkan detail pemain di popup
        function showPlayerDetails(id, name, attackType, team, description, image, divisi) {
            document.getElementById('popup-image').src = image; // Mengatur gambar popup
            document.getElementById('popup-name').textContent = name; // Mengatur nama pemain
            document.getElementById('popup-attack-type').textContent = 'Role: ' + attackType; // Mengatur tipe serangan
            document.getElementById('popup-division').textContent = 'Division: ' + divisi; // Mengatur divisi
            document.getElementById('popup-description').textContent = description; // Mengatur deskripsi
            const popup = document.getElementById('player-details-popup');
            popup.classList.add('show'); // Menambahkan class 'show' untuk menampilkan popup
        }

        // Fungsi untuk menutup popup detail pemain
        function closePlayerDetails() {
            const popup = document.getElementById('player-details-popup');
            popup.classList.remove('show'); // Menghapus class 'show' untuk menyembunyikan popup
        }
    </script>
</body>

</html>