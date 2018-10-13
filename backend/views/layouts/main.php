<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="wrapper">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo Url::toRoute('site/index');?>">World Time Plece</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><?= Html::a('Logout', ['site/logout'], ['data-method' => 'post']) ?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo Url::toRoute('site/index');?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('tblschool-info/create');?>"><i class="fa fa-scribd fa-fw"></i> School Information</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('tblclass-division/create');?>"><i class="fa fa-scribd fa-fw"></i> Class Division</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('tbldepartment/create');?>"><i class="fa fa-scribd fa-fw"></i> Department</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('tblemployee/create');?>"><i class="fa fa-scribd fa-fw"></i> Employee Registration</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('tblemployee-attendance/create');?>"><i class="fa fa-scribd fa-fw"></i> Employee Attendance</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('email-setting/create');?>"><i class="fa fa-envelope fa-fw"></i> Email Setting</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('tblsms-setting/create');?>"><i class="fa fa-mobile fa-fw"></i> Sms Setting</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('tblstudent-registration/create');?>"><i class="fa fa-scribd fa-fw"></i> Student Registration</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('tblstud-attendance/create');?>"><i class="fa fa-scribd fa-fw"></i> Student Attendance</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('tbllogin-history/index');?>"><i class="fa fa-scribd fa-fw"></i> Login History</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('tbltracking-history/index');?>"><i class="fa fa-scribd fa-fw"></i> Tracking History</a>
                        </li>
                        
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

   <div id="page-wrapper">
       
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
   
    </div>
</div>

<footer class="footer">
    <div class="container">
       
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
