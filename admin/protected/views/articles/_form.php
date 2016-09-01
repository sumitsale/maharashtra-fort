<?php
/* @var $this ArticlesController */
/* @var $model Articles */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'articles-form',
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
		<?php echo $form->labelEx($model,'thumbnail_popular'); ?>
		<?php echo $form->fileField($model,'thumbnail_popular',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'thumbnail_popular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thumbnail_recent'); ?>
		<?php echo $form->fileField($model,'thumbnail_recent',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'thumbnail_recent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'donation'); ?>
		<?php echo $form->textField($model,'donation',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'donation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'donaton_out_off'); ?>
		<?php echo $form->textField($model,'donaton_out_off',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'donaton_out_off'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php //echo $form->textField($model,'date'); ?>
		

<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'name'=>'Articles[date]',
			'model'=>$model,
			'value'=>$model->date!='' ? date('Y-m-d', strtotime($model->date)) : '',
		// additional javascript options for the date picker plugin
		'options'=>array(
		'dateFormat'=>'yy-m-dd',
		'showAnim'=>'fold',
		'changeYear' => true,
		'changeMonth' => true
		
						),
						'htmlOptions'=>array(
							'style'=>'height:20px;',
							'readonly'=>'true' 

						),
					));

		?>



		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'district'); ?>
		<?php echo $form->textField($model,'district',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'district'); ?>
	</div>

<!--	<div class="row">
		<?php echo $form->labelEx($model,'date_added'); ?>
		<?php echo $form->textField($model,'date_added'); ?>
		<?php echo $form->error($model,'date_added'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_modfied'); ?>
		<?php echo $form->textField($model,'date_modfied'); ?>
		<?php echo $form->error($model,'date_modfied'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->