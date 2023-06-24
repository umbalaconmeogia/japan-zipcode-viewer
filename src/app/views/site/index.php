<?php

/** @var yii\web\View $this */

use app\models\SystemSetting;
use yii\helpers\Html;
use yii\helpers\Markdown;

$this->title = Yii::$app->name;
?>
<div class="site-index">

    <h1><?= $this->title ?></h1>

    <p>This is a web page to view the zipcode data of Japan post.</p>
    <p>The data version is <?= SystemSetting::zipcodeVersion() ?></p>
    <p>To see the data list, open <?= Html::a('Zipcode list', ['zipcode/index']) ?></p>

    <h2>Preferences</h2>
    <?= Markdown::process("[Zipcode data download top](https://www.post.japanpost.jp/zipcode/download.html)") ?>
    <?= Markdown::process("[CSV download](https://www.post.japanpost.jp/zipcode/dl/kogaki-zip.html)") ?>
    <?= Markdown::process("[CSV header description](https://www.post.japanpost.jp/zipcode/dl/readme.html)") ?>
</div>