<?php  
use yii\helpers\Html;  
use yii\widgets\ListView;  
  
$this->title = '测试';  
$this->params['breadcrumbs'][] = $this->title;  
?>  
<h1>测试</h1>  
<ul>  
<?php  
echo ListView::widget([
     'dataProvider' => $dataProvider,
     'itemOptions' => ['class' => 'item'],
     'itemView' => '_item',
     'pager' => [
        'class' => \kop\y2sp\ScrollPager::className(),
        'triggerText' => '<a class="btn btn-danger">加载更多</a>',
        'triggerOffset' => 10,
        'noneLeftText' => '没有更多数据了',
     ]
]);