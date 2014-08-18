<?php
/* @var $this StopdetailsController */
/* @var $model Stopdetails */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<div class="span3">
		<?php echo $form->label($model,'stopID'); ?>
		<?php echo $form->textField($model,'stopID'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->label($model,'routeID'); ?>
		<?php echo $form->textField($model,'routeID'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->label($model,'stopname'); ?>
		<?php echo $form->textField($model,'stopname',array('size'=>60,'maxlength'=>120)); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn-primary" type="submit">Submit</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->