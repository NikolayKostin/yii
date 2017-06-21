<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\HtmlPurifier;
?>

<div>
	<?php
	if($model->picture_path) {
		echo Yii::$app->formatter->asImage('@web/img/news/'.$model->picture_path, ['width' => 100]);
	} else {
		echo Yii::$app->formatter->asImage('@web/img/news/deault', ['width' => 100]);
	}
	//здесь локаль и дату еще и ссылку на полностью статью
	?>
</div>
<div>
	<?php //название статьи
	echo yii\helpers\Html::a($model->title, Url::to('news/'.$model->id));
	echo HtmlPurifier::process($model->text);
	?>
</div>
<div>
	<?php
		Yii::$app->formatter->locale = 'ru_RU';
		echo Yii::$app->formatter->asDate($model->date, 'locale');
	?>
</div>