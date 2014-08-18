<?php
/* @var $this StaffController */
/* @var $model Staff */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'staffID'); ?>
		<?php echo $form->textField($model,'staffID'); ?>
	</div>
	<div class="row buttons">
		<button class="btn-primary" type="submit">Search</button>
        	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->