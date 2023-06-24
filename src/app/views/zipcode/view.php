<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Zipcode $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Zipcodes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="zipcode-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'local_public_entity_code',
            'old_zip_code',
            'zip_code',
            'prefecture_name_kana',
            'city_ward_town_village_name_kana',
            'town_area_name_kana',
            'prefecture_name_kanji',
            'city_ward_town_village_name_kanji',
            'town_area_name_kanji',
            'multiple_zip_code',
            'has_banchi',
            'has_chome',
            'multiple_town_area',
            'modified',
            'modified_reason',
        ],
    ]) ?>

</div>
