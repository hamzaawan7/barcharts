<?php
use yii\helpers\Url;

?>
<!DOCTYPE html>
<html>

<!-- Mirrored from coderthemes.com/abstack/horizontal/chart-chartjs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Dec 2017 16:13:52 GMT -->
<head>
    <meta charset="utf-8"/>
    <title>Tags Charts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta content="Tags Count - Graph" name="description"/>
    <meta content="asadmahmood742" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=Yii::$app->request->baseUrl?>/assets/images/favicon.ico">

    <!-- App css -->
    <link href="<?=Yii::$app->request->baseUrl?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?=Yii::$app->request->baseUrl?>/assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="<?=Yii::$app->request->baseUrl?>/assets/css/style.css" rel="stylesheet" type="text/css"/>

    <script src="<?=Yii::$app->request->baseUrl?>/assets/js/modernizr.min.js"></script>

</head>

<body>

<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">

            <!-- Logo container-->
            <div class="logo">
                <!-- Text Logo -->
                <a href="<?= Url::to(['site/index']) ?>" class="logo">
                    <span class="logo-small"><i class="mdi mdi-radar"></i> Tags Charts</span>
                    <span class="logo-large"><i class="mdi mdi-radar"></i> Tags Charts</span>
                </a>
            </div>
            <!-- End Logo container-->

            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <div class="navbar-custom">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu">
                        <a href="<?= Url::to(['site/index']) ?>"><i class="fi-bar-graph"></i>Graphs</a>
                    </li>
                </ul>
                <!-- End navigation menu -->
            </div> <!-- end #navigation -->
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->


