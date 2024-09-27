<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $npm = $_POST['npm'];
    $nama = strtoupper($_POST['nama']);
    $alamat = strtoupper($_POST['alamat']);
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $hobi = implode(", ", $_POST['hobi']);

    if (empty($npm)) {
        echo "NPM wajib diisi!";

    }
    
    if (empty($nama)) {
        echo "Nama wajib diisi!";
    }
}
?>

<DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hasil Input</title>
        <link rel="stylesheet" href="form.css">
    </head>

    <body>
        <div class="container_hasil">
            <h2>HASIL INPUT FORM BIODATA</h2>
            <table>
                <tr>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Hobi</th>
                </tr>

                <tr>
                    <td><?php echo htmlspecialchars($npm); ?></td>
                    <td><?php echo htmlspecialchars($nama); ?></td>
                    <td><?php echo htmlspecialchars($alamat); ?></td>
                    <td><?php echo htmlspecialchars($tempat_lahir); ?></td>
                    <td><?php echo htmlspecialchars($tanggal_lahir); ?></td>
                    <td><?php echo htmlspecialchars($jenis_kelamin); ?></td>
                    <td><?php echo htmlspecialchars($hobi); ?></td>
                </tr>
            </table>

            <a href="form.php">Kembali ke Form</a>
        </div>
    </body>
</html>