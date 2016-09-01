<?php
/* @var $this ArticleDetailController */
/* @var $model ArticleDetail */
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
		<?php echo $form->label($model,'article_id'); ?>
		<?php echo $form->textField($model,'article_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marathi_content'); ?>
		<?php echo $form->textArea($model,'marathi_content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'english_content'); ?>
		<?php echo $form->textArea($model,'english_content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thumbnail1'); ?>
		<?php echo $form->textField($model,'thumbnail1',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thumbnail2'); ?>
		<?php echo $form->textField($model,'thumbnail2',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thumbnail3'); ?>
		<?php echo $form->textField($model,'thumbnail3',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thumbnail4'); ?>
		<?php echo $form->textField($model,'thumbnail4',array('size'=>60,'maxlength'=>512)); ?>
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