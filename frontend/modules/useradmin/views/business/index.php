<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\View;
use yii\data\Pagination;
use backend\widgets\common\LinkPages;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '出租房管理台';
$this->params['breadcrumbs'][] = '房东';
$this->params['breadcrumbs'][] =  $this->title;
$this->registerCssFile('@web/ex/js/advanced-datatable/css/demo_page.css',[]);
$this->registerCssFile('@web/ex/js/advanced-datatable/css/demo_table.css',[]);
$this->registerCssFile('@web/ex/js/data-tables/DT_bootstrap.css',[]);
//$this->registerCssFile('@web/media/css/DT_bootstrap.css',[ 'depends'=> 'frontend\assets\MetronicAsset']);
//$this->registerJsFile('@web/media/js/select2.min.js',['depends'=>['frontend\assets\MetronicAsset']]);
//$this->registerJsFile('@web/media/js/jquery.dataTables.min.js',['depends'=>['frontend\assets\MetronicAsset']]);
//$this->registerJsFile('@web/media/js/DT_bootstrap.js',['depends'=>['frontend\assets\MetronicAsset']]);
$this->registerJsFile('@web/ex/js/advanced-datatable/js/jquery.dataTables.js',['depends'=>['frontend\assets\ExAsset']]);
$this->registerJsFile('@web/ex/js/data-tables/DT_bootstrap.js',['depends'=>['frontend\assets\ExAsset']]);
$this->registerJsFile('@web/ex/js/dynamic_table_init.js',['depends'=>['frontend\assets\ExAsset']]);


$data = $dataProvider->getModels();
$count = $dataProvider->getCount();
$pages = new Pagination(['totalCount' => $count, 'pageSize' => 18]);
?>
<div class="row">
<div class="col-md-12 ">


    <!-- Start Quick Menu -->
    <ul class="panel quick-menu clearfix">

        <li class="col-sm-2 col-xs-4">
            <a href="#"><i class="fa  fa-bar-chart-o"></i>统计<span class="label label-danger">12</span></a>
        </li>

        <li class="col-sm-2 col-xs-4">
            <a href="#"><i class="fa fa-users"></i>房客</a>
        </li>
        <li class="col-sm-2 col-xs-4">
            <a href="#"><i class="fa fa-bell-o"></i>消息</a>
        </li>
        <li class="col-sm-2 col-xs-4">
            <a href="#"><i class="fa  fa-th-large"></i>宝箱</a>
        </li>
        <li class="col-sm-2 col-xs-4">
            <a href="#"><i class="fa fa-cogs"></i>设置</a>
        </li>
        <li class="col-sm-2 col-xs-4">
            <a href=""><i class="fa  fa-question"></i>帮助</a>
        </li>
    </ul>
    <!-- End Quick Menu -->

</div>
</div>
<div class="panel panel-default"  style="border-radius: 0;border: 0;">

    <div class="panel-body adv-table ">

        <!--<div class="clearfix">
            <div class="btn-group">
                <a href='<?/*= Url::toRoute('business/create') */?>' id="btn editable-sample_new" class="btn btn-primary">
                    新增 <i class="fa fa-plus"></i>
                </a>
            </div>
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right">
                    <li><a href="#">Print</a></li>
                    <li><a href="#">Save as PDF</a></li>
                    <li><a href="#">Export to Excel</a></li>
                </ul>
            </div>
        </div>-->
        <div class="space15"></div>
        <div class="row">
            <div class="col-md-6">
                <div class="btn-group">
                    <a href='<?= Url::toRoute('business/create') ?>' id="btn editable-sample_new" class="btn btn-primary">
                        新增 <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="dataTables_filter" id="editable-sample_filter">
                    <label>搜索： <input type="text" aria-controls="editable-sample" class="form-control medium"></label>
                </div>
            </div>
        </div>
        <table id="example0" class="table display dataTable" role="grid" aria-describedby="example0_info">
                <thead >
                <tr role="row" style="font-size: 14px;">


                    <th>
                        <a href="<?= \yii\helpers\Url::current(['sort' => (Yii::$app->request->get('sort') == 'status') ? '-status' : 'status']) ?>">状态</a>
                    </th>


                    <th ><a href="<?= \yii\helpers\Url::current(['sort' => 'title']) ?>">标题</a></th>

                    <th><a
                            href="<?= \yii\helpers\Url::current(['sort' => (Yii::$app->request->get('sort') == 'price') ? '-price' : 'price']) ?>">价格</a>
                    </th>

                    <th ><a
                            href="<?= \yii\helpers\Url::current(['sort' => (Yii::$app->request->get('sort') == 'createtime') ? '-createtime' : 'createtime']) ?>">起始时间</a>
                    </th>
                    <th class=""></th>


                <!--
                    <th class="sorting_asc" tabindex="0" aria-controls="example0" rowspan="1" colspan="1"
                        aria-sort="ascending" aria-label="Name: activate to sort column descending"
                        style="width: 133px;">Name
                    </th>-->

                </tr>
                </thead>

                <tfoot>
                <tr>
                    <th rowspan="1" colspan="1">#</th>
                    <th rowspan="1" colspan="1">标题</th>
                    <th rowspan="1" colspan="1">价格</th>
                    <th rowspan="1" colspan="1">起始时间</th>
                    <th rowspan="1" colspan="1"> </th>

                </tr>
                </tfoot>

                <tbody>
                <?php foreach ($data as $list): ?>
                    <tr>

                        <td><?= ($list['status'] == 1) ? '出售中' : '已租' ?></td>

                        <td class="">
                            <a href="<?= Url::to('@web/room/view?id=' . $list['id']) ?>"><?= Html::encode($list['title']) ?></a>

                            <p>地址：<?= Html::encode($list['address']) ?></p></td>

                        <td ><?= Html::encode($list['price']) ?></td>

                        <td><?= Html:: encode((strtotime($list['createtime']) > 0) ? date('Y-m-d', strtotime($list['createtime'])) : '未设置') ?></td>


                        <td> <?= Html::a('修改', ['update', 'id' => $list['id']], ['class' => 'btn btn-default btn-xs']) ?>
                            <?= Html::a('删除', ['delete', 'id' => $list['id']], [
                                'class' => 'btn btn-danger  btn-xs',
                                'data' => [
                                    'confirm' => '确定要删除这条商品吗？',
                                    'method' => 'post',
                                ],
                            ]) ?></td>

                        <!-- <td class="hidden-480" style="display: none">A</td>
                         <td class="hidden-480" style="display: none">A</td>
                         <td class="hidden-480" style="display: none">A</td>-->

                    </tr>
                <?php endforeach; ?>


                </tbody>
            </table>
            <div class="dataTables_info" id="example0_info" role="status" aria-live="polite">Showing 1 to 10 of 31
                entries
            </div>
            <div class="dataTables_paginate paging_simple_numbers" id="example0_paginate"><a
                    class="paginate_button previous disabled" aria-controls="example0" data-dt-idx="0" tabindex="0"
                    id="example0_previous">Previous</a><span><a class="paginate_button current" aria-controls="example0"
                                                                data-dt-idx="1" tabindex="0">1</a><a
                        class="paginate_button " aria-controls="example0" data-dt-idx="2" tabindex="0">2</a><a
                        class="paginate_button " aria-controls="example0" data-dt-idx="3" tabindex="0">3</a><a
                        class="paginate_button " aria-controls="example0" data-dt-idx="4" tabindex="0">4</a></span><a
                    class="paginate_button next" aria-controls="example0" data-dt-idx="5" tabindex="0"
                    id="example0_next">Next</a></div>
        </div>


</div>




