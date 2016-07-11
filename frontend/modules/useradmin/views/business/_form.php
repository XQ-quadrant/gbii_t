<?php
//namespace frontend\modules\useradmin\views\business ;
use yii\web\View;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
use yii\helpers\Url;
use common\widgets\ueditor\UEditor;
//use common\widgets\webuploader\MultiImage;
//use iisns\webuploader\MultiImage;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model common\models\Room */
/* @var $form yii\widgets\ActiveForm */
//$this->registerJsFile('@web/kode/js/bootstrap-select/bootstrap-select.js',['depends'=>['frontend\assets\KodeAsset']]);
//$this->registerJsFile('@web/kode/js/bootstrap-toggle/bootstrap-toggle.min.js',['depends'=>['frontend\assets\KodeAsset']]);
//$this->registerJsFile('@web/kode/js/moment/moment.min.js',['depends'=>['frontend\assets\KodeAsset']]);

/*$this->registerCssFile('@web/media/css/select2_metro.css',[ 'depends'=> 'frontend\assets\MetronicAsset']);
$this->registerCssFile('@web/media/css/chosen.css',[ 'depends'=> 'frontend\assets\MetronicAsset']);
$this->registerJsFile('@web/media/js/chosen.jquery.min.js',['depends'=>['frontend\assets\MetronicAsset']]);
$this->registerJsFile('@web/media/js/select2.min.js',['depends'=>['frontend\assets\MetronicAsset']]);
$this->registerJsFile('@web/media/js/jquery.tagsinput.min.js',['depends'=>['frontend\assets\MetronicAsset']]);
$this->registerJsFile('@web/media/js/jquery.multi-select.js',['depends'=>['frontend\assets\MetronicAsset']]);

/*$this->registerJs("
        jQuery(document).ready(function() {

		   // initiate layout and plugins

		   App.init();

		   FormValidation.init();

		});",View::POS_END);
$template = '{label}<div class="col-sm-10">{input}</div>{error}{hint}';
*/
$template = '{label}<div class="col-sm-10">{input}{error}{hint}</div>';
$label = ['class'=>"col-sm-2 text-c control-label form-label"];

?>

<div class="room-form form-horizontal">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype'=>'multipart/form-data'],
    ]); /*$form->options['id']='form-horizontal'; *//* var_dump($form->options);die();*/ ?>

    <?= $form->field($model, 'title',['template' => $template])->textInput(['maxlength' => true,'class'=>"form-control md-input"])->label(null,$label) ?>

    <?= $form->field($model, 'price',['template' => $template])->input('number',['class'=>"form-control sm-input"])->label(null,$label) ?>


    <?= $form->field($model, 'connect',['template' => $template])->textInput(['maxlength' => true,'class'=>"form-control sm-input "])->label(null,$label) ?>

    <?= $form->field($model, 'atrribute',['template' => $template])->dropDownList(['单间/套一'=>'单间/套一','独栋'=>'独栋','套二'=>'套二','套三'=>'套三','套四'=>'套四','套五'=>'套五'],['class'=>"form-control select2-container span3"])->label(null,$label) ?>

    <?= $form->field($model, 'area',['template' => $template])->input('number',['class'=>"form-control sm-input"])->label(null,$label) ?>
    <?= $form->field($model, 'address',['template' => $template])->textInput(['maxlength' => true,'class'=>"form-control md-input "])->label(null,$label) ?>
    <!--<div class="form-group field-room-facility">
        <label class="col-sm-2 control-label form-label " >设施</label>

        <div class="col-sm-10"><input type="hidden" name="Room[facility]" value="">

            <div  class="checkbox checkbox-inline">
                <input type="checkbox" name="Room[facility][]" value="空调" checked><label> 空调</label>
            </div>
            <div  class="checkbox checkbox-inline">
                <input type="checkbox" name="Room[facility][]" value="热水"><label> 热水</label>
            </div>
            <div  class="checkbox checkbox-inline">
                <input type="checkbox" name="Room[facility][]" value="网络"><label> 网络</label>
            </div>
            <div  class="checkbox checkbox-inline">
                <input type="checkbox" name="Room[facility][]" value="衣柜"><label> 衣柜</label>
            </div>
            <div  class="checkbox checkbox-inline">
                <input type="checkbox" name="Room[facility][]" value="电梯"><label> 电梯</label>
            </div>
            <div  class="checkbox checkbox-inline">
                <input type="checkbox" name="Room[facility][]" value="向阳"><label> 向阳</label>
            </div>
        </div>
        <div class="help-block"></div>
    </div>-->
    <!--<div class="flat-green single-row">
        <div class="radio ">
            <div class="icheckbox_flat-green checked" style="position: relative;">
                <input type="checkbox" checked="" style="position: absolute; opacity: 0;">
                <ins class="iCheck-helper" ></ins>
            </div>
            <label>Green Checkbox </label>
        </div>
    </div>-->
    <?php echo $form->field($model, 'facility',['template' => $template])->checkBoxList(
        ['空调'=>'空调','热水'=>'热水','网络'=>'网络','衣柜'=>'衣柜','电梯'=>'电梯','向阳'=>'向阳'],
        ['class'=>'icheckbox_flat-green checked',])
        ->label(null,['class'=>"col-sm-2 control-label form-label "]) ?>

    <?= $form->field($model, 'userlimit',['template' => $template])->input('number',['class'=>"form-control sm-input"])->label(null,$label) ?>
    <?= $form->field($model, 'pay',['template' => $template])->dropDownList(['面议'=>'面议','押一付一'=>'押一付一','押一付二'=>'押一付二','押一付三'=>'押一付三'],['class'=>"select2-container span3"])->label(null,$label) ?>

    <?= $form->field($model, 'content',['template' => $template,])->label(null,$label)->widget(UEditor::className(),['class'=>'col-sm-10 form-control uedite-warp','id'=>'content','name'=>'content',])  ?>


        <div class="fileupload fileupload-new" data-provides="fileupload">
            <?= $form->field($model, 'pic',['template' => $template])->widget('common\widgets\file_upload\FileUpload',[
                'config'=>[]
            ])->label(null,$label) ?>

        </div>


    <!--<div class="form-actions">

        <button type="submit" class="btn green">Validate</button>

        <button type="button" class="btn">Cancel</button>

    </div>-->
    <div class="form-actions">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '保存', ['class' => $model->isNewRecord ? 'btn btn-success green' : 'btn btn-primary green']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
