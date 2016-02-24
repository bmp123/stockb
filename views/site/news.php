<?php

/* @var $this yii\web\View */
use yii\helpers\Html; 

$this->title = 'Покупка и продажа неликвидов';
?>
<div class="wrap">
    <div class="container" style="text-align: center; background: #ffffff; box-shadow: 0 0 6px #9E9E9E">
        <div class="row">
            <div class="container" style="padding-bottom: 50px;"><h1 style="font-size: 30px;">Новости Stock Balance</h1></div>
        </div>
        <div class="row">
            <?php foreach ($data as $news): ?>
                <div style="margin: 3x 3x 15px 3x; border-top: 1px solid #d8d8d8; padding-top: 10px;" class="container col-lg-4">
                <p class="title"><?php echo $news->title;?></p>
                <p style="text-align: left;"><?php echo $news->content;?></p>
                <?php echo Html::a('Подробнее...', array('site/read', 'id'=>$news->id)); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
