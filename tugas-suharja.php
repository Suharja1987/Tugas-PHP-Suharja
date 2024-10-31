<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjumlahan Dua Bilangan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #00FFFF; 
        }
        .container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #FFFACD;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        input {
            width: calc(100% - 22px); /* Mengatur lebar agar sesuai dengan padding dan border */
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
            border: 1px solid #ccc; /* Menambahkan border untuk input */
            border-radius: 5px; /* Sudut bulat untuk input */
        }
        button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
            background-color: #4CAF50; /* Warna latar belakang tombol */
            color: white; /* Warna teks tombol */
            border: none; /* Menghilangkan border tombol */
            border-radius: 5px; /* Sudut bulat untuk tombol */
            cursor: pointer; /* Menunjukkan kursor pointer saat hover */
        }
        button:hover {
            background-color: #45a049; /* Warna tombol saat hover */
        }
        .result {
            font-weight: bold;
            font-size: 1.2em;
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><marquee bgcolor="yellow">Penjumlahan Dua Bilangan</marquee></h2>
        <form action="" method="post">
            <input type="number" name="bilangan1" placeholder="Masukkan bilangan pertama" required>
            <input type="number" name="bilangan2" placeholder="Masukkan bilangan kedua" required>
            <button type="submit" name="submit">Hitung</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $bilangan1 = $_POST['bilangan1'];
            $bilangan2 = $_POST['bilangan2'];
            $hasil = $bilangan1 + $bilangan2;
            echo "<p class='result'>Hasil: $hasil</p>";
        }
        ?>
    </div>
</body>
</html>
