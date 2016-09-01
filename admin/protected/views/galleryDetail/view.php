<?php
/* @var $this GalleryDetailController */
/* @var $model GalleryDetail */

$this->breadcrumbs=array(
	'Gallery Details'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List GalleryDetail', 'url'=>array('index')),
	array('label'=>'Create GalleryDetail', 'url'=>array('create')),
	array('label'=>'Update GalleryDetail', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GalleryDetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GalleryDetail', 'url'=>array('admin')),
);
?>

<h1>View GalleryDetail #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'gallery_id',
		'thumbnail',
		'title',
		'date_added',
		'date_modifed',
	),
)); ?>
