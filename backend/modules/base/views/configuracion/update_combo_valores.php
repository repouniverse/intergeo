<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\masters\Combovalores */

$this->title = Yii::t('app', 'Update Combovalores: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Combovalores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="combovalores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_combo_valores', [
        'model' => $model,
    ]) ?>

</div>
