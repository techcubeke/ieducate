<?php
/* @var $this DepartmentController */
/* @var $model Department */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	
	<div class="row">
		<?php echo $form->label($model,'departmentname'); ?>
		<?php echo $form->textField($model,'departmentname',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'roomno'); ?>
		<?php echo $form->textField($model,'roomno',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<button class="btn btn-primary" type="submit">Search</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->