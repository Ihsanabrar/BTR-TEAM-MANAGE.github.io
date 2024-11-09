<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - BIGETRON</title>
    <link rel="stylesheet" href="asset/dashboard.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">

    <style>
        @import url('https://use.fontawesome.com/releases/v6.4.2/css/all.css');
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Flex:wght@400;700&display=swap');
        /* Mengimpor font dan ikon dari sumber eksternal untuk digunakan di seluruh halaman */

        html {
            scroll-behavior: smooth;
            /* Mengatur perilaku scroll agar lebih halus saat menuju anchor tertentu */
        }

        body {
            font-family: "Oswald", sans-serif;
            color: #fff;
            background-color: #1a1a1a;
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: relative;
            /* Mengatur gaya dasar untuk body, termasuk font, warna, dan menghilangkan scrollbar */
        }

        .scrollable-content {
            overflow-y: scroll;
            height: 100vh;
            scrollbar-width: none;
            -ms-overflow-style: none;
            /* Mengatur konten agar bisa di-scroll secara vertikal dan menyembunyikan scrollbar di berbagai browser */
        }

        .scrollable-content::-webkit-scrollbar {
            width: 0;
            height: 0;
            /* Menyembunyikan scrollbar pada browser berbasis WebKit (Chrome, Safari) */
        }

        .container {
            display: flex;
            width: 100%;
            /* Mengatur container utama sebagai flexbox dengan lebar penuh */
        }

        .sidebar {
            background-color: #333;
            padding: 20px;
            width: 250px;
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Mengatur sidebar dengan lebar tetap, latar belakang gelap, dan tata letak vertikal yang terpusat */
        }

        .logo-container img {
            width: 100px;
            margin-bottom: 20px;
            /* Mengatur ukuran logo dalam sidebar dan memberikan margin bawah */
        }

        h2 {
            color: #ff0000;
            text-align: center;
            margin-bottom: 20px;
            /* Mengatur gaya heading dengan warna merah, teks tengah, dan margin bawah */
        }

        .sidebar-btn {
            background-color: #444;
            color: #fff;
            border: none;
            padding: 10px;
            margin-bottom: 10px;
            width: 100%;
            text-align: center;
            cursor: pointer;
            border-radius: 5px;
            /* Mengatur tombol di sidebar dengan latar belakang gelap, warna teks putih, dan gaya tombol yang interaktif */
        }

        .sidebar-btn:hover {
            background-color: #555;
            /* Mengubah warna latar belakang tombol saat dihover */
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin-top: 20px;
            width: 100%;
            /* Mengatur gaya list di sidebar tanpa bullet points dan margin */
        }

        .sidebar ul li {
            margin-bottom: 10px;
            width: 100%;
            text-align: center;
            /* Mengatur list item di sidebar dengan margin bawah dan teks di tengah */
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
            background-color: #444;
            border-radius: 5px;
            /* Mengatur link di sidebar dengan warna teks putih, latar belakang gelap, dan tampilan sebagai blok */
        }

        .sidebar ul li a:hover {
            background-color: #555;
            /* Mengubah warna latar belakang link saat dihover */
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
            /* Mengatur konten utama dengan padding dan memungkinkannya untuk tumbuh dalam tata letak flexbox */
        }

        .form-container,
        .player-list {
            background-color: #222;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            /* Mengatur wadah form dan daftar pemain dengan latar belakang gelap, padding, dan border radius */
        }

        .form-container h2,
        .player-list h2 {
            color: #ff0000;
            margin-bottom: 20px;
            /* Mengatur heading dalam form dan daftar pemain dengan warna merah dan margin bawah */
        }

        .form-group {
            margin-bottom: 15px;
            /* Mengatur grup form dengan margin bawah */
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            /* Mengatur label form dengan tampilan blok dan margin bawah */
        }

        .form-group textarea {
            font-family: "Roboto Flex", sans-serif;
            /* Mengatur font khusus untuk textarea */
        }

        .form-group input[type="text"],
        .form-group input[type="file"],
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            /* Mengatur elemen input dan textarea dalam form dengan lebar penuh, padding, dan gaya latar belakang gelap */
        }

        button {
            background-color: #1a1a1a;
            border: 2px solid #ff0000;
            color: #ff0000;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-family: "Oswald", sans-serif;
            font-size: 16px;
            /* Mengatur tombol dengan latar belakang gelap, border merah, dan teks merah */
        }

        button:hover {
            background-color: #ff0000;
            border: 2px solid #ff0000;
            color: #1a1a1a;
            /* Mengubah gaya tombol saat dihover menjadi latar belakang merah dengan teks gelap */
        }

        .player-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            /* Mengatur grid kartu pemain dengan kolom yang dapat menyesuaikan dan jarak antar elemen */
        }

        .player-card {
            background-color: #333;
            border-radius: 5px;
            padding: 15px;
            text-align: center;
            /* Mengatur gaya kartu pemain dengan latar belakang gelap, border radius, dan teks di tengah */
        }

        .player-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            object-position: top;
            border-radius: 0;
            margin-bottom: 10px;
            /* Mengatur gambar di kartu pemain dengan ukuran penuh, ketinggian tetap, dan menampilkan bagian atas gambar */
        }

        .player-info h3 {
            margin: 10px 0 5px;
            /* Mengatur heading informasi pemain dengan margin atas dan bawah */
        }

        .player-actions {
            display: flex;
            justify-content: space-between;
            /* Mengatur tindakan pemain seperti edit dan hapus dengan tampilan flex yang tersebar */
        }

        .edit-btn,
        .delete-btn {
            background-color: #444;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
            display: flex;
            align-items: center;
            text-decoration: none;
            /* Mengatur tombol edit dan hapus dengan latar belakang gelap, teks putih, dan gaya tombol yang interaktif */
        }

        .edit-btn:hover {
            background-color: #555;
            /* Mengubah warna latar belakang tombol edit saat dihover */
        }

        .delete-btn:hover {
            background-color: #ff0000;
            /* Mengubah warna latar belakang tombol hapus saat dihover menjadi merah */
        }

        .notification {
            display: none;
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #444;
            padding: 10px 20px;
            border-radius: 5px;
            color: #fff;
            /* Mengatur notifikasi pop-up dengan posisi tetap di sudut kanan atas dan gaya latar belakang gelap */
        }

        .player-details {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            /* Mengatur tampilan detail pemain dengan latar belakang transparan gelap dan tampilan pusat */
        }

        .player-details-content {
            background: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            width: 100%;
            text-align: center;
            /* Mengatur konten detail pemain dengan latar belakang putih dan tata letak pusat */
        }

        .player-details img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            /* Mengatur gambar dalam detail pemain dengan lebar maksimal dan border radius */
        }

        .player-details-close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            cursor: pointer;
            /* Mengatur tombol tutup pada detail pemain dengan posisi tetap di sudut kanan atas */
        }

        .player-details h2 {
            margin: 10px 0;

        }

        .player-details p {
            margin: 10px 0;
            /* Mengatur paragraf dalam detail pemain dengan margin atas dan bawah */
        }
    </style>
