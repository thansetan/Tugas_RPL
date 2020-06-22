<?php
include "config1.php";
    include "tanggal.php";



$query = mysqli_query($conn, "SELECT 
bahan_baku.nama as nama,
persediaan.jumlah as jumlah,
(bahan_baku.jumlah*pesanan.jumlah) as akan_digunakan,
(persediaan.jumlah-(bahan_baku.jumlah*pesanan.jumlah)) as sisa
FROM `persediaan` JOIN bahan_baku ON persediaan.id_bahanbaku=bahan_baku.id_bahanbaku
JOIN model ON model.id_bahanbaku=bahan_baku.id_bahanbaku
JOIN pesanan ON pesanan.id_model=model.id_model
GROUP BY bahan_baku.id_bahanbaku");
$no_urut = 0;

$a=date("d/m/Y",time()-604800);
$b=date("d/m/Y");
?>
<html>

<head>
    <title>Cetak Gaji</title>
    <link href="styleprint.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <header style="text-align: center;"><b>LAPORAN BAHAN BAKU PER TANGGAL <?php echo $b ?></b></header>
    <br>
    <div class="col-lg-7">
        <div class="table-responsive-sm">
            <table border="1" width="90%" style="border-collapse:collapse;" align="center">
                <tr>
                    <th rowspan="1">No</th>
                    <th>Nama</th>
                    <th>Persediaan Awal</th>
                    <th>Digunakan</th>
                    <th>Sisa</th>




                </tr>
                <?php while ($hasil = mysqli_fetch_array($query)) {
                    $no_urut++; ?>

                    <tr>
                        <td width="5%" align="center" id="column_padding"><?php echo $no_urut ?></td>
                        <td width="10%" align="center" id="column_padding"><?php echo $hasil['nama']; ?></td>
                        <td width="10%" align="center" id="column_padding"><?php echo $hasil['jumlah']; ?></td>
                        <td width="10%" align="center" id="column_padding"><?php echo $hasil['akan_digunakan']; ?></td>
                        <td width="10%" align="center" id="column_padding"><?php echo $hasil['sisa']; ?></td>

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