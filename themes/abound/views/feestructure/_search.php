<?php
/* @var $this FeestructureController */
/* @var $model Feestructure */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
   	<div class="span3 ">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->label($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>12,'maxlength'=>12)); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn-success" type="submit">Search</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->