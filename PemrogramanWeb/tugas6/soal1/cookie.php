<?php
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];

    setcookie('user_name', $nama, time() + (30 * 7 * 24 * 60 * 60), "/");
    header("Location: " . $_SERVER['PHP_SELF'] . "?success=1");
    exit();
}

if(isset($_POST['reset'])){
    setcookie('user_name', '', time() - 3600, "/");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cookie</title>
        <link rel="stylesheet" type="text/css" href="cookie.css">
    </head>
    <body>
        <div class="container">
            <h2>Selamat Datang!</h2>

            <?php if(isset($_COOKIE['user_name'])): ?>
                <p>Hallo, <strong><?php echo htmlspecialchars($_COOKIE['user_name']) ?> </strong>! Nama Anda sudah tersimpan.</p>

                <form method="POST">
                    <button type="submit" name="reset"><b>Reset Nama</b></button>
                </form>

            <?php else: ?>
                <form method="POST">
                    <table>
                        <tr>
                            <th>Nama: </th>
                            <td><input type="text" name="nama" id="nama"></td>
                        </tr>

                        <tr style="text-align:left;">
                            <td colspan="2"><button type="submit" name="submit"><b>Simpan</b></button></td>
                        </tr>
                    </table>
                </form>
            
            <?php endif; ?>
        </div>
    </body>
</html>