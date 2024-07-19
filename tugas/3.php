<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Kelulusan Mahasiswa</title>
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
            width: 340px;
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
    <h2 style="text-align: center;">Cek Status Kelulusan Mahasiswa</h2>
    <form method="POST">
        <table border="1">
            <tr>
                <td><label for="nim">NIM:</label></td>
                <td><input type="text" id="nim" name="nim" required></td>
            </tr>
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td><input type="text" id="nama" name="nama" required></td>
            </tr>
            <tr>
                <td><label for="q1">Nilai Quiz 1:</label></td>
                <td><input type="number" id="q1" name="q1" required min="0" max="100"></td>
            </tr>
            <tr>
                <td><label for="q2">Nilai Quiz 2:</label></td>
                <td><input type="number" id="q2" name="q2" required min="0" max="100"></td>
            </tr>
            <tr>
                <td><label for="uts">Nilai UTS:</label></td>
                <td><input type="number" id="uts" name="uts" required min="0" max="100"></td>
            </tr>
            <tr>
                <td><label for="uas">Nilai UAS:</label></td>
                <td><input type="number" id="uas" name="uas" required min="0" max="100"></td>
            </tr>
            <tr>
                <td><label for="proyek">Nilai Proyek:</label></td>
                <td><input type="number" id="proyek" name="proyek" required min="0" max="100"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit">Cek Kelulusan</button>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];
        $proyek = $_POST['proyek'];

        function hitungNilaiAkhir($q1, $q2, $uts, $uas, $proyek)
        {
            return ($q1 * 0.1) + ($q2 * 0.1) + ($uts * 0.1) + ($uas * 0.2) + ($proyek * 0.5);
        }

        $nilaiAkhir = hitungNilaiAkhir($q1, $q2, $uts, $uas, $proyek);

        $statusKelulusan = $nilaiAkhir > 60 ? "Lulus" : "Tidak Lulus";

        echo "<div class='result'>";
        echo "<h3>Hasil Kelulusan Mahasiswa</h3>";
        echo "<p><strong>NIM:</strong> $nim</p>";
        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Nilai Quiz 1:</strong> $q1</p>";
        echo "<p><strong>Nilai Quiz 2:</strong> $q2</p>";
        echo "<p><strong>Nilai UTS:</strong> $uts</p>";
        echo "<p><strong>Nilai UAS:</strong> $uas</p>";
        echo "<p><strong>Nilai Proyek:</strong> $proyek</p>";
        echo "<p><strong>Nilai Akhir:</strong> $nilaiAkhir</p>";
        echo "<p><strong>Status Kelulusan:</strong> $statusKelulusan</p>";
        echo "</div>";
    }
    ?>

</body>

</html>