<?php
/* @var $this FeepaymentController */
/* @var $model Feepayment */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../../js/bootstrap-datepicker.js" rel="stylesheet" type="text/css" />
<script src="../../js/bootstrap-datepicker.js" type="text/javascript"></script>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'feepayment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3 ">
		<?php echo $form->labelEx($model,'feereceiptID'); ?>
		<?php echo $form->textField($model,'feereceiptID'); ?>
		<?php echo $form->error($model,'feereceiptID'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'financialyearID'); ?>
		<?php echo $form->textField($model,'financialyearID'); ?>
		<?php echo $form->error($model,'financialyearID'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'paymentdate'); ?>
		<?php echo $form->textField($model,'paymentdate'); ?>
        
		<?php echo $form->error($model,'paymentdate'); ?>
	</div>
</div>
	<div class="row">
    <div class="span3 ">
		<?php echo $form->labelEx($model,'paymentmode'); ?>
		<?php echo $form->textField($model,'paymentmode',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'paymentmode'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'paidamount'); ?>
		<?php echo $form->textField($model,'paidamount',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'paidamount'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'adjustedamount'); ?>
		<?php echo $form->textField($model,'adjustedamount',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'adjustedamount'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3 ">
		<?php echo $form->labelEx($model,'chequedate'); ?>
		<?php echo $form->textField($model,'chequedate'); ?>
		<?php echo $form->error($model,'chequedate'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'chequenumber'); ?>
		<?php echo $form->textField($model,'chequenumber',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'chequenumber'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'bankbranch'); ?>
		<?php echo $form->textField($model,'bankbranch',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'bankbranch'); ?>
	</div>
</div>
	<div class="row">
		<div class="span 3">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textArea($model,'remarks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'remarks'); ?>
	</div>
    </div>
	<div class="row">
		<?php echo $form->labelEx($model,'dateadded'); ?>
		<?php echo $form->textField($model,'dateadded'); ?>
		<?php echo $form->error($model,'dateadded'); ?>
	</div>
	<div class="row buttons">
		<button class="bt btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->