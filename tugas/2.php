<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Persegi Panjang</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        .result {
            margin-top: 20px;
            width: 50%;
            margin: 20px auto;
            border: 1px solid black;
            padding: 10px;
        }

        .result h3 {
            text-align: center;
        }
    </style>
</head>

<body>
    <a href="../index.php">Kembali</a>
    <h2 style="text-align: center;">Hitung Luas, Keliling, dan Diagonal Persegi Panjang</h2>
    <form method="POST">
        <table border="1">
            <tr>
                <td><label for="panjang">Panjang:</label></td>
                <td><input type="number" id="panjang" name="panjang" required min="1"></td>
            </tr>
            <tr>
                <td><label for="lebar">Lebar:</label></td>
                <td><input type="number" id="lebar" name="lebar" required min="1"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit">Hitung</button>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];

        function hitungLuas($panjang, $lebar)
        {
            return $panjang * $lebar;
        }

        function hitungKeliling($panjang, $lebar)
        {
            return 2 * ($panjang + $lebar);
        }

        function hitungDiagonal($panjang, $lebar)
        {
            return sqrt($panjang ** 2 + $lebar ** 2);
        }

        $luas = hitungLuas($panjang, $lebar);
        $keliling = hitungKeliling($panjang, $lebar);
        $diagonal = hitungDiagonal($panjang, $lebar);

        echo "<div class='result'>";
        echo "<h3>Hasil Perhitungan:</h3>";
        echo "<p><strong>Panjang Persegi Panjang:</strong> $panjang</p>";
        echo "<p><strong>Lebar Persegi Panjang:</strong> $lebar</p>";
        echo "<p><strong>Luas Persegi Panjang:</strong> $luas</p>";
        echo "<p><strong>Keliling Persegi Panjang:</strong> $keliling</p>";
        echo "<p><strong>Panjang Diagonal Persegi Panjang:</strong> $diagonal</p>";
        echo "</div>";
    }
    ?>

</body>

</html>