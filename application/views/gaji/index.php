<!-- <div class="row text-center">
    <div class="col-md-12 text-center">
        <?php
        print_r($gaji);
        $a = date("d/m/Y", time() - 604800);
        $b = date("d/m/Y");
        ?>
        Hai <?= $gaji[0]['nama']; ?>
        GAJI ANDA UNTUK PERIODE <?= $a ?>-<?= $b ?> ADALAH <?= $gaji[0]['gaji'] ?>
    </div>
</div> -->

<style>
    .container {
        width: 100%;
        min-height: 90vh;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 15px;
    }

    #gaji {
        box-sizing: content-box;
        width: 150px;
        padding: 0px;
        font-size: 50px;
        border: 10px solid gold;
    }
</style>
<div class="row">
    <div class="col">
        <div class="limiter">
            <div class="container">

                <body bgcolor="gray">
                    <h1>
                        <p align="center">
                            <font color="gold">
                                <br><br>
                                Hai <?= $nama[0]['nama']; ?>, SELAMA PERIODE
                                <center>
                                    <div class="card text-center card-head" style="width: 50%; background-color:red;">
                                        <?= $a ?>-<?= $b ?>
                                    </div>
                                </center>
                                <center>
                                    ANDA TELAH MENYELESAIKAN <button type="button" class="btn btn-danger" disabled><?= $gaji[0]['selesai'] ?></button> POTONG PAKAIAN, DAN GAJI YANG AKAN ANDA DAPATKAN ADALAH <br>
                                </center>
                                <center>
                                    Rp. <button type="button" id="gaji" class="btn btn-info" disabled><?= $gaji[0]['gaji']; ?></button>
                                </center>
                                <br>

                    </h1>
                    </b>
                    </p>
                    </font>
            </div>
        </div>
    </div>
</div>