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
</style>
<div class="limiter">
    <div class="container">
        <body bgcolor="gray">
            <h1>
                <p align="center">
                    <font color="gold">
                        <br>
                        <br>
                        Hai <?= ucfirst($_SESSION["nama"]) ?>, Selamat Datang di Sistem Informasi Garment
                        <br>
                    </font>
                </p>
            </h1>
        </body>
    </div>
</div>