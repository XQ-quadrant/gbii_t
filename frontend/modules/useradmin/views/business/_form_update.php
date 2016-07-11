<?php
//namespace frontend\modules\useradmin\views\business ;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
use yii\captcha\Captcha;
use common\widgets\ueditor\UEditor;
use common\widgets\webuploader\MultiImage;
use yii\helpers\Url;
//use iisns\webuploader\MultiImage;
use shiyang\masonry\Masonry;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model common\models\Room */
/* @var $form yii\widgets\ActiveForm */
$template = '{label}<div class="col-sm-10">{input}{error}{hint}</div>';
$label = ['class'=>"col-sm-2 text-c control-label form-label"];
//$this->registerCssFile('@web/css/imageuploader.css',[ 'depends'=> 'frontend\assets\MetronicAsset'],$this::POS_END);

?>

<div class="room-form form-horizontal">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype'=>'multipart/form-data'],
    ]); /*$form->options['id']='form-horizontal'; *//* var_dump($form->options);die();*/ ?>
    <?= $form->field($model, 'title',['template' => $template])->textInput(['maxlength' => true,'class'=>"form-control md-input"])->label(null,$label)  ?>

    <?= $form->field($model, 'price',['template' => $template])->input('number',['class'=>"form-control sm-input"])->label(null,$label) ?>


    <?= $form->field($model, 'connect',['template' => $template])->textInput(['maxlength' => true,'class'=>"form-control sm-input "])->label(null,$label) ?>

    <?= $form->field($model, 'atrribute',['template' => $template])->dropDownList(['单间/套一'=>'单间/套一','独栋'=>'独栋','套二'=>'套二','套三'=>'套三','套四'=>'套四','套五'=>'套五'],['class'=>"form-control select2-container span3"])->label(null,$label) ?>

    <?= $form->field($model, 'area',['template' => $template])->input('number',['class'=>"form-control sm-input"])->label(null,$label) ?>
    <?= $form->field($model, 'address',['template' => $template])->textInput(['maxlength' => true,'class'=>"form-control md-input "])->label(null,$label) ?>


    <?php echo $form->field($model, 'facility',['template' => $template])->checkBoxList(
        ['空调'=>'空调','热水'=>'热水','网络'=>'网络','衣柜'=>'衣柜','电梯'=>'电梯','向阳'=>'向阳'],
        ['class'=>'  icheckbox_flat-green checked',])
        ->label(null,['class'=>"col-sm-2 control-label form-label "]) ?>

    <?= $form->field($model, 'userlimit',['template' => $template])->input('number',['class'=>"form-control sm-input"])->label(null,$label) ?>
    <?= $form->field($model, 'pay',['template' => $template])->dropDownList(['面议'=>'面议','押一付一'=>'押一付一','押一付二'=>'押一付二','押一付三'=>'押一付三'],['class'=>"form-control  select2-container span3"])->label(null,$label) ?>

    <?= $form->field($model, 'content',['template' => $template])->label(null,$label)->widget(UEditor::className(),['class'=>'col-sm-10 form-control','id'=>'content','name'=>'content', ])  ?>


    <div class="fileupload fileupload-new" data-provides="fileupload">
        <?= $form->field($model, 'pic',['template' => $template])->widget('common\widgets\file_upload\FileUpload',[
            'config'=>[]
        ])->label(null,$label) ?>

    </div>

    <a href="<?= Url::toRoute(['/useradmin/business/create_pic', 'id' => $model->id]) ?>" class="btn btn-default btn-primary" data-pjax="0" target="_blank" style="margin-left: 30px">
        <span class="glyphicon glyphicon-plus"></span>添加新图片
    </a>
    <div class="img-all row">

        <?php Masonry::begin([
            'options' => [
                'id' => 'photos'
            ],
            'pagination' => $model->photos['pages']
        ]); ?>
        <?php foreach ($model->photos['photos'] as $photo): ?>
            <div class="img-item col-md-3" id="<?= $photo['id'] ?>">
                <div class="img-wrap">
                    <div class="img-edit">
                        <a href="<?= Url::toRoute(['picdelete', 'id' => $photo['id']]) ?>" data-clicklog="delete" onclick="return false;" title="<?= Yii::t('app', 'Are you sure to delete it?') ?>" >
                            <span class="img-tip"><i class="fa fa-times"></i></span>
                        </a>
                    </div>
                    <div class="img-main">
                        <a title="<?= Html::encode($photo['name']) ?>" href="<?= $photo['path']?>" data-lightbox="image-1" data-title="<?= Html::encode($photo['name']) ?>">
                            <img src="<?= $photo['path'] ?>">
                        </a>

                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <?php Masonry::end(); ?>
    </div>
<script>
    /*$(document).ready(function(){
        $(".room-form").click(function(){
            alert('haha');
        });
    });*/

  /*  $(document).ready(function(){

        $(".img-edit").click(function(event){
            alert('haha');
        });

    });*/
</script>



    <!--<div class="form-actions">

        <button type="submit" class="btn green">Validate</button>

        <button type="button" class="btn">Cancel</button>

    </div>-->
    <div class="form-actions">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '保存', ['class' => $model->isNewRecord ? 'btn btn-success green' : 'btn btn-primary green']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
