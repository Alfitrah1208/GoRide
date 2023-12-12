<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <form action="process_order.php" method="post">
    <title>Pesanan Gojek</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fFf8dc;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #6495ED;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            color: #FF8C00;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin: 10px 0;
            font-weight: bold;
            color: #333;
        }

        select, input {
            padding: 15px;
            margin: 8px 0;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            background-color: #6495ED;
            color: orange;
            padding: 25px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
        }

        button:hover {
            background-color: #E9967A;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Pesanan GoRide</h1>
        <form action="#">
            <label for="service">Layanan:</label>
            <select name="service" id="service" required>
                <option value="goride">GoRide</option>
                <option value="gofood">GoFood</option>
                <option value="gosend">GoSend</option>
                <option value="goTravel">GoTravel</option>
            </select>

            <label for="destination">Tujuan:</label>
            <input type="text" name="destination" id="destination" required>

            <label for="payment_method">Metode Pembayaran:</label>
            <select name="payment_method" id="payment_method" required>
                <option value="gopay">GoPay</option>
                <option value="Cash">Cash</option>
                <option value="credit_card">Kartu Kredit</option>
            </select>

            <button type="submit">Pesan</button>
        </form>
    </div>

</body>
</html>
