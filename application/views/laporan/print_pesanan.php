<?php 
$date=date("d/m/Y");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Pesanan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style>
        .line-title {
            border: 0;
            border-style: inset;
            border-top: 5px solid #000;
        }

        @page {
            size: auto;
            margin: 0mm;
        }
    </style>
</head>

<body>

    <table style="width:100%">
        <tr>
            <td align="center">
                <span style="line-height:1.6;font-weight:bold;">
                    PT GARMENT UWU SEJAHTERA
                </span>
                <br>
                <b>Laporan Status Pesanan Tanggal <?= $date; ?></b>
            </td>
        </tr>
    </table>
    <hr class="line-title">
    <div class="table-responsive">
        <table border="1" width="90%" style="border-collapse:collapse;" align="center">
            <tr>
                <th class="text-center">NO.</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Jumlah Pesanan</th>
                <th class="text-center">Pesanan Selesai</th>
                <th class="text-center">Pesanan Kurang</th>
            </tr>
            <?php
            $no = 1;
            foreach ($pesanan as $p) { ?>

                <tr>
                    <td align="center"><?= $no++; ?></td>
                    <td align="center"><?php echo $p['nama']; ?></td>
                    <td align="center"><?php echo $p['jumlah']; ?></td>
                    <td align="center"><?php echo $p['selesai']; ?></td>
                    <td align="center"><?php echo $p['kurang']; ?></td>
                </tr>
            <?php } ?>

        </table>
    </div>

    <script type="text/javascript">
        window.print();
        // @page { size: auto;  margin: 0mm; }
    </script>
</body>

</html>