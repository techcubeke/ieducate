<?php
/* @var $this FeereceiptController */
/* @var $model Feereceipt */
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
		<?php echo $form->label($model,'invoicedate'); ?>
		<?php echo $form->textField($model,'invoicedate'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->label($model,'termtitle'); ?>
		<?php echo $form->textField($model,'termtitle',array('size'=>50,'maxlength'=>50)); ?>
	</div>
</div>
	
	<div class="row buttons">
	<button class="btn btn-primary" type="submit" >Search</button>
    	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->