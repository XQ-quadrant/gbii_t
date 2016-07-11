<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Userinfo */
/* @var $form yii\widgets\ActiveForm */


?>
<div class="tab-pane row-fluid profile-account" id="tab_1_3">

    <div class="row">
            <div class="col-md-9">
                <section class="panel">
                    <header class="panel-heading custom-tab ">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#about" data-toggle="tab">基本信息</a>
                            </li>
                            <!--<li class="">
                                <a href="#home" data-toggle="tab">About</a>
                            </li>

                            <li class="">
                                <a href="#contact" data-toggle="tab">Contact</a>
                            </li>-->
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="about">
                                <?php $form = ActiveForm::begin(); ?>
                                <div class="tab-content">

                                    <div id="tab_1-1" class="tab-pane active">

                                        <div style="height: auto;" id="accordion1-1" class="accordion ">


                                            <?= $form->field($model, 'icon')->textInput(['rows' => 6,'class'=>"form-control md-input"]) ?>
                                            <?= $form->field($model, 'icon')->textInput(['rows' => 6,'class'=>"form-control md-input"]) ?>

                                            <?= $form->field($model, 'school')->textInput(['maxlength' => true,'class'=>"form-control md-input"]) ?>

                                            <?= $form->field($model, 'intro')->textarea(['rows' => 6,'class'=>"form-control md-input"]) ?>


                                            <div class="submit-btn">
                                                <?= Html::submitButton($model->isNewRecord ? '保存' : '保存', ['class' => $model->isNewRecord ? 'btn btn-primary ' : 'btn btn-primary']) ?>


                                            </div>


                                        </div>

                                    </div>

                                </div>
                                <?php ActiveForm::end(); ?>                            </div>
                            <div class="tab-pane " id="home">
                                <div class="panel">
                                    <div class="panel-body">
                                        <h1 class="text-center cmnt-head ">Leave a Comments</h1>
                                        <p class="text-center fade-txt">If you want you can <a href="#">Cancel Reply</a></p>

                                        <form role="form" class="form-horizontal leave-cmnt">
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <input type="text" class="col-lg-12 form-control" placeholder="Name *">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <input type="text" class="col-lg-12 form-control" placeholder="Email *">
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <textarea class=" form-control" rows="8" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <p>
                                                <button class="btn btn-post-cmnt pull-right" type="submit">Post Comment</button>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="contact">Contact</div>
                        </div>
                    </div>
                </section>

            </div>



            <!--end span9-->



    </div>

</div>

