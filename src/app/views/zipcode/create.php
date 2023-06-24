<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Zipcode $model */

$this->title = Yii::t('app', 'Create Zipcode');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Zipcodes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zipcode-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
