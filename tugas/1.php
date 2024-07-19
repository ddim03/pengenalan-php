<?php
$inventaris = [
    [
        "namaProduk" => "Laptop",
        "jumlahProduk" => 10,
        "hargaPerProduk" => 7500000,
        "statusKetersediaan" => true
    ],
    [
        "namaProduk" => "Smartphone",
        "jumlahProduk" => 25,
        "hargaPerProduk" => 3000000,
        "statusKetersediaan" => true
    ],
    [
        "namaProduk" => "Tablet",
        "jumlahProduk" => 15,
        "hargaPerProduk" => 4500000,
        "statusKetersediaan" => false
    ],
    [
        "namaProduk" => "Printer",
        "jumlahProduk" => 8,
        "hargaPerProduk" => 1500000,
        "statusKetersediaan" => true
    ],
    [
        "namaProduk" => "Monitor",
        "jumlahProduk" => 12,
        "hargaPerProduk" => 2000000,
        "statusKetersediaan" => true
    ]
];

function hitungTotalNilai($jumlah, $harga)
{
    return $jumlah * $harga;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Inventaris</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>

<body>
    <a href="../index.php">Kembali</a>
    <h2>Laporan Inventaris</h2>
    <table>
        <tr>
            <th>Nama Produk</th>
            <th>Jumlah Produk</th>
            <th>Harga per Produk</th>
            <th>Total Nilai Inventaris</th>
            <th>Status Ketersediaan</th>
        </tr>
        <?php foreach ($inventaris as $produk) : ?>
            <tr>
                <td><?php echo htmlspecialchars($produk["namaProduk"]); ?></td>
                <td><?php echo htmlspecialchars($produk["jumlahProduk"]); ?></td>
                <td>Rp <?php echo number_format($produk["hargaPerProduk"], 0, ',', '.'); ?></td>
                <td>Rp <?php echo number_format(hitungTotalNilai($produk["jumlahProduk"], $produk["hargaPerProduk"]), 0, ',', '.'); ?></td>
                <td><?php echo $produk["statusKetersediaan"] ? "Tersedia" : "Tidak Tersedia"; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>