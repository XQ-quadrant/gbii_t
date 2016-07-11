<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-5-19
 * Time: 上午6:45
 */

use yii\widgets\ActiveForm;
use common\widgets\file_upload\FileUpload;   //引入扩展
use yii\helpers\Html;
$template = '{label}<div class="col-sm-10">{input}{error}{hint}</div>';
$label = ['class'=>"col-lg-2 col-sm-2 control-label"];
//echo FileUpload::widget('common\widgets\file_upload\FileUpload',['config'=>['value'=>'ccc']]) ;
?>
<div class="col-lg-10">
    <section class="panel">
        <header class="panel-heading">
            房东身份验证
        </header>
        <div class="panel-body">
            <?php $form = ActiveForm::begin(['options' => ['class'=>'form-horizontal']]); ?>
            <!--<form class="form-horizontal" role="form">-->

                <?= $form->field($model, 'weibo',['template' => $template])->textInput(['maxlength' => true,'class'=>"form-control "])->label(null,$label) ?>


                <?= $form->field($model, 'infro',['template' => $template])->textarea(['rows' => 6,'class'=>"form-control "])->label(null,$label) ?>




                <?= $form->field($model, 'name',['template' => $template])->textInput(['maxlength' => true,'class'=>"form-control md-input"])->label(null,$label) ?>

                <?= $form->field($model, 'tel',['template' => $template])->textInput(['maxlength' => true,'class'=>"form-control md-input"])->label(null,$label) ?>

                <?= $form->field($model, 'person_id',['template' => $template])->textInput(['maxlength' => true,'class'=>"form-control "])->label(null,$label) ?>


                <br />
            <p>房东必须通过身份证验证 </p>


                    <div class="col-sm-10 fileupload fileupload-new" data-provides="fileupload">
                        <?= $form->field($model, 'person_card')->widget('common\widgets\file_upload\FileUpload',[
                            'config'=>[]
                        ]) ?>

                    </div>



                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <?= Html::submitButton($model->isNewRecord ? '保存' : '保存', ['class' => $model->isNewRecord ? 'btn ' : 'btn ']) ?>


                    </div>
                </div>
                    <?php ActiveForm::end(); ?>
        </div>
    </section>

</div>



</div>