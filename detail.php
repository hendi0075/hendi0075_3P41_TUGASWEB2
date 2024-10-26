<!-- views/detail.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengguna</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Detail Pengguna</h2>
        <table class="table">
            <tr>
                <th>ID</th>
                <td><?= $user['id'] ?></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><?= $user['name'] ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $user['email'] ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?= $user['address'] ?></td>
            </tr>
            <!-- Tambahkan informasi lain sesuai kebutuhan -->
        </table>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>
