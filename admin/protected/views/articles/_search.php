<?php
/* @var $this ArticlesController */
/* @var $model Articles */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thumbnail_popular'); ?>
		<?php echo $form->textField($model,'thumbnail_popular',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thumbnail_recent'); ?>
		<?php echo $form->textField($model,'thumbnail_recent',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'donation'); ?>
		<?php echo $form->textField($model,'donation',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'donaton_out_off'); ?>
		<?php echo $form->textField($model,'donaton_out_off',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'district'); ?>
		<?php echo $form->textField($model,'district',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_added'); ?>
		<?php echo $form->textField($model,'date_added'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_modfied'); ?>
		<?php echo $form->textField($model,'date_modfied'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->