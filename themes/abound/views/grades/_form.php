<?php
/* @var $this GradesController */
/* @var $model Grades */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'grades-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span1">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="span1 offset1">
		<?php echo $form->labelEx($model,'minscore'); ?>
		<?php echo $form->textField($model,'minscore'); ?>
		<?php echo $form->error($model,'minscore'); ?>
	</div>
    </div>

	<div class="row buttons">
		<button class="btn-primary" type="submit">create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->