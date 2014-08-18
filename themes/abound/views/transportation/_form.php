<?php
/* @var $this TransportationController */
/* @var $model Transportation */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transportation-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="span3">    
		<?php echo $form->labelEx($model,'studentID'); ?>
		<?php echo $form->textField($model,'studentID'); ?>
		<?php echo $form->error($model,'studentID'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'stopID'); ?>
		<?php echo $form->textField($model,'stopID'); ?>
		<?php echo $form->error($model,'stopID'); ?>
	</div>

	<div class="sapn3 offset2">
		<?php echo $form->labelEx($model,'ispaid'); ?>
		<?php echo $form->textField($model,'ispaid'); ?>
		<?php echo $form->error($model,'ispaid'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->