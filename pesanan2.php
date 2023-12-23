<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>pesanan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Pesanan</h1>
        <form method="post" action="proses_pesanan.php">
            <div class="first-row">
                <div class="owner">
                    <h3>Nama</h3>
                    <div class="input-field">
                        <input type="text" name="nama">
                    </div>
                </div>
            </div>
            <div class="second-row">
                <div class="card-number">
                    <h3>Alamat saat ini</h3>
                    <div class="input-field">
                        <input type="text" name="alamat_saat_ini">
                    </div>
                </div>
            </div>
            <div class="second-row">
                <div class="card-number">
                    <h3>Alamat tujuan</h3>
                    <div class="input-field">
                        <input type="text" name="alamat_tujuan">
                    </div>
                </div>
            </div>
            <div class="third-row">
                <h3>Nomor ATM</h3>
                <div class="input-field">
                    <input type="text" name="nomor_atm">
                </div>
                <div class="cards">
                    <label>
                        <input type="radio" name="metode_pembayaran" value="paypal">
                        <img src="pp.png" width="100px">
                    </label>
                    <label>
                        <input type="radio" name="metode_pembayaran" value="visa">
                        <img src="vi.png" width="100px">
                    </label>
                    <label>
                        <input type="radio" name="metode_pembayaran" value="mastercard">
                        <img src="mc.png" width="100px">
                    </label>
                </div>
            </div> 
            <input type="submit" value="Konfirmasi">
        </form>
    </div>
</body>
</html>
