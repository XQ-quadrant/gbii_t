<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-6-23
 * Time: 下午1:06
 */
use frontend\assets\ExAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\web\View;
use yii\helpers\Url;
use frontend\assets\HomeAsset;
ExAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Blank Page</title>

   <!-- <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>    <![endif]-->
</head>
<?php $this->beginBody() ?>
<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo" >
            <a href="index.html" ><img src="/gbii/frontend/web/logo2_s_w280.png" alt="logo" style="width: 100px; padding-top: 2px; "/></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="<?=Url::toRoute('/ex/')?>/images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->


        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="<?=Url::toRoute('/ex/')?>/images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#"><?=Yii::$app->user->identity->username?></a></h4>
                        <!--<span>"Hello There..."</span>-->
                    </div>
                </div>

                <h5 class="left-nav-title">账户</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="#"><i class="fa fa-user"></i> <span>个人中心</span></a></li>

                    <li><a href="#"><i class="fa fa-sign-out"></i> <span>退出</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->


            <ul class="nav nav-pills nav-stacked custom-nav" >
                <h5 class="left-nav-title">基本</h5>
                <li class="menu-list">
                    <a href="#"><i class="fa fa-user"></i><span >房东平台</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="<?= Url::to('@web/useradmin/customer/index') ?>" target="_blank"> 房东主页 </a></li>
                        <li><a href="<?= Url::to('@web/useradmin/customer/update') ?>" target="_blank"> 修改信息 </a></li>

                    </ul>
                </li>

                <li class="menu-list">
                    <a href="#"><i class="fa  fa-home"></i><span>房屋管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="<?= Url::toRoute('/useradmin/business')?>"> 出租房 </a></li>

                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="fa fa-book"></i><span>住宿</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="<?= Url::toRoute('news/index')?>"> 短租 </a></li>
                        <li><a href="layouts.html">长租</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="fa fa-cog"></i><span>设置</span></a>

                    <ul class="sub-menu-list">
                        <li><a href="<?= Url::toRoute('news/index')?>"> 个人信息 </a></li>
                        <li><a href="layouts.html">房东信息</a></li>
                        <li><a href="text-editors.html">功能设置</a></li>
                    </ul>
                </li>


            </ul>
            <!--sidebar nav end-->
            <ul class="nav nav-pills nav-stacked custom-nav" style="border-top: 1px solid rgba(255, 255, 255, 0.1);margin-top: 10px;">
                <h5 class="left-nav-title">商务</h5>
                <li><a href="grid.html"><i class="fa fa-desktop"></i><span >市场分析</span></a></li>
                <li><a href="maps.html"><i class="fa fa-money"></i><span >交易分析</span></a></li>

            </ul>
        </div>
    </div>
    <!-- left side end-->

    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--search start-->
           <!-- <form class="searchform" action="index.html" method="post">
                <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
            </form>-->
            <!--search end-->

            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-tasks"></i>
                            <span class="badge">8</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">You have 8 pending task</h5>
                            <ul class="dropdown-list user-list">
                                <li class="new">
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Database update</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
                                                <span class="">40%</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Dashboard done</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
                                                <span class="">90%</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Web Development</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-info">
                                                <span class="">66% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Mobile App</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="33" role="progressbar" class="progress-bar progress-bar-danger">
                                                <span class="">33% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Issues fixed</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar">
                                                <span class="">80% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="new"><a href="">See All Pending Task</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">You have 5 Mails </h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="thumb"><img src="<?=Url::toRoute('/ex/')?>/images/photos/user1.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">John Doe <span class="badge badge-success">new</span></span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="<?=Url::toRoute('/ex/')?>/images/photos/user2.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jonathan Smith</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="<?=Url::toRoute('/ex/')?>/images/photos/user3.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jane Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="<?=Url::toRoute('/ex/')?>/images/photos/user4.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Mark Henry</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="<?=Url::toRoute('/ex/')?>/images/photos/user5.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jim Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="new"><a href="">Read All Mails</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">Notifications</h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #1 overloaded.  </span>
                                        <em class="small">34 mins</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #3 overloaded.  </span>
                                        <em class="small">1 hrs</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #5 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #31 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
                                <li class="new"><a href="">See All Notifications</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="<?=Url::toRoute('/ex/')?>/images/photos/user-avatar.png" alt="" />
                            <?=Yii::$app->user->identity->username?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>  个人中心</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i>  设置</a></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i> 退出</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!-- page heading start-->

            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'options' => ['class' => 'breadcrumb panel']

            ]) ?>
            <?= Alert::widget() ?>

        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper" >

            <?=$content?>

        </div>
        <!--body wrapper end-->

        <!--footer section start-->

        <!--<footer class="">
            2014 &copy; AdminEx by <a href="http://www.mycodes.net/" target="_blank">源码之家</a>
        </footer>-->
        <!--footer section end-->
        <footer id="footer">


            <div class="container">
                <div class="row">

                    <div class="col-md-5 ">
                        <div class="panel-body">
                            <p class="simplenav">
                                <a href="index.html">Home</a> |
                                <a href="about.html">About</a> |
                                <a href="courses.html">Courses</a> |
                                <a href="fees.html">Fees</a> |
                                <a href="portfolio.html">Portfolio</a> |
                                <a href="contact.html">Contact</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="panel-body">

                            <address >
                                <ul>
                                    <li>Parma Via Modena</li>
                                    <li>40019 Sant'Agata Bolognese</li>

                                    <li>Email : <a class="mail" href="mailto:mail@example.com">info(at)sseet.com</a></li>
                                </ul>
                            </address>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="social text-left">

                            <a href="#"><i class="fa fa-weibo"></i></a>

                            <a href="#"><i class="fa fa-github"></i></a>
                        </div>
                        <br>
                        <p class="text-left">
                            技术支持由 归锋工作室 提供
                        </p>
                    </div>
                </div>
                <!-- /row of panels -->
            </div>

        </footer>

    </div>

    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<!--<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>-->


<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
