<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form CActiveForm */
?>
<link
	href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'student-form',
			'enableAjaxValidation'=>false,
)); ?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="span3 ">
			<?php echo $form->labelEx($model,'academicsessionID'); ?>
			<?php echo $form->textField($model,'academicsessionID'); ?>
			<?php echo $form->error($model,'academicsessionID'); ?>
		</div>
		<div class="span3 offset1">
			<?php echo $form->labelEx($model,'classID'); ?>
			<?php echo $form->textField($model,'classID'); ?>
			<?php echo $form->error($model,'classID'); ?>
		</div>
		<div class="span3 offset2">
			<?php echo $form->labelEx($model,'dormID'); ?>
			<?php echo $form->textField($model,'dormID'); ?>
			<?php echo $form->error($model,'dormID'); ?>
		</div>
	</div>

	<div class="row">
		<div class="span3">
			<?php echo $form->labelEx($model,'dormID'); ?>
			<?php echo $form->textField($model,'dormID'); ?>
			<?php echo $form->error($model,'dormID'); ?>
		</div>

		<div class="span3 offset1">
			<?php echo $form->labelEx($model,'adminno'); ?>
			<?php echo $form->textField($model,'adminno',array('size'=>33,'maxlength'=>33)); ?>
			<?php echo $form->error($model,'adminno'); ?>
		</div>

		<div class="span3 offset2">
			<?php echo $form->labelEx($model,'firstname'); ?>
			<?php echo $form->textField($model,'firstname',array('size'=>33,'maxlength'=>33)); ?>
			<?php echo $form->error($model,'firstname'); ?>
		</div>
	</div>

	<div class="row">
		<div class="span3">
			<?php echo $form->labelEx($model,'middlename'); ?>
			<?php echo $form->textField($model,'middlename',array('size'=>33,'maxlength'=>33)); ?>
			<?php echo $form->error($model,'middlename'); ?>
		</div>

		<div class="span3 offset1">
			<?php echo $form->labelEx($model,'lastname'); ?>
			<?php echo $form->textField($model,'lastname',array('size'=>33,'maxlength'=>33)); ?>
			<?php echo $form->error($model,'lastname'); ?>
		</div>

		<div class="span3 offset2">
			<?php echo $form->labelEx($model,'dateofbirth'); ?>
			<?php echo $form->textField($model,'dateofbirth'); ?>
			<?php echo $form->error($model,'dateofbirth'); ?>
		</div>
	</div>

	<div class="row">
		<div class="span3">
			<?php echo $form->labelEx($model,'citizenship'); ?>
			<?php echo $form->textField($model,'citizenship',array('size'=>33,'maxlength'=>33)); ?>
			<?php echo $form->error($model,'citizenship'); ?>
		</div>

		<div class="span3 offset1">
			<?php echo $form->labelEx($model,'parentname'); ?>
			<?php echo $form->textField($model,'parentname',array('size'=>33,'maxlength'=>33)); ?>
			<?php echo $form->error($model,'parentname'); ?>
		</div>

		<div class="span3 offset2">
			<?php echo $form->labelEx($model,'photoimage'); ?>
			<?php echo $form->textField($model,'photoimage',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'photoimage'); ?>
		</div>
	</div>

	<div class="row">
		<div class="span3">
			<?php echo $form->labelEx($model,'emergencynumber'); ?>
			<?php echo $form->textField($model,'emergencynumber'); ?>
			<?php echo $form->error($model,'emergencynumber'); ?>
		</div>

		<div class="span3 offset1">
			<?php echo $form->labelEx($model,'postaladress'); ?>
			<?php echo $form->textField($model,'postaladress',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'postaladress'); ?>
		</div>

		<div class="span3 offset2">
			<?php echo $form->labelEx($model,'email'); ?>
			<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>
	</div>

	<div class="row">
		<div class="span3">
			<?php echo $form->labelEx($model,'admindate'); ?>
			<?php echo $form->textField($model,'admindate'); ?>
			<?php echo $form->error($model,'admindate'); ?>
		</div>

		<div class="span3 offset1">
			<?php echo $form->labelEx($model,'gender'); ?>
			<?php echo $form->textField($model,'gender',array('size'=>33,'maxlength'=>33)); ?>
			<?php echo $form->error($model,'gender'); ?>
		</div>

		<div class="span3 offset2">
			<?php echo $form->labelEx($model,'religion'); ?>
			<?php echo $form->textField($model,'religion',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'religion'); ?>
		</div>
	</div>
	<div class="row buttons">
		<button class="btn btn-success">Create</button>
	</div>

	<?php $this->endWidget(); ?>

</div>
<!-- form -->
