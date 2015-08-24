<?php  
use yii\helpers\Html;  
use yii\helpers\HtmlPurifier;  
?>  
<div class="post">  
    <strong><?= Html::encode($model->id) ?></strong>  
    <p><?=$model->title?></p>
    <p><?=$model->content?></p>
    <p><?=$model->tags?></p>
</div>  