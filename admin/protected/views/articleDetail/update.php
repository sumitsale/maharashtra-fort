<?php
/* @var $this ArticleDetailController */
/* @var $model ArticleDetail */

$this->breadcrumbs=array(
	'Article Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ArticleDetail', 'url'=>array('index')),
	array('label'=>'Create ArticleDetail', 'url'=>array('create')),
	array('label'=>'View ArticleDetail', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ArticleDetail', 'url'=>array('admin')),
);
?>

<h1>Update ArticleDetail <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>