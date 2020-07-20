<?php
use common\helpers\h;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\modules\base\Module as m;

/* @var $this yii\web\View */
/* @var $model common\models\masters\Combovalores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="combovalores-form">

    <?php $form = ActiveForm::begin(); ?>

     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
       <?= $form->field($model, 'nombretabla')->
            dropDownList(h::getCboTables(),
                    ['prompt'=>'--'.yii::t('backend.base','Save')."--",
                    // 'class'=>'probandoSelect2',
                        ]
                    ) ?>
    
    </div>
    
    
   
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'codigo')->textInput(['maxlength' => true]) ?>
</div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'valor')->textInput(['maxlength' => true]) ?>
</div>
    
    <div class="form-group">
        <?= Html::submitButton(m::t('verbs', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
