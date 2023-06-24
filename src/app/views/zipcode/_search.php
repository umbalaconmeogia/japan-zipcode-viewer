<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ZipcodeSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="zipcode-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'local_public_entity_code') ?>

    <?= $form->field($model, 'old_zip_code') ?>

    <?= $form->field($model, 'zip_code') ?>

    <?= $form->field($model, 'prefecture_name_kana') ?>

    <?php // echo $form->field($model, 'city_ward_town_village_name_kana') ?>

    <?php // echo $form->field($model, 'town_area_name_kana') ?>

    <?php // echo $form->field($model, 'prefecture_name_kanji') ?>

    <?php // echo $form->field($model, 'city_ward_town_village_name_kanji') ?>

    <?php // echo $form->field($model, 'town_area_name_kanji') ?>

    <?php // echo $form->field($model, 'multiple_zip_code') ?>

    <?php // echo $form->field($model, 'has_banchi') ?>

    <?php // echo $form->field($model, 'has_chome') ?>

    <?php // echo $form->field($model, 'multiple_town_area') ?>

    <?php // echo $form->field($model, 'modified') ?>

    <?php // echo $form->field($model, 'modified_reason') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
