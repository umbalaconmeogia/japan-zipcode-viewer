<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Zipcode $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="zipcode-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'local_public_entity_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'old_zip_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zip_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prefecture_name_kana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_ward_town_village_name_kana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'town_area_name_kana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prefecture_name_kanji')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_ward_town_village_name_kanji')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'town_area_name_kanji')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'multiple_zip_code')->textInput() ?>

    <?= $form->field($model, 'has_banchi')->textInput() ?>

    <?= $form->field($model, 'has_chome')->textInput() ?>

    <?= $form->field($model, 'multiple_town_area')->textInput() ?>

    <?= $form->field($model, 'modified')->textInput() ?>

    <?= $form->field($model, 'modified_reason')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
