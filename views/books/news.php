<?php
/* @var $this yii\web\View */
use yii\widgets\ListView;

$this->title = 'О книгах';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Описания</h1>
<?php 
	echo ListView::widget([
		'dataProvider' => $data,
		'itemView' => '_news',
		]);
?>