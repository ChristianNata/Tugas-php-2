<?php

if (isset($_POST['hitung'])) {

    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $total = $harga * $jumlah;

    if ($total >= 500000) {
        $diskon = 20;
    } elseif ($total >= 250000) {
        $diskon = 10;
    } else {
        $diskon = 0;
    }

    $potongan = $total * $diskon / 100;
    $bayar = $total - $potongan;

    echo "<center>";
    echo "<h2>Hasil Pembayaran</h2>";

    echo "<table border='1' cellpadding='10'>";
    
    echo "<tr>";
    echo "<th>Data</th>";
    echo "<th>Hasil</th>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Nama Barang</td>";
    echo "<td>$nama_barang</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Harga Satuan</td>";
    echo "<td>Rp " . number_format($harga, 0, ',', '.') . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Jumlah Pembelian</td>";
    echo "<td>$jumlah</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Total Harga</td>";
    echo "<td>Rp " . number_format($total, 0, ',', '.') . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Diskon</td>";
    echo "<td>$diskon%</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Total Pembayaran</td>";
    echo "<td>Rp " . number_format($bayar, 0, ',', '.') . "</td>";
    echo "</tr>";

    echo "</table>";

    echo "<br>";

    echo "<button onclick='history.back()'>Kembali</button>";

    echo "</center>";
}

?>