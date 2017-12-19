<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TagsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


use yii\helpers\Url;

AppAsset::register($this);

$this->title = Yii::t('app', 'Tags');
$this->params['breadcrumbs'][] = $this->title;
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
    <style>
        .inputfile + label {
            font-size: 1.25em;
            font-weight: 700;
            color: white;
            background-color: black;
            display: inline-block;
        }

        .inputfile:focus + label,
        .inputfile + label:hover {
            background-color: red;
        }
    </style>
    <?php $this->head() ?>
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
                    <h4 class="page-title">Tags</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="tags-index" style="width: 100%">
                        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
                            <?= $form->field($model, 'csvFiles[]')->fileInput(['class' => 'inputfile', 'multiple' => true])->label(false) ?>
                            <button type="submit" class="btn btn-success">Import</button>
                        <?php ActiveForm::end() ?>

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

</body>

<!-- Mirrored from coderthemes.com/abstack/horizontal/chart-chartjs.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Dec 2017 16:13:53 GMT -->
</html>
