<?php
include "config1.php";


$query = mysqli_query($conn, "SELECT
pesanan.nama as nama,
pesanan.jumlah as jumlah,
SUM(produksi.potong_terselesaikan) as selesai,
(pesanan.jumlah-SUM(produksi.potong_terselesaikan)) as kurang
FROM (`produksi` JOIN pesanan ON produksi.id_pesanan=pesanan.id_pesanan)
GROUP BY produksi.id_pesanan");
$no_urut = 0;

?>
<html>

<head>
    <title>Rekap Pesanan</title>
    <link href="styleprint.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <header style="text-align: center;"><b>LAPORAN PESANAN</b></header>
    <br>
    <div class="col-lg-7">
        <div class="table-responsive-sm">
            <table border="1" width="90%" style="border-collapse:collapse;" align="center">
                <tr>
                    <th rowspan="1">No</th>
                    <th>Nama</th>
                    <th>Jumlah Pesanan</th>
                    <th>Pesanan Selesai</th>
                    <th>Pesanan Kurang</th>




                </tr>
                <?php while ($hasil = mysqli_fetch_array($query)) {
                    $no_urut++; ?>

                    <tr>
                        <td width="5%" align="center" id="column_padding"><?php echo $no_urut ?></td>
                        <td width="10%" align="center" id="column_padding"><?php echo $hasil['nama']; ?></td>
                        <td width="10%" align="center" id="column_padding"><?php echo $hasil['jumlah']; ?></td>
                        <td width="10%" align="center" id="column_padding"><?php echo $hasil['selesai']; ?></td>
                        <td width="10%" align="center" id="column_padding"><?php echo $hasil['kurang']; ?></td>

                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <script>
        window.load = print_d();

        function print_d() {
            window.print();
        }
    </script>
</body>

</html>