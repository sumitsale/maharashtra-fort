<?php
/* @var $this GalleryDetailController */
/* @var $model GalleryDetail */

$this->breadcrumbs=array(
	'Gallery Details'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List GalleryDetail', 'url'=>array('index')),
	array('label'=>'Create GalleryDetail', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#gallery-detail-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Gallery Details</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gallery-detail-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'gallery_id',
		'thumbnail',
		'title',
		'date_added',
		'date_modifed',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
