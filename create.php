<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mobil</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Mobil</h1>
        <form action="index.php?action=create" method="POST">
            <label for="nama">Nama Mobil</label>
            <input type="text" id="nama" name="nama" required>

            <label for="merk">Merk Mobil</label>
            <input type="text" id="merk" name="merk" required>

            <label for="tahun">Tahun</label>
            <input type="number" id="tahun" name="tahun" required>

            <label for="harga">Harga</label>
            <input type="number" id="harga" name="harga" required>

            <button type="submit" class="button">Simpan</button>
        </form>
    </div>
</body>
</html>
