<?php
/* @var $this ArticleDetailController */
/* @var $model ArticleDetail */

$this->breadcrumbs=array(
	'Article Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ArticleDetail', 'url'=>array('index')),
	array('label'=>'Create ArticleDetail', 'url'=>array('create')),
	array('label'=>'Update ArticleDetail', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ArticleDetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ArticleDetail', 'url'=>array('admin')),
);
?>

<h1>View ArticleDetail #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'article_id',
		'marathi_content',
		'english_content',
		'thumbnail1',
		'thumbnail2',
		'thumbnail3',
		'thumbnail4',
		'date_added',
		'date_modfied',
	),
)); ?>
