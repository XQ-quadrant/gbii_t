<?php

use yii\helpers\Html;
use yii\grid\GridView;
use frontend\assets\HomeAsset;
use yii\helpers\Url;
use yii\data\Pagination;
use backend\widgets\common\LinkPages;
use yii\web\View;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RoomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rooms';
//$this->params['breadcrumbs'][] = $this->title;
$this->params['banner'] = 'search';
$this->params['page-container-responsive']='page-container-responsive';
$this->registerCssFile('@web/ex/css/media.css',[ 'depends'=> 'frontend\assets\ExAsset']);
/*$this->registerJs("$(document).ready(function() {

				$().UItoTop({ easingType: 'easeOutQuart' });

		});",View::POS_END);*/
$data = $dataProvider->getModels();
$count = $dataProvider->getCount();
$pages = new Pagination([ 'totalCount' =>$count, 'pageSize' => 18]);
?>

<div class="room-index ">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
    //var_dump($dataProvider->getModels());die();
    ?>
    <div id="content" class="">
        <!-- PAGE HEADER-->

        <div id="dedicated_servers">
            <!-- <div class="ds_heading">
                 <div class="ds_processor">Processor</div>
                 <div class="ds_ram">RAM</div>
                 <div class="ds_cores">No. of Cores</div>
                 <div class="ds_diskspace">Disk Space</div>
                 <div class="ds_bandwidth">Band width</div>
                 <div class="ds_price">Price / month</div>
                 <div class="ds_order"></div>
                 <div class="clearfix"></div>
             </div>-->
            <div class="ds">
                <div class="ds_processor">西南交通大学</div>

                <div class="ds_cores"><a href="<?= \yii\helpers\Url::current(['sort'=>(Yii::$app->request->get('sort')=='price')?'-price':'price'])?>">综合排序</a></div>
                <div class="ds_diskspace"><a href="<?= \yii\helpers\Url::current(['sort'=>(Yii::$app->request->get('sort')=='price')?'-price':'price'])?>">价格</a></div>
                <div class="ds_diskspace"><a href="<?= \yii\helpers\Url::current(['sort'=>(Yii::$app->request->get('sort')=='createtime')?'-createtime':'createtime'])?>">起始时间</a></div>
                <!--<div class="ds_bandwidth">评价</div>
                <div class="ds_price">符合条件的有</div>
                <div class="ds_ram">20 套</div>-->
                <!--<div class="ds_order">
                    <div class="search-bar">
                    <input type="text"  placeholder="搜索">
                    <input type="submit" value=""/>
                    </div>
                </div>-->
                <div class="clearfix"></div>
            </div>

        </div>

        <div class="">
            <?php /*$i = $dataProvider->getModels()['start'];*/?>
            <?php foreach ( $data as $list):?>
                <div class="col-lg-4">
                    <div class="well-media">
                        <div class="vendor" style="height: 160px;overflow: hidden">
                            <a class="fancybox" rel="group" href="<?=Url::to('@web/room/view?id='.$list[ 'id']) ?>" target="_blank">
                                <img class="img-responsive-media" src="<?=$list[ 'pic'] ?>" alt="" style="">
                            </a>
                        </div>
                        <div class="video-text">
                            <a href="<?=Url::to('@web/room/view?id='.$list[ 'id']) ?>" style="font-size: 1.2em;color: #4E89E2;" target="_blank"><?= Html::encode($list[ 'title']) ?></a>

                            <p style="color: #576569"><?= Html::encode($list[ 'address']) ?></p>
                        </div>
                        <!--<div class="tag-nest">
                            <i>套二</i><i>向阳</i><i>空调</i>
                        </div>-->
                        <div class="photo-category-bg">
                            <h3>￥<?= Html::encode($list[ 'price']) ?>/ 月</h3>
                            <a class="link-media pull-right" href="#">
                                <span class="fontawesome-picture"></span>
                            </a>

                            <div class="triangle-white"></div>
                            <div class="triangle-photo-right"></div>
                        </div>

                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
    <?=LinkPages:: widget(['pagination' => $pages]);?>
    <!--<ul class="pagination pagination-lg">
        {$page}
    </ul>-->
<script>

</script>

</div>
