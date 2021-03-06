<?php
/* @var $this SliderController */
/* @var $model Slider */

$this->breadcrumbs=array(
	'Sliders'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Slider', 'url'=>array('index')),
	array('label'=>'Create Slider', 'url'=>array('create')),
	array('label'=>'View Slider', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Slider', 'url'=>array('admin')),
);
?>

<h1>Update Slider <?php echo $model->id; ?></h1>

<?php //$this->renderPartial('_form', array('model'=>$model)); ?>


<?php
/* @var $this SliderController */
/* @var $model Slider */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'slider-form',
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
		<?php echo $form->labelEx($model,'thumbnail'); ?>
		<?php echo $form->fileField($model,'thumbnail',array('size'=>60,'maxlength'=>512)); ?>
		<br><a target="_blank" href="<?php echo Yii::app()->homeurl  . '/../../admin/images/slider/'. $model->thumbnail ?>">
			<?php echo $model->thumbnail; ?>
		</a>	
		<?php echo $form->error($model,'thumbnail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<!--<div class="row">
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