<?php
include "config1.php";


$query = mysqli_query($conn, "SELECT
karyawan.nama as nama,
SUM(produksi.potong_terselesaikan) as selesai,
SUM(produksi.potong_terselesaikan*upah_karyawan.upah_perpotong) as gaji
FROM (produksi LEFT JOIN upah_karyawan ON produksi.id_produksi=upah_karyawan.id_produksi)
LEFT JOIN karyawan ON produksi.id_karyawan=karyawan.id_karyawan
GROUP BY karyawan.id_karyawan");
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
    <header style="text-align: center;"><b>LAPORAN GAJI PERIODE <?php echo $a; echo " - "; echo $b; ?></b></header>
    <br>
    <div class="col-lg-7">
        <div class="table-responsive-sm">
            <table border="1" width="90%" style="border-collapse:collapse;" align="center">
                <tr>
                    <th rowspan="1">No</th>
                    <th>Nama</th>
                    <th>Potongan Diselesaikan</th>
                    <th>Total Gaji</th>




                </tr>
                <?php while ($hasil = mysqli_fetch_array($query)) {
                    $no_urut++; ?>

                    <tr>
                        <td width="5%" align="center" id="column_padding"><?php echo $no_urut ?></td>
                        <td width="10%" align="center" id="column_padding"><?php echo $hasil['nama']; ?></td>
                        <td width="10%" align="center" id="column_padding"><?php echo $hasil['selesai']; ?></td>

                        <td width="10%" align="center" id="column_padding"><?php echo $hasil['gaji']; ?></td>

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