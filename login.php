<?php
session_start();

// Cek apakah pengguna sudah login, jika belum maka tampilkan halaman login
if(!isset($_SESSION['username'])) {
    // Pengecekan jika form login disubmit
    if(isset($_POST['login'])) {
        // Simpan username dan password dari form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Periksa apakah username dan password kosong
        if(empty($username) || empty($password)) {
            $error = "Username dan Password harus diisi.";
        } else {
            // Verifikasi username dan password (di sini Anda akan memiliki logika verifikasi)
            // Misalnya, jika username dan password benar, Anda akan membuat sesi dan mengarahkan pengguna ke halaman utama

            // Contoh verifikasi sederhana (tidak aman, hanya untuk tujuan demonstrasi)
            if($username === 'user' && $password === 'user123') {
                // Buat sesi login
                $_SESSION['username'] = $username;
                
                // Redirect ke halaman listing_produk
                header("Location: listing_produk.php");
                exit;
            } else {
                // Jika username atau password tidak cocok, tampilkan pesan error
                $error = "Username atau Password salah.";
            }
        }
    }
} else {
    // Jika pengguna sudah login, arahkan langsung ke halaman listing_produk
    header("Location: listing_produk.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Pricing</a>
                    </li>
                </ul>  
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="image/image 1.png" alt="Gambar Login">
            </div>
            <div class="col-md-8">
                <div class="form-container">
                    <h2>Login</h2>
                    <?php if(isset($error)) { ?>
                        <p class="error"><?php echo $error; ?></p>
                    <?php } ?>
                    <form action="" method="post">
                            <label for="username">Username:</label><br>
                            <input type="text" id="username" name="username" required><br>
                            <label for="password">Password:</label><br>
                            <input type="password" id="password" name="password" required><br><br>
                            <input type="submit" name="login" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

