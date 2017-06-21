<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Carousel;

$this->title = 'Главная';
//$this->params['breadcrumbs'][] = $this->title;

$carousel = [
	[
		'content' => '<img class="center-block" src="http://localhost/basic/web/img/carousel/books1.jpg"/>',
		'caption' => '<h1>Алиса в Стране чудес</h1>',
		
	],
	[
		'content' => '<img class="center-block" src="http://localhost/basic/web/img/carousel/books2.jpg"/>',
		'caption' => '<h1>Хоббит: Нежданное путешествие</h1>',
		
	],
	[
		'content' => '<img class="center-block" src="http://localhost/basic/web/img/carousel/books3.jpg"/>',
		'caption' => '<h1>Гарри Поттер и Дары Смерти</h1>',
		
	],
];

echo Carousel::widget([
	'items' => $carousel,
	'options' => ['class' => 'carousel slide', 'data-interval' => '5000'],
	'controls' => [
	'<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
	'<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
	]
]);

?>