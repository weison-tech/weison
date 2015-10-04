<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\SystemLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'System Logs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="system-log-index">

    <p>
        <?php echo Html::a(Yii::t('backend', 'Clear'), false, ['class' => 'btn btn-danger', 'data-method'=>'delete']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'level',
                'value'=>function ($model) {
                    return \yii\log\Logger::getLevelName($model->level);
                },
                'filter'=>[
                    \yii\log\Logger::LEVEL_ERROR => Yii::t('backend', 'error'),
                    \yii\log\Logger::LEVEL_WARNING => Yii::t('backend', 'warning'),
                    \yii\log\Logger::LEVEL_INFO => Yii::t('backend', 'info'),
                    \yii\log\Logger::LEVEL_TRACE => Yii::t('backend', 'trace'),
                    \yii\log\Logger::LEVEL_PROFILE_BEGIN => Yii::t('backend', 'profile begin'),
                    \yii\log\Logger::LEVEL_PROFILE_END => Yii::t('backend', 'profile end'),
                ]
            ],
            'category',
            'prefix',
            [
                'attribute' => 'log_time',
                'format' => 'datetime',
                'value' => function ($model) {
                    return (int) $model->log_time;
                }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view}{delete}'
            ]
        ]
    ]); ?>

</div>
