<?php
require_once('koneksi.php');

$title = 'Login';

if (isset($_SESSION['nip'])) {
    header("Location: index_admin.php");
}

session_start();
if (isset($_POST['submit'])) {
    $nip = $_POST['nip'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE nip='$nip' AND password='$password'";
    $result = mysqli_query($kon, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nip'] = $row['nip'];
        header("Location: index_admin.php");
    } else {
        echo "<script>alert('NIP atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>

<?php require_once('koneksi.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <!-- <link rel="stylesheet" href="/asset/css/stylelogin.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="asset/css/stylelogin.css">
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Login Form</span></div>
            <form action="" method="POST">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" id="nip" name="nip" placeholder="NIP" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="row button">
                    <input type="submit" name="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>