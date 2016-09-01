<?php
/* @var $this GalleryDetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gallery Details',
);

$this->menu=array(
	array('label'=>'Create GalleryDetail', 'url'=>array('create')),
	array('label'=>'Manage GalleryDetail', 'url'=>array('admin')),
);
?>

<h1>Gallery Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
