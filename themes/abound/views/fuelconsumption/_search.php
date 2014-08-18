<?php
/* @var $this FuelconsumptionController */
/* @var $model Fuelconsumption */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	<div class="row">
		<?php echo $form->label($model,'vehicleID'); ?>
		<?php echo $form->textField($model,'vehicleID'); ?>
	</div>

	

	<div class="row buttons">
		<button class="btn-primary" type="submit">Search</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->