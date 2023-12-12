<?php
include 'proses.php';

// Proses form alamat
$addressMessage = ''; // Inisialisasi pesan alamat

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitAddress'])) {
    $userAddress = trim($_POST['userAddress']);

    // Validasi form
    if (empty($userAddress)) {
        $addressMessage = "Mohon masukkan alamat.";
    } else {
       
        $addressMessage = processAddress($userAddress);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoRide - Alamat</title>
    <style>
      
      body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff; /* Warna latar belakang putih */
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        nav {
            background-color: #0055FA; /* Warna latar belakang biru (#0055FA) */
            color: #fff;
            padding: 0.5em;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        nav li {
            margin: 0 10px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #FFD700; /* Warna kuning pada hover */
        }

        section {
            margin: 20px;
            background-color: #fff; /* Warna latar belakang putih */
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        
    </style>
</head>
<body>
    <header>
    <h1 style="color: #FFD700;">GoRide - Alamat</h1>
    </header>

    <nav style="background-color: #0055FA; padding: 10px;">
    <ul style="list-style-type: none; margin: 0; padding: 0; text-align: center;">
        <li style="display: inline; margin-right: 10px;">
            <a href="index.php" style="color: #fff; text-decoration: none;">Beranda</a>
        </li>
        <li style="display: inline; margin-right: 10px;">
            <a href="security.php" style="color: #fff; text-decoration: none;">Keamanan</a>
        </li>
        <li style="display: inline;">
            <a href="address.php" style="color: #fff; text-decoration: none;">Alamat</a>
        </li>
    </ul>
</nav>

    <section>
    <h2 style="color: #008000;">Alamat</h2>
        <form method="post">
            <label for="userAddress">Masukkan Alamat Baru:</label>
            <input type="text" id="userAddress" name="userAddress">
            <button type="submit" name="submitAddress">Simpan Alamat</button>
        </form>

        <?php
        // Menampilkan pesan jika ada
        if (!empty($addressMessage)) {
            echo "<p class='error'>$addressMessage</p>";
        }
        ?>
    </section>

    <footer>
    <p>&copy; <span style="color: #FFD700;"><?php echo date("Y"); ?></span> GoRide</p>
    </footer>
</body>
</html>
