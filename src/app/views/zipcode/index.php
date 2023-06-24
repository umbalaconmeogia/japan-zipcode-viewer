<?php

use app\models\Zipcode;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ZipcodeSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Zipcodes');
// $this->params['breadcrumbs'][] = $this->title;
$this->params['fluid'] = TRUE;
?>
<div class="zipcode-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'local_public_entity_code',
            'old_zip_code',
            'zip_code',
            'prefecture_name_kana',
            'city_ward_town_village_name_kana',
            'town_area_name_kana',
            'prefecture_name_kanji',
            'city_ward_town_village_name_kanji',
            'town_area_name_kanji',
            [
                'attribute' => 'multiple_zip_code',
                'filter' => Zipcode::multipleZipCodeOptionArr(),
                'value' => 'multipleZipCodeStr',
            ],
            [
                'attribute' => 'has_banchi',
                'filter' => Zipcode::hasBanchiOptionArr(),
                'value' => 'hasBanchiStr',
            ],
            [
                'attribute' => 'has_chome',
                'filter' => Zipcode::hasChomeOptionArr(),
                'value' => 'hasChomeStr',
            ],
            [
                'attribute' => 'multiple_town_area',
                'filter' => Zipcode::multipleTownAreaOptionArr(),
                'value' => 'multipleTownAreaStr',
            ],
            [
                'attribute' => 'modified',
                'filter' => Zipcode::modifiedOptionArr(),
                'value' => 'modifiedStr',
            ],
            [
                'attribute' => 'modified_reason',
                'filter' => Zipcode::modifiedReasonOptionArr(),
                'value' => 'modifiedReasonStr',
            ],
            // [
            //     'class' => ActionColumn::className(),
            //     'urlCreator' => function ($action, Zipcode $model, $key, $index, $column) {
            //         return Url::toRoute([$action, 'id' => $model->id]);
            //      }
            // ],
        ],
    ]); ?>


</div>
