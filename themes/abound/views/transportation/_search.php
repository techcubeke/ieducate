<?php
/* @var $this TransportationController */
/* @var $model Transportation */
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
		<?php echo $form->label($model,'studentID'); ?>
		<?php echo $form->textField($model,'studentID'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->label($model,'stopID'); ?>
		<?php echo $form->textField($model,'stopID'); ?>
	</div>

	<div class="sapn3 offset2">
		<?php echo $form->label($model,'ispaid'); ?>
		<?php echo $form->textField($model,'ispaid'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn-primary" type="submit">Search</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->