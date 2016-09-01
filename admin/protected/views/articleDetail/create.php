<?php
/* @var $this ArticleDetailController */
/* @var $model ArticleDetail */

$this->breadcrumbs=array(
	'Article Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ArticleDetail', 'url'=>array('index')),
	array('label'=>'Manage ArticleDetail', 'url'=>array('admin')),
);
?>

<h1>Create ArticleDetail</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'id'=>$id)); ?>