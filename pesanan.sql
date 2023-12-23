
    CREATE TABLE IF NOT EXISTS pesanan (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(100),
        alamat_saat_ini VARCHAR(255),
        alamat_tujuan VARCHAR(255),
        nomor_atm VARCHAR(20),
        metode_pembayaran VARCHAR(20)
    );