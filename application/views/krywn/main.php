<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
    <title>SI Garment</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="<?php echo site_url('resources/img/logo.png'); ?>" width="40" height="45" alt="">
            SI Garment</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url(); ?>">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pesanan" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pesanan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pesanan">
                        <a class="dropdown-item" href="<?= site_url('pesanan'); ?>">Daftar Pesanan</a>
                    </div>

                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="produksi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Produksi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="produksi">
                        <a href="<?= site_url('produksi'); ?>" class="dropdown-item">Lakukan Produksi</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="bahanbaku" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Persediaan Bahan Baku
                    </a>
                    <div class="dropdown-menu" aria-labelledby="bahanbaku">
                        <a class="dropdown-item" href="<?= site_url('persediaan'); ?>">Daftar Persediaan</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('gaji') ?>">Pendapatan</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>app/logout" style="color:blue;" class="nav-link">Logout | <?= ucfirst($_SESSION["nama"]) ?> (<?= ucfirst($_SESSION["status"]) ?>)</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="content-wrapper">
        <section class="content">
            <?php
            if (isset($_view) && $_view)
                $this->load->view($_view);
            ?>
        </section>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatableid').DataTable({
                "scrollY": true,
                "scrollX": true
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatableid1').DataTable({
                "scrollY": true,
                "scrollX": true
            });
        });
    </script>
</body>

</html>