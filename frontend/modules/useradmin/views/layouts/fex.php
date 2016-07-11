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
$this->registerCssFile('@web/ex/css/homeStyle.css');

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
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
<body class="horizontal-menu-page sticky-header ">

<section>

    <?php
    NavBar::begin([
        'brandLabel' => '<img src="/gbii/frontend/web/logo2_s_w280.png" alt="logo" style="width: 100px;   padding-top: 2px; "/>',//Yii::t('common','宿宿'),//'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-default ',
        ],
    ]);
    $menuItemsCenter = [
        ['label' => '租房', 'url' => ['/room/index']],
        ['label' => '关于', 'url' => ['/site/about']],
        ['label' => '联系我们', 'url' => ['/site/contact']],
        ['label' => '成为房东', 'url' => ['/useradmin/loader/create']],
        ['label' => '帮助', 'items'=>[
                ['label'=>'<i class="icon-screenshot"></i> 个人中心','url'=>['useradmin/customer/index']],
                ['label'=>'<i class="icon-signout"></i> 退出','url'=>'/site/logout','linkOptions'=>['data-method'=>'post']],

            ],]
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => '注册', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => '登录', 'url' => ['/site/login']];
    } else {
        $menuItems[] =[
            'label'=>Yii::$app->user->identity->username,
            'items'=>[
                ['label'=>'<i class="icon-screenshot"></i> 个人中心','url'=>['useradmin/customer/index']],
                /* ['label'=>'<i class="icon-signout"></i> 退出','url'=>'/site/logout','linkOptions'=>['data-method'=>'post']],*/
                ['label'=>'<li><a><i class="icon-signout"></i>'
                    . Html::beginForm(['/site/logout'], 'post',['style'=>'display:inline'])
                    . Html::input(
                        'submit',
                        '','退出 ',
                        ['class' => '','style'=>'border:none;background:none;cursor:pointer;']
                    )
                    . Html::endForm()
                    .'</a></li>']
            ],
            //'option'=>['class'=>'dropdown-togglefsdfsdf']
        ];

    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav center'],
        'encodeLabels' => false,
        'items' => $menuItemsCenter,
    ]);
    echo Nav::widget([
        'options' => ['class' => 'nav navbar-nav navbar-right'],
        'encodeLabels' => false,
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
    <!-- left side start-->

    <!-- left side end-->
    <?php if(isset($this->params['index'])){ ?>
    <div class="carousel slide auto panel-body banner" id="c-slide" style="padding: 0">
        <ol class="carousel-indicators out">
            <li data-target="#c-slide" data-slide-to="0" class=""></li>
            <li data-target="#c-slide" data-slide-to="1" class=""></li>
            <li data-target="#c-slide" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner" style="padding: 0">
            <div class="item text-center" >
                <img class="banner-slider" src="<?= Url::to('@web/home/images/8.jpg')?>" />
                <!--<h3 class="banner-item">Well Organized</h3>
                <p class="banner-item">Awesome admin template</p>
                <small class="text-muted banner-item">Huge UI Elements</small>-->

            </div>
            <div class="item text-center">
                <!--  <h3 class="banner-item">Well Organized</h3>
                  <p class="banner-item">Awesome admin template</p>
                  <small class="text-muted banner-item">Huge UI Elements</small>-->
                <img class="banner-slider" src="<?= Url::to('@web/home/images/9.jpg')?>" />

            </div>
            <div class="item text-center active">
                <!-- <h3 class="banner-item">Well Organized</h3>
                 <p class="banner-item">Awesome admin template</p>
                 <small class="text-muted banner-item">Huge UI Elements</small>-->
                <img class="banner-slider" src="<?= Url::to('@web/home/images/9.jpg')?>" >

            </div>
            <div class="search-box" >
                <h3 style="text-align: center;color: rgba(11, 107, 125, 0.85);padding-bottom: 10px">寻找你想要的</h3>
                <div class="banner-bottom">
                    <form role="form" action="<?= Url::to('@web/room/index') ?>" method="get">
                        <div class="bnr-one">
                            <div class="bnr-left">
                                <p>地段</p>
                            </div>
                            <div class="bnr-right">
                                <input class="date hasDatepicker" id="datepicker" name="RoomSearch[address]" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="bnr-one">
                            <div class="bnr-left">
                                <p>价格</p>
                            </div>
                            <div class="bnr-right">
                                <select name="RoomSearch[price]" >
                                    <option value="">价格</option>
                                    <option value="200-300">200-300</option>
                                    <option value="300-500">300-500</option>
                                    <option value="500-700">500-700</option>
                                    <option value="700-1000">700-1000</option>
                                    <option value="1000-1500">1000-1500</option>
                                    <option value=">1500-10000">1500-</option>
                                </select>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="bnr-one">
                            <div class="bnr-left">
                                <p>户型</p>
                            </div>
                            <div class="bnr-right">
                                <select name="RoomSearch[atrribute]" >
                                    <option value=""></option>
                                    <option value="套一">套一/单间</option>
                                    <option value="套二">套二</option>
                                    <option value="套三">套三</option>
                                    <option value="套四">套四</option>
                                    <option value="套五">套五</option>
                                </select>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="bnr-btn">

                            <input type="submit" value=" 搜 索 ">

                        </div>
                    </form>
                </div>
            </div>

        </div>
        <a class="left carousel-control" href="#c-slide" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="right carousel-control" href="#c-slide" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>

    </div>
    <?php }elseif(isset($this->params['banner'])){ ?>
        <div style="background: url(<?= Url::to('@web/home/images/8.jpg') ?>) no-repeat 0px 0px;background-size: cover;padding-top: 40px">
            <div class="container "  >
                <form class="search-form domain-search search-block container" role="form" action="<?= Url::to('@web/room/index') ?>" method="get">
                    <div class="row "  >
                        <div class="col-lg-12">
                            <div class="three-fifth domain_row column first">
                                <input type="text" class="text" placeholder="周边小区、街区" name="RoomSearch[address]" >
                            </div>
                            <div class="one-fifth column">
											<span class="selection-box"><select class="domains valid" name="RoomSearch[price]" >
                                                    <option value="">价格</option>
                                                    <option value="200-300">0-300</option>
                                                    <option value="300-500">300-500</option>
                                                    <option value="500-700">500-1000</option>
                                                    <option value="1000-1500">1000-2000</option>
                                                    <option value=">1500-100000">2000-</option>
                                                </select></span>
                            </div>
                            <div class="one-fifth column">
											<span class="selection-box"><select class="domains valid" name="RoomSearch[atrribute]">
                                                    <option value="">户型 </option>
                                                    <option value="套一">套一/单间</option>
                                                    <option value="套二">套二</option>
                                                    <option value="套三">套三</option>
                                                    <option value="套四">套四</option>
                                                    <option value="套五">套五</option>
                                                </select></span>
                            </div>
                            <div class="one-fifth column">
											<span class="selection-box"><select class="domains valid" name="">
                                                    <option>月租</option>
                                                    <option>日租</option>
                                                    <option>周租</option>
                                                </select></span>
                            </div>
                        </div>
                    </div>
                    <div class="row"  >
                        <div class="col-md-12">
                            <div class="one-fifth column">
                                <label class="checkbox-inline" for="fa">
                                    <input name="fa" id="fa" value="独卫"  checked type="checkbox">
                                    <i> </i>独卫</label>
                            </div>
                            <div class="one-fifth column">
                                <label class="checkbox-inline">
                                    <input name="" value="网络"  type="checkbox">
                                    <i> </i> 网络</label>
                            </div>
                            <div class="one-fifth column">
                                <label class="checkbox-inline">
                                    <input  name="" value="空调"  type="checkbox">
                                    <i> </i> 空调</label>
                            </div>
                            <div class="one-fifth column">
                                <label class="checkbox-inline">
                                    <input  name="" value="热水"  type="checkbox">
                                    <i> </i> 热水</label>
                            </div>
                            <div class="one-fifth column" style="float: right;margin-right:  1.5%;">
                                <input type="submit" value=" 搜 索 ">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <?php
    }else{?>

        <div style="
            background: rgba(24, 24, 24, 0.51) url(<?= isset($this->params['banner_pic'])?$this->params['banner_pic']:Url::to('@web/home/images/8.jpg')?>) no-repeat 0px 0px;
            background-size:cover;
            -webkit-background-size:cover;
            -moz-background-size:cover;
            color: #878F9C;
            ">
        <div id="breadcrumb_wrapper" >

            <div class="container page-heading">
                <div class="color-wrapper"></div>
                <h3><?=$this->title?></h3>
                <?php if(isset($this->params['breadcrumbs'])){?>
                <h6> <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?></h6>
                <?php } ?>
                <div class="clearfix"></div>
            </div>
        </div>
        </div>
    <?php    } ?>
    <!-- main content start-->



        <!-- page heading start-->

        <!-- page heading end-->

        <!--body wrapper start-->
    <div class="wrapper <?php if(isset($this->params['page-container-responsive'])){ echo $this->params['page-container-responsive'];} ?>">

        <?=$content?>

    </div>



        <!--body wrapper end-->

        <!--footer section start-->
        <footer>
            2014 &copy; AdminEx by
        </footer>
        <!--footer section end-->



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


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
