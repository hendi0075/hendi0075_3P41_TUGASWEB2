<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Text</title>
    <style>
        .centered {
            text-align: center;
        }
    </style>
</head>
<body>
    <p class="centered"><><><><><><>WELCOME<><><><><><></p>
    <p class="centered">HENDI VAPE STORE INDONESIA</p>
    <title>Background Color</title>
    <style>
        body {
            background-color:khaki ;
        }
        .box {
            background-color: red;
            padding: 30px;
        }
        
    </style>
<h2></h2>

<form method="post" action="">
    <label for="nama">Nama Pembeli:</label><br>
    <input type="text" id="nama" name="nama" required><br><br>

    <label for="nomorKartu">Nomor Kartu Member (jika ada):</label><br>
    <input type="text" id="nomorKartu" name="nomorKartu"><br><br>

    <label for="totalPembelian">Total Pembelian (Rp):</label><br>
    <input type="number" id="totalPembelian" name="totalPembelian" required><br><br>

    <label>Apakah Anda Member?</label><br>
    <input type="radio" id="yes" name="isMember" value="1" required>
    <label for="yes">Ya</label><br>
    <input type="radio" id="no" name="isMember" value="0" required>
    <label for="no">Tidak</label><br><br>

    <input type="submit" name="submit" value="Hitung">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Mengambil input dari form
    $nama = $_POST['nama'];
    $nomorKartu = !empty($_POST['nomorKartu']) ? $_POST['nomorKartu'] : "Tidak ada";
    $totalPembelian = $_POST['totalPembelian'];
    $isMember = $_POST['isMember'];

    // Menentukan diskon awal
    $diskon = 0;

    // Jika pembeli adalah member
    if ($isMember == "1") {
        $diskon = 10; // Diskon member 10%

        // Cek diskon tambahan
        if ($totalPembelian >= 500000) {
            $diskon += 10; // Diskon tambahan 10% jika total pembelian >= 500.000
        } elseif ($totalPembelian >= 300000) {
            $diskon += 5; // Diskon tambahan 5% jika total pembelian >= 300.000
        }
    } else {
        // Jika pembeli bukan member
        if ($totalPembelian >= 500000) {
            $diskon = 10; // Diskon 10% jika total pembelian >= 500.000
        }
    }

    // Menghitung total setelah diskon
    $totalSetelahDiskon = $totalPembelian - ($totalPembelian * ($diskon / 100));

    // Menampilkan hasil setelah submit
    echo "<h3>Detail Pembelian:</h3>";
    echo "<strong>Nama Pembeli:</strong> " . htmlspecialchars($nama) . "<br>";
    echo "<strong>Total Pembelian:</strong> Rp " . number_format($totalPembelian, 2, ',', '.') . "<br>";
    echo "<strong>Nomor Kartu Member:</strong> " . htmlspecialchars($nomorKartu) . "<br>";

    // Menampilkan status member
    if ($isMember == "1") {
        echo "<strong>Status:</strong> Member<br>";
        echo "<strong>Diskon Member:</strong> 10%<br>";
        if ($totalPembelian >= 500000) {
            echo "<strong>Diskon Tambahan:</strong> 10% (karena pembelian >= Rp 500.000)<br>";
        } elseif ($totalPembelian >= 300000) {
            echo "<strong>Diskon Tambahan:</strong> 5% (karena pembelian >= Rp 300.000)<br>";
        }
    } else {
        echo "<strong>Status:</strong> Bukan Member<br>";
        if ($totalPembelian >= 500000) {
            echo "<strong>Diskon Tambahan:</strong> 10% (karena pembelian >= Rp 500.000)<br>";
        } else {
            echo "<strong>Diskon:</strong> Tidak ada diskon tambahan untuk non-member<br>";
        }
    }

    echo "<h3>Total setelah diskon:</h3> Rp " . number_format($totalSetelahDiskon, 2, ',', '.');

}
?>

</body>
</html>