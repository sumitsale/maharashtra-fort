<?php
/* @var $this ArticleDetailController */
/* @var $data ArticleDetail */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('article_id')); ?>:</b>
	<?php echo CHtml::encode($data->article_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marathi_content')); ?>:</b>
	<?php echo CHtml::encode($data->marathi_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('english_content')); ?>:</b>
	<?php echo CHtml::encode($data->english_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumbnail1')); ?>:</b>
	<?php echo CHtml::encode($data->thumbnail1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumbnail2')); ?>:</b>
	<?php echo CHtml::encode($data->thumbnail2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumbnail3')); ?>:</b>
	<?php echo CHtml::encode($data->thumbnail3); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('thumbnail4')); ?>:</b>
	<?php echo CHtml::encode($data->thumbnail4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_added')); ?>:</b>
	<?php echo CHtml::encode($data->date_added); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_modfied')); ?>:</b>
	<?php echo CHtml::encode($data->date_modfied); ?>
	<br />

	*/ ?>

</div>