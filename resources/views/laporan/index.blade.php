<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Rekap Laporan Penjualan</title>
</head>
<body>
    <h1>Rekap Laporan Penjualan</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Statistik</th>
            <th>Jumlah</th>
        </tr>
        <tr>
            <td>Total Transaksi</td>
            <td>{{ $statistik['total_transaksi'] }}</td>
        </tr>
        <tr>
            <td>Total Pendapatan</td>
            <td>Rp {{ number_format($statistik['total_pendapatan'], 0, ',', '.') }}</td>
        </tr>
        <tr>
            <td>Produk Terjual</td>
            <td>{{ $statistik['produk_terjual'] }}</td>
        </tr>
        <tr>
            <td>Produk Terlaris</td>
            <td>{{ $statistik['produk_terlaris'] }}</td>
        </tr>
    </table>
</body>
</html>