<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-box">
                    <h4 class="page-title">Best Tags from Popular Items Page</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card-box">
                            <h4 class="header-title">Tags</h4>
                            <?php foreach ($tags1 as $item) { ?>
                                <span class="pull-left" style="font-weight: 500"><?= $item['genre'] ?></span>
                                <span class="pull-right" style="font-weight: 600"><?= $item['count'] ?></span>
                                <br/>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card-box">
                            <h4 class="header-title">Bar Chart</h4>
                            <canvas id="bar1" height="400" class="mt-4"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <!-- Page-Title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-box">
                    <h4 class="page-title">Best Tags from Top New Files Page</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card-box">
                            <h4 class="header-title">Tags</h4>
                            <?php foreach ($tags2 as $item) { ?>
                                <span class="pull-left" style="font-weight: 500"><?= $item['genre'] ?></span>
                                <span class="pull-right" style="font-weight: 600"><?= $item['count'] ?></span>
                                <br/>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card-box">
                            <h4 class="header-title">Bar Chart</h4>
                            <canvas id="bar2" height="400" class="mt-4"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <!-- Page-Title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-box">
                    <h4 class="page-title">Best Categories from Popular Items Page</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card-box">
                            <h4 class="header-title">Tags</h4>
                            <?php foreach ($tags3 as $item) { ?>
                                <span class="pull-left" style="font-weight: 500"><?= $item['genre'] ?></span>
                                <span class="pull-right" style="font-weight: 600"><?= $item['count'] ?></span>
                                <br/>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card-box">
                            <h4 class="header-title">Bar Chart</h4>
                            <canvas id="bar3" height="400" class="mt-4"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- end container -->
</div>
<!-- end wrapper -->


<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <?= date('Y') ?> © Tag Charts
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->


<!-- jQuery  -->
<script src="<?=Yii::$app->request->baseUrl?>/assets/js/jquery.min.js"></script>
<script src="<?=Yii::$app->request->baseUrl?>/assets/js/popper.min.js"></script>
<script src="<?=Yii::$app->request->baseUrl?>/assets/js/bootstrap.min.js"></script>
<script src="<?=Yii::$app->request->baseUrl?>/assets/js/waves.js"></script>
<script src="<?=Yii::$app->request->baseUrl?>/assets/js/jquery.slimscroll.js"></script>

<!-- Chart JS -->
<script src="<?=Yii::$app->request->baseUrl?>/plugins/chart.js/chart.bundle.js"></script>

<?php
$labels1 = '[';
$data1 = '[';
$total = count($tags1);
$i = 0;
foreach ($tags1 as $item) {
    $item['genre'] = str_replace("\n", '', $item['genre']);
    $item['count'] = str_replace("\n", '', $item['count']);
    $labels1 = $labels1 . '"' . $item['genre'] . '"';
    $data1 = $data1 . $item['count'];
    $i++;
    if ($i != $total) {
        $labels1 = $labels1 . ', ';
        $data1 = $data1 . ', ';
    }
}
$labels1 = $labels1 . ']';
$data1 = $data1 . ']';

$labels2 = '[';
$data2 = '[';
$total = count($tags2);
$i = 0;
foreach ($tags2 as $item) {
    $item['genre'] = str_replace("\n", '', $item['genre']);
    $item['count'] = str_replace("\n", '', $item['count']);
    $labels2 = $labels2 . '"' . $item['genre'] . '"';
    $data2 = $data2 . $item['count'];
    $i++;
    if ($i != $total) {
        $labels2 = $labels2 . ', ';
        $data2 = $data2 . ', ';
    }
}
$labels2 = $labels2 . ']';
$data2 = $data2 . ']';

$labels3 = '[';
$data3 = '[';
$total = count($tags3);
$i = 0;
foreach ($tags3 as $item) {
    $item['genre'] = str_replace("\n", '', $item['genre']);
    $item['count'] = str_replace("\n", '', $item['count']);
    $labels3 = $labels3 . '"' . $item['genre'] . '"';
    $data3 = $data3 . $item['count'];
    $i++;
    if ($i != $total) {
        $labels3 = $labels3 . ', ';
        $data3 = $data3 . ', ';
    }
}
$labels3 = $labels3 . ']';
$data3 = $data3 . ']';
?>

<script>
    var barChart1 = {
        labels: <?= $labels1?>,
        datasets: [
            {
                label: "Tags Count",
                backgroundColor: "rgba(60, 134, 216, 0.3)",
                borderColor: "#3c86d8",
                borderWidth: 2,
                hoverBackgroundColor: "rgba(60, 134, 216, 0.7)",
                hoverBorderColor: "#3c86d8",
                data: <?= $data1?>,
            }
        ],
    };

    var barChart2 = {
        labels: <?= $labels2?>,
        datasets: [
            {
                label: "Tags Count",
                backgroundColor: "rgba(60, 134, 216, 0.3)",
                borderColor: "#3c86d8",
                borderWidth: 2,
                hoverBackgroundColor: "rgba(60, 134, 216, 0.7)",
                hoverBorderColor: "#3c86d8",
                data: <?= $data2?>,
            }
        ],
    };

    var barChart3 = {
        labels: <?= $labels3?>,
        datasets: [
            {
                label: "Tags Count",
                backgroundColor: "rgba(60, 134, 216, 0.3)",
                borderColor: "#3c86d8",
                borderWidth: 2,
                hoverBackgroundColor: "rgba(60, 134, 216, 0.7)",
                hoverBorderColor: "#3c86d8",
                data: <?= $data3?>,
            }
        ],
    };

    var barOpts = {
        scales: {
            yAxes: [{
                ticks: {
                    //max: 100,
                    min: 0,
                    stepSize: 2
                }
            }]
        }
    };
</script>
<script src="<?=Yii::$app->request->baseUrl?>/assets/pages/jquery.chartjs.init.js"></script>

<!-- App js -->
<script src="<?=Yii::$app->request->baseUrl?>/assets/js/jquery.core.js"></script>
<script src="<?=Yii::$app->request->baseUrl?>/assets/js/jquery.app.js"></script>

</body>

<!-- Mirrored from coderthemes.com/abstack/horizontal/chart-chartjs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Dec 2017 16:13:53 GMT -->
</html>