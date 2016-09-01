<?php
/* @var $this ArticleDetailController */
/* @var $model ArticleDetail */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'article-detail-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'article_id'); ?>
		<?php echo $form->hiddenField($model,'article_id',array('value'=>$id)); ?>
		<?php echo $form->error($model,'article_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marathi_content'); ?>
		<?php //echo $form->textArea($model,'marathi_content',array('rows'=>10, 'cols'=>100)); ?>

<?php 
	Yii::import('ext.CKEditorWidget.CKEditorWidget');

	$this->widget('CKEditorWidget', array(
    'model' => $model,
    'attribute' => 'marathi_content',
    // editor options http://docs.ckeditor.com/#!/api/CKEDITOR.config
    'config' => array(
        'language' => 'ru',
    ),
));

?> <?php /*
            $this->widget('application.components.widgets.XHeditor',array(
                'model'=>$model,
                'modelAttribute'=>'ArticleDetail[marathi_content]',
                'showModelAttributeValue'=>false, // defaults to true, displays the value of $modelInstance->attribute in the textarea
                // 'value'=>$model->activity,
				'config'=>array(
                    'id'=>'xh1',
                    'name'=>'ArticleDetail[marathi_content]',
                    'tools'=>'mini', // mini, simple, fill or from XHeditor::$_tools
                    'width'=>'60%',
                    //see XHeditor::$_configurableAttributes for more
                ),
				'contentValue'=>$model->marathi_content,
            )); */
            ?>




		<?php echo $form->error($model,'marathi_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'english_content'); ?>
		<?php echo $form->textArea($model,'english_content',array('rows'=>10, 'cols'=>100)); ?>

 <?php /*
            $this->widget('application.components.widgets.XHeditor',array(
                'model'=>$model,
                'modelAttribute'=>'ArticleDetail[english_content]',
                'showModelAttributeValue'=>false, // defaults to true, displays the value of $modelInstance->attribute in the textarea
                // 'value'=>$model->activity,
				'config'=>array(
                    'id'=>'xh2',
                    'name'=>'ArticleDetail[english_content]',
                    'tools'=>'mini', // mini, simple, fill or from XHeditor::$_tools
                    'width'=>'60%',
                    //see XHeditor::$_configurableAttributes for more
                ),
				'contentValue'=>$model->english_content,
            )); */
            ?>

		<?php echo $form->error($model,'english_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thumbnail1'); ?>
		<?php echo $form->fileField($model,'thumbnail1',array('size'=>60,'maxlength'=>512)); ?>
		<br>
		<img src="<?php echo Yii::app()->homeurl  . '/../../admin/images/articledetail/'. $model->thumbnail1 ?>">
		
		<?php echo $form->error($model,'thumbnail1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thumbnail2'); ?>
		<?php echo $form->fileField($model,'thumbnail2',array('size'=>60,'maxlength'=>512)); ?>
		<br>
		<img src="<?php echo Yii::app()->homeurl  . '/../../admin/images/articledetail/'. $model->thumbnail2 ?>">
		
		<?php echo $form->error($model,'thumbnail2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thumbnail3'); ?>
		<?php echo $form->fileField($model,'thumbnail3',array('size'=>60,'maxlength'=>512)); ?>
		<br>
		<img src="<?php echo Yii::app()->homeurl  . '/../../admin/images/articledetail/'. $model->thumbnail3 ?>">
		
		<?php echo $form->error($model,'thumbnail3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thumbnail4'); ?>
		<?php echo $form->fileField($model,'thumbnail4',array('size'=>60,'maxlength'=>512)); ?>
		<br>
		<img src="<?php echo Yii::app()->homeurl  . '/../../admin/images/articledetail/'. $model->thumbnail4 ?>">
		
		<?php echo $form->error($model,'thumbnail4'); ?>
	</div>
<!--
	<div class="row">
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