<?php
/* @var $this GalleryDetailController */
/* @var $model GalleryDetail */

$this->breadcrumbs=array(
	'Gallery Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GalleryDetail', 'url'=>array('index')),
	array('label'=>'Manage GalleryDetail', 'url'=>array('admin')),
);
?>

<h1>Gallery Name</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'model1'=>$model1, 'id'=>$id)); ?>