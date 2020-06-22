<style>
    #pengembangan {

        width: 100%;
        min-height: 91vh;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 15px;
    }

    .vertically {
        height: 150px;
        overflow: hidden;
        position: relative;
    }

    .vertically .inner {
        position: absolute;
        width: 100%;
        height: 100%;
        /* Starting position */
        -moz-transform: translateY(40%);
        -webkit-transform: translateY(40%);
        transform: translateY(40%);
        /* Apply animation to this element */
        -moz-animation: vertically 1s linear infinite alternate;
        -webkit-animation: vertically 1s linear infinite alternate;
        animation: vertically 1s linear infinite alternate;
    }

    /* Move it (define the animation) */
    @-moz-keyframes vertically {
        0% {
            -moz-transform: translateY(40%);
        }

        100% {
            -moz-transform: translateY(0%);
        }
    }

    @-webkit-keyframes vertically {
        0% {
            -webkit-transform: translateY(40%);
        }

        100% {
            -webkit-transform: translateY(0%);
        }
    }

    @keyframes vertically {
        0% {
            -moz-transform: translateY(40%);
            /* Browser bug fix */
            -webkit-transform: translateY(40%);
            /* Browser bug fix */
            transform: translateY(40%);
        }

        100% {
            -moz-transform: translateY(0%);
            /* Browser bug fix */
            -webkit-transform: translateY(0%);
            /* Browser bug fix */
            transform: translateY(0%);
        }
    }
</style>
<div class="limiter">
    <div class="container" id="pengembangan">
        <center>
            <div class="vertically">
                <div class="inner">
                    <img src="<?= site_url('resources/img/logo.png'); ?>" width="8%" class="rounded-circle">
                </div>
            </div>
        </center>

        <body bgcolor="gray">
            <h1>
                <p align="center">
                    <font color="gold">
                        Hai <?= ucfirst($_SESSION["nama"]) ?>, Selamat Datang di Sistem Informasi Garment
                    </font>
                </p>
            </h1>
        </body>
        <br><br><br>
        <section class="after-loop pt-1 mt-1 mb-1 pb-3 zoomIn animated">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <a href="<?= site_url('pesanan/add') ?>" class="after-loop-item card border-0 card-templates shadow-lg">
                        <div class="card-body d-flex align-items-center flex-column text-center">
                            <h4>Input Pesanan</h4>
                            <p class="mt-2">Masukkan Pesanan Baru</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mx-auto">
                    <a href="<?= site_url('pesanan') ?>" class="after-loop-item card border-0 card-snippets shadow-lg">
                        <div class="card-body d-flex align-items-center flex-column text-center">
                            <h4>Daftar Pesanan</h4>
                            <p class="mt-2">Lihat Daftar Pesanan yang Tersedia</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>