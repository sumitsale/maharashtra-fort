<?php
/* @var $this GalleryController */
/* @var $data Gallery */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dat_added')); ?>:</b>
	<?php echo CHtml::encode($data->dat_added); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_modfied')); ?>:</b>
	<?php echo CHtml::encode($data->date_modfied); ?>
	<br />


</div>