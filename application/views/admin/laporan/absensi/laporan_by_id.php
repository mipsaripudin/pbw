<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Invoice2</title>

    <!-- Bootstrap cdn 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom font montseraat -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<style>
    body {
        font-family: 'Montserrat', sans-serif;
    }

    .front-invoice-wrapper {
        margin: 20px auto;
        max-width: 700px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    }

    .front-invoice-top {
        background-color: #323149;
        padding: 40px 60px;
    }

    .front-invoice-top-left h2,
    .front-invoice-top-right h2 {
        color: #ffffff;
        font-size: 22px;
        margin-bottom: 4px;
    }

    .front-invoice-top-left h3,
    .front-invoice-top-right h3 {
        color: rgba(255, 255, 255, 0.7);
        font-size: 15px;
        font-weight: 400;
        margin-top: 0;
        margin-bottom: 5px;
    }

    .front-invoice-top-left h5,
    .front-invoice-top-right h5 {
        color: rgba(255, 255, 255, 0.7);
        font-size: 14px;
        font-weight: 400;
        margin-top: 0;
    }

    .front-invoice-top-right {
        text-align: right;
    }

    .service-name {
        color: #ffffff;
        font-size: 22px;
        font-weight: 500;
        margin-top: 60px;
    }

    .date {
        color: rgba(255, 255, 255, 0.8);
        font-size: 14px;
    }

    .front-invoice-bottom {
        background-color: #ffffff;
        padding: 40px 60px;
        position: relative;
    }

    .borderless td,
    .borderless th {
        border: none !important;
    }

    .custom-table td {
        font-size: 13px;
        padding: 6px !important;
        font-weight: 500;
    }

    .description {
        line-height: 1.6;
    }

    .specs {
        margin-top: 30px;
        font-size: 14px;
    }

    .invoice-wrapper {
        margin: 20px auto;
        max-width: 700px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    }

    .invoice-top {
        background: linear-gradient(135deg, #fafafa, #eeeeee);
        padding: 60px 60px 80px;
    }

    .invoice-top-left h2,
    .invoice-top-right h2 {
        font-size: 22px;
        margin-bottom: 4px;
    }

    .invoice-top-left h3,
    .invoice-top-right h3 {
        font-size: 15px;
        font-weight: 400;
        margin-top: 0;
        margin-bottom: 5px;
    }

    .invoice-top-left h5,
    .invoice-top-right h5 {
        font-size: 14px;
        font-weight: 400;
        margin-top: 0;
    }

    .invoice-top-left h4 {
        margin-top: 40px;
        font-size: 22px;
    }

    .invoice-top-left h6 {
        font-size: 14px;
        font-weight: 400;
    }

    .invoice-top-right h2,
    .invoice-top-right h3,
    .invoice-top-right h5 {
        text-align: right;
    }

    .logo-wrapper {
        overflow: auto;
    }


    .invoice-bottom {
        background-color: #ffffff;
        padding: 40px 60px;
        position: relative;
    }

    .task-table-wrapper {
        margin-top: -14%;
    }

    .task-table-wrapper .table>thead>tr>th {
        border: none;
        padding-left: 0;
        /*padding-bottom: 30px;*/
    }

    .task-table-wrapper .table>tbody>tr:first-child>td {
        border-top: 0;
    }

    .task-table-wrapper .table>tbody>tr>td {
        padding-top: 25px;
        padding-left: 0;
    }

    .task-table-wrapper .table>tbody>tr>td>h4 {
        margin-top: 0;
    }

    .task-table-wrapper .table tbody .desc {
        width: 60%;
    }

    .desc h3 {
        margin-top: 0;
        font-size: 20px;
    }

    .desc h5 {
        font-weight: 400;
        line-height: 1.4;
        font-size: 14px;
    }

    .invoice-bottom-total {
        background-color: #fafafa;
        overflow: auto;
        margin-top: 50px;
    }

    .invoice-bottom-total .no-padding {
        padding-left: 0;
        padding-right: 0;
    }

    .invoice-bottom-total .tax-box,
    .invoice-bottom-total .add-box,
    .invoice-bottom-total .sub-total-box {
        display: inline-block;
        margin-right: 10px;
        padding: 10px;
    }

    .invoice-bottom-total .total-box {
        background-color: #323149;
        padding: 10px;
    }

    .invoice-bottom-total .total-box h6 {
        margin-top: 0;
        color: #ffffff;
        text-align: right;
    }

    .invoice-bottom-total .total-box h3 {
        margin-bottom: 0;
        color: #ffffff;
        text-align: right;
    }

    .divider {
        margin-top: 50px;
        margin-bottom: 5px;
    }

    .bottom-bar {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 26px;
        background-color: #323149;
    }
</style>

<body>

    <?php foreach ($by as $row) : ?>

        <section class="front">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="front-invoice-wrapper">
                            <div class="front-invoice-top">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="front-invoice-top-left">
                                            <h2><?= $row->nama ?></h2>
                                            <h3><?= $row->nama_jabatan ?> <?= $row->nama_bagian ?></h3>
                                            <h5>NIP : <?= $row->nip ?></h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="front-invoice-top-right">
                                            <h2>Melissa Grey</h2>
                                            <h3>HR/GA Director</h3>
                                            <h5>NIP : 1110821700</h5>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-xs-12">
                                        <h1 class="service-name">Reports regarding employee attendance history</h1>
                                        <h6 class="date"><?php echo date('F, Y', strtotime($row->waktu)); ?></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="front-invoice-bottom">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p class="description">Data ini diperlukan untuk memonitor jam kerja karyawan, kehadiran karyawan, pendataan jam lembur, dan bahkan pada sistem yang sudah terintegrasi dan dapat memonitor posisi karyawan yang ditugaskan di luar kantor!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="back">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="invoice-wrapper">
                            <div class="invoice-top">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="invoice-top-left">
                                            <h2><?= $row->nama ?></h2>
                                            <h3><?= $row->nama_jabatan ?> <?= $row->nama_bagian ?></h3>
                                            <h5>NIP : <?= $row->nip ?></h5>

                                            <h4>Attendance history</h4>
                                            <h6>Periode : <?php echo date('F, Y', strtotime($row->waktu)); ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="invoice-top-right">
                                            <h2>Melissa Grey</h2>
                                            <h3>HR/GA Director</h3>
                                            <h5>NIP : 1110821700</h5>

                                            <!-- <div class="logo-wrapper">
											<img src="./Acme.png" class="img-responsive pull-right logo" />
										</div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-bottom">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="task-table-wrapper">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>DATE</th>
                                                        <th>STATUS</th>
                                                        <th>TIME</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="desc">
                                                            <h3><?php echo date('l', strtotime($row->waktu)); ?></h3>
                                                            <h5><?php echo date('F d, Y', strtotime($row->waktu)); ?></h5>
                                                        </td>
                                                        <td class="desc">
                                                            <h4>
                                                                <?php if ($row->keterangan == "masuk") { ?>
                                                                    Masuk
                                                                <?php } else { ?>
                                                                    Keluar
                                                                <?php } ?>
                                                            </h4>
                                                            <h5>
                                                                <?php if ($row->keterangan == "masuk") { ?>
                                                                    Absent In
                                                                <?php } else { ?>
                                                                    Absent Out
                                                                <?php } ?>
                                                            </h5>
                                                        </td>
                                                        <td class="desc">
                                                            <h4><?php echo date('h:i:s', strtotime($row->waktu)); ?>”</h4>
                                                            <h5>
                                                                Valid
                                                            </h5>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12">
                                        <div class="invoice-bottom-total">
                                            <div class="col-sm-8 no-padding">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <div class="add-box">
                                                    <h6>Diketahui Oleh:</h6>
                                                    <img src="<?= base_url('assets') ?>/sig.png" width="150" alt="">
                                                    <h6>Melissa Grey<br>
                                                        HR/GA Director</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 no-padding">
                                                <div class="add-box">
                                                    <h6>Disetujui Oleh:</h6>
                                                    <img src="<?= base_url('assets') ?>/nat.png" width="120" alt="">
                                                    <h6><?= $row->nama ?><br>
                                                        <?= $row->nama_jabatan ?> <?= $row->nama_bagian ?></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-xs-12">
                                        <hr class="divider">
                                    </div>
                                    <div class="col-sm-4">
                                        <h6 class="text-left">www.gymove.co.id</h6>
                                    </div>
                                    <div class="col-sm-4">
                                        <h6 class="text-center">helpdesk@gymove.co.id</h6>
                                    </div>
                                    <div class="col-sm-4">
                                        <h6 class="text-right">+62 8097678988</h6>
                                    </div>
                                </div>
                                <div class="bottom-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endforeach; ?>


    <!-- jquery slim version 3.2.1 minified -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>

</html>