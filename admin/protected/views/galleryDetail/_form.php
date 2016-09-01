<?php
/* @var $this GalleryDetailController */
/* @var $model GalleryDetail */
/* @var $form CActiveForm */
?>

<h1>

<?php 
	$gallery=Gallery::model()->findByAttributes(array('id' => $id));

	echo $gallery->name;
?>


</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gallery-detail-grid',
	'dataProvider'=>$model1->search($id),
	'filter'=>$model1,
	'columns'=>array(
		//'id',
		//'gallery_id',
		'thumbnail',
		'title',
		'date_added',
		'date_modifed',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>




<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gallery-detail-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data')
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'gallery_id'); ?>
		<?php echo $form->hiddenField($model,'gallery_id', array('value'=>$id)); ?>
		<?php echo $form->error($model,'gallery_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thumbnail'); ?>
		<?php echo $form->fileField($model,'thumbnail',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'thumbnail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

<!--	<div class="row">
		<?php echo $form->labelEx($model,'date_added'); ?>
		<?php echo $form->textField($model,'date_added'); ?>
		<?php echo $form->error($model,'date_added'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_modifed'); ?>
		<?php echo $form->textField($model,'date_modifed'); ?>
		<?php echo $form->error($model,'date_modifed'); ?>
	</div>
-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->