</head>

<body>

    <div class="scrollable-content">
        <?php
        include('config.php'); // Menghubungkan file konfigurasi untuk koneksi database
        
        // Proses untuk menambahkan atau mengedit pemain
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name']; // Mengambil nama pemain dari form
            $divisi = $_POST['divisi'];
            $attack_type = $_POST['attack_type']; // Mengambil tipe serangan atau peran pemain dari form
            $description = $_POST['description']; // Mengambil deskripsi pemain dari form
            $image = $_FILES['image']; // Mengambil data gambar yang diunggah
        
            // Jika tombol yang ditekan adalah "Add Player"
            if ($_POST['action'] === 'Add Player') {
                if ($image['error'] === UPLOAD_ERR_OK) {
                    // Menentukan direktori untuk menyimpan gambar
                    $upload_dir = 'asset/image/';
                    $image_path = $upload_dir . basename($image['name']);
                    // Memindahkan gambar yang diunggah ke direktori tujuan
                    if (move_uploaded_file($image['tmp_name'], $image_path)) {
                        // Menyimpan data pemain ke database
                        $sql = "INSERT INTO players (name, divisi, attack_type, description, image) VALUES ('$name', '$divisi', '$attack_type', '$description', '$image_path')";
                        if ($conn->query($sql) === TRUE) {
                            echo "<script>alert('Player ditambahkan');</script>";
                        } else {
                            echo "<script>alert('Error: " . $conn->error . "');</script>";
                        }
                    } else {
                        echo "<script>alert('Gagal mengunggah gambar.');</script>";
                    }
                } else {
                    echo "<script>alert('Tidak ada gambar yang diunggah atau terjadi error.');</script>";
                }
            } elseif ($_POST['action'] === 'Edit Player') { // Jika tombol yang ditekan adalah "Edit Player"
                $player_id = $_POST['player_id']; // Mengambil ID pemain dari form
                if ($image['error'] === UPLOAD_ERR_OK) {
                    $upload_dir = 'asset/image/';
                    $image_path = $upload_dir . basename($image['name']);
                    move_uploaded_file($image['tmp_name'], $image_path);
                    // Mengupdate data pemain di database, termasuk gambar baru jika diunggah
                    $sql = "UPDATE players SET name='$name', divisi='$divisi', attack_type='$attack_type', description='$description', image='$image_path' WHERE id='$player_id'";
                } else {
                    // Mengupdate data pemain tanpa mengubah gambar jika tidak ada gambar baru yang diunggah
                    $sql = "UPDATE players SET name='$name', divisi='$divisi', attack_type='$attack_type', description='$description' WHERE id='$player_id'";
                }
                if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('Player updated successfully.');</script>";
                } else {
                    echo "<script>alert('Error: " . $conn->error . "');</script>";
                }
            }
        }

        // Proses untuk menghapus pemain
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete'])) {
            $player_id = $_GET['delete']; // Mengambil ID pemain yang akan dihapus dari URL
            $sql = "DELETE FROM players WHERE id='$player_id'"; // Menghapus data pemain dari database
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Player deleted successfully.');</script>";
            } else {
                echo "<script>alert('Error: " . $conn->error . "');</script>";
            }
        }


        // Mengambil data semua pemain yang ada di database
        $result = $conn->query("SELECT * FROM players");

        ?>

        <div class="container">
            <div class="sidebar">
                <div class="logo-container">
                    <img src="asset/image/Logo.png" alt="Logo"> <!-- Logo tim -->
                </div>
                <h2>Team Management</h2>
                <button class="sidebar-btn" onclick="showForm()">Add Player</button>
                <!-- Tombol untuk menampilkan form tambah pemain -->
                <button class="sidebar-btn" onclick="showPlayerList()">Player List</button>
                <!-- Tombol untuk menampilkan daftar pemain -->
                <ul>
                    <li><a href="index.php">TEAM</a></li>
                    <li><a href="profile.php">ABOUT</a></li>
                    <li><a href="karir.php">CAREER</a></li>
                    <li><a href="players.php">PLAYERS</a></li>
                </ul>
            </div>

            <div class="main-content">
                <div class="form-container">
                    <h2>Add or Edit Player</h2>
                    <!-- Form untuk menambahkan atau mengedit pemain -->
                    <form method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="player_id" name="player_id">
                        <!-- Input tersembunyi untuk ID pemain yang diedit -->
                        <div class="form-group">
                            <label for="name">Player Name:</label>
                            <input type="text" id="name" name="name" required> <!-- Input untuk nama pemain -->
                        </div>
                        <div class="form-group">
                            <label for="divisi">Divisions:</label>
                            <select id="divisi" name="divisi" required onchange="updateRoles()">
                                <!-- Dropdown untuk memilih peran pemain -->
                                <option value="PUBG">PUBG</option>
                                <option value="Mobile Legends">Mobile Legends</option>
                                <option value="Free Fire">Free Fire</option>
                                <option value="Honor Of Kings">Honor Of Kings</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="attack_type">Role:</label>
                            <select id="attack_type" name="attack_type" required>
                                <!-- Dropdown untuk memilih peran pemain -->
                                <option value="SUPPORT">SUPPORT</option>
                                <option value="FRAGGER">FRAGGER</option>
                                <option value="IGL/SUPPORT">IGL/SUPPORT</option>
                                <option value="JUNGLER">JUNGLER</option>
                                <option value="GOLD_LANER">GOLD LANER</option>
                                <option value="EXPLANER">EXPLANER</option>
                                <option value="ROAMER">ROAMER</option>
                                <option value="MIDLANER">MIDLANER</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea id="description" name="description" rows="4" required></textarea>
                            <!-- Input untuk deskripsi pemain -->
                        </div>
                        <div class="form-group">
                            <label for="image">Player Image:</label>
                            <input type="file" id="image" name="image" accept="image/*">
                            <!-- Input untuk mengunggah gambar pemain -->
                        </div>
                        <button type="submit" name="action" value="Add Player">Add Player</button>
                        <!-- Tombol untuk menambahkan pemain -->
                        <button type="submit" name="action" value="Edit Player" style="display:none;">Edit
                            Player</button> <!-- Tombol untuk mengedit pemain -->
                    </form>
                </div>

                <div class="player-list">
                    <h2>Player List</h2>
                    <div class="player-cards">
                        <!-- Menampilkan daftar pemain dari database -->
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <div class="player-card">
                                <img src="<?php echo $row['image']; ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
                                <!-- Gambar pemain -->
                                <div class="player-info">
                                    <h3><?php echo htmlspecialchars($row['name']); ?></h3> <!-- Nama pemain -->
                                    <p>Divisi: <?php echo htmlspecialchars($row['divisi']); ?></p>
                                    <p>Role: <?php echo htmlspecialchars($row['attack_type']); ?></p> <!-- Peran pemain -->
                                </div>
                                <div class="player-actions">
                                    <!-- Tombol untuk mengedit pemain -->
                                    <button class="edit-btn"
                                        onclick="editPlayer('<?php echo $row['id']; ?>', '<?php echo htmlspecialchars($row['name']); ?>', '<?php echo htmlspecialchars($row['divisi']); ?>', '<?php echo htmlspecialchars($row['attack_type']); ?>', '<?php echo htmlspecialchars($row['description']); ?>')">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <!-- Tombol untuk menghapus pemain -->
                                    <a href="?delete=<?php echo $row['id']; ?>" class="delete-btn"
                                        onclick="return confirm('Anda yakin ingin menghapus Pemain ?')">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="notification" class="notification"></div>

    <script>
        function showNotification(message) {
            var notification = document.getElementById('notification');
            notification.textContent = message;
            notification.style.display = 'block';

            setTimeout(function () {
                notification.style.display = 'none';
            }, 3000);
        }

        function showForm() {
            document.querySelector('.form-container').style.display = 'block';
            document.querySelector('.player-list').style.display = 'none';
            document.querySelector('button[name="action"][value="Add Player"]').style.display = 'inline-block';
            document.querySelector('button[name="action"][value="Edit Player"]').style.display = 'none';
        }

        function showPlayerList() {
            document.querySelector('.form-container').style.display = 'none';
            document.querySelector('.player-list').style.display = 'block';
        }

        function updateRoles() {
            const divisi = document.getElementById("divisi").value;
            const roleSelect = document.getElementById("attack_type");

            // Clear current roles
            roleSelect.innerHTML = '';

            let roles = [];

            // Define roles based on the selected division
            if (divisi === "PUBG") {
                roles = ["SUPPORT", "FRAGGER", "IGL/SUPPORT"];
            } else if (divisi === "Mobile Legends") {
                roles = ["EXPLANER", "ROAMER", "GOLDLANER", "JUNGLER"];
            } else if (divisi === "Free Fire") {
                roles = ["DISBALER", "INITIATOR", "ANCHOR", "RUSHER"];
            } else if (divisi === "Honor Of Kings") {
                roles = ["MID", "FARMLANER", "JUNGLE", "SUPPORT", "CLASHLANE"];
            }

            // Add roles to the role select element
            roles.forEach(role => {
                let option = document.createElement("option");
                option.value = role;
                option.text = role;
                roleSelect.add(option);
            });
        }

        function editPlayer(id, name, divisi, attackType, description) {
            showForm(); // Menampilkan form untuk mengedit pemain
            document.getElementById('player_id').value = id; // Menetapkan ID pemain ke input tersembunyi
            document.getElementById('name').value = name; // Mengisi nama pemain ke dalam input
            document.getElementById('divisi').value = divisi; // Mengisi divisi ke dalam dropdown

            // Panggil updateRoles untuk memperbarui role berdasarkan divisi yang dipilih
            updateRoles();

            document.getElementById('attack_type').value = attackType; // Mengisi role pemain ke dalam dropdown
            document.getElementById('description').value = description; // Mengisi deskripsi pemain ke dalam textarea
            document.querySelector('button[name="action"][value="Add Player"]').style.display = 'none'; // Menyembunyikan tombol Add Player
            document.querySelector('button[name="action"][value="Edit Player"]').style.display = 'inline-block'; // Menampilkan tombol Edit Player
        }

    </script>
    <!-- Menghubungkan file JavaScript untuk notifikasi dan kontrol tampilan -->
</body>

</html>