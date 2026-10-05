<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus 2 - Form Input PHP</title>
    <!-- Menghubungkan External CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Form Input Data Pengguna</h2>

    <form action="" method="POST">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <div class="radio-group">
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan</label>
            </div>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required></textarea>
        </div>

        <div class="form-group">
            <label for="telepon">Nomor Telepon:</label>
            <input type="tel" id="telepon" name="telepon" required>
        </div>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama          = htmlspecialchars($_POST['nama']);
        $email         = htmlspecialchars($_POST['email']);
        $jenis_kelamin = isset($_POST['jenis_kelamin']) ? htmlspecialchars($_POST['jenis_kelamin']) : '';
        $alamat        = htmlspecialchars($_POST['alamat']);
        $telepon       = htmlspecialchars($_POST['telepon']);

        echo '<div class="result">';
        echo '<h3>Data yang Berhasil Dimasukkan:</h3>';
        echo '<p><strong>Nama:</strong> ' . $nama . '</p>';
        echo '<p><strong>Email:</strong> ' . $email . '</p>';
        echo '<p><strong>Jenis Kelamin:</strong> ' . $jenis_kelamin . '</p>';
        echo '<p><strong>Alamat:</strong> ' . nl2br($alamat) . '</p>';
        echo '<p><strong>Nomor Telepon:</strong> ' . $telepon . '</p>';
        echo '</div>';
    }
    ?>
</div>

</body>
</html>