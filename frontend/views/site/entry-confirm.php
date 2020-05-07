<?php
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Phone</label>: <?= Html::encode($model->phone) ?></li>
    <li><label>Address</label>: <?= Html::encode($model->address) ?></li>

</ul>