<?php

/* @var $this yii\web\View */
use yii\helpers\Html; 

$this->title = 'Покупка и продажа неликвидов';
?>
<div class="wrap">
    <div class="container" style="text-align: center; background: #ffffff; box-shadow: 0 0 6px #9E9E9E">
        <div class="row">
            <div class="container" style="padding-bottom: 50px;"><h1 style="font-size: 30px;">Номенклатура</h1></div>
        </div>
        <div class="row">
            <table class="table table-striped table-hover">
                <tr>
                    <td>id</td>
                    <td>Категория</td>
                    <td>Фирма</td>
                    <td>Название</td>
                    <td>Цена</td>
                    <td>кол-во</td>
                </tr>
                <?php foreach ($data as $nomen): ?>
                <tr>
                    <td><?php echo Html::a($nomen->id, array('site/read', 'id'=>$nomen->id)); ?></td>
                    <td><?php echo Html::a($nomen->category, array('site/read', 'id'=>$nomen->id)); ?></td>
                    <td><?php echo Html::a($nomen->firm, array('site/read', 'id'=>$nomen->id)); ?></td>
                    <td><?php echo Html::a($nomen->name, array('site/read', 'id'=>$nomen->id)); ?></td>
                    <td><?php echo Html::a($nomen->price, array('site/read', 'id'=>$nomen->id)); ?></td>
                    <td><?php echo Html::a($nomen->qu, array('site/read', 'id'=>$nomen->id)); ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
         </div>
    </div>
</div>
