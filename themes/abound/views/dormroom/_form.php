<?php
/* @var $this DormroomController */
/* @var $model Dormroom */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dormroom-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'dormname'); ?>
		<?php echo $form->textField($model,'dormname',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'dormname'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'beds'); ?>
		<?php echo $form->textField($model,'beds'); ?>
		<?php echo $form->error($model,'beds'); ?>
	</div>
</div>
	<div class="row buttons">
    <button class="btn-success" type="submit" >save	</button>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->