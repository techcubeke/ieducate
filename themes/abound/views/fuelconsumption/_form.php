<?php
/* @var $this FuelconsumptionController */
/* @var $model Fuelconsumption */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fuelconsumption-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    	<div class="span3">
		<?php echo $form->labelEx($model,'vehicleID'); ?>
		<?php echo $form->textField($model,'vehicleID'); ?>
		<?php echo $form->error($model,'vehicleID'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'fuelconsumed'); ?>
		<?php echo $form->textField($model,'fuelconsumed',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'fuelconsumed'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'consumeddate'); ?>
		<?php echo $form->textField($model,'consumeddate'); ?>
		<?php echo $form->error($model,'consumeddate'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->