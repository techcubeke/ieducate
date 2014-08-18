<?php
/* @var $this StopdetailsController */
/* @var $model Stopdetails */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stopdetails-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    	<div class="span3">	
		<?php echo $form->labelEx($model,'routeID'); ?>
		<?php echo $form->textField($model,'routeID'); ?>
		<?php echo $form->error($model,'routeID'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'stopname'); ?>
		<?php echo $form->textField($model,'stopname',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'stopname'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'fare'); ?>
		<?php echo $form->textField($model,'fare',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'fare'); ?>
	</div>
</div>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'arrivalmrng'); ?>
		<?php echo $form->textField($model,'arrivalmrng'); ?>
		<?php echo $form->error($model,'arrivalmrng'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'depaturemrng'); ?>
		<?php echo $form->textField($model,'depaturemrng'); ?>
		<?php echo $form->error($model,'depaturemrng'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'arrivalevng'); ?>
		<?php echo $form->textField($model,'arrivalevng'); ?>
		<?php echo $form->error($model,'arrivalevng'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'depatureevng'); ?>
		<?php echo $form->textField($model,'depatureevng'); ?>
		<?php echo $form->error($model,'depatureevng'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->