<?php
session_start();

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $valid_username = 'Chellin';
    $valid_password = '12345';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>LOGIN</h2>
        <?php if(isset($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST">
            <table>
                <tr>
                    <th>Username: </th>
                    <td><input type="text" name="username" id="username" required value="<?php echo isset($username) ? htmlspecialchars($username) : ''; ?>"></td>
                </tr>

                <tr>
                    <th>Password: </th>
                    <td><input type="password" name="password" id="password" required></td>
                </tr>

                <tr style="text-align:left;">
                    <td colspan="2"><button type="submit" name="submit"><b>Simpan</b></button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>