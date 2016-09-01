<?php
/* @var $this ArticleDetailController */
/* @var $model ArticleDetail */

$this->breadcrumbs=array(
	'Article Details'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ArticleDetail', 'url'=>array('index')),
	array('label'=>'Create ArticleDetail', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#article-detail-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Article Details</h1>

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
	'id'=>'article-detail-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'article_id',
		'marathi_content',
		'english_content',
		'thumbnail1',
		'thumbnail2',
		/*
		'thumbnail3',
		'thumbnail4',
		'date_added',
		'date_modfied',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
