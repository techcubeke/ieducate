<?php
/* @var $this DormroomController */
/* @var $model Dormroom */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	
	<div class="row">
		<?php echo $form->label($model,'dormname'); ?>
		<?php echo $form->textField($model,'dormname',array('size'=>20,'maxlength'=>20)); ?>
	</div>
	<div class="row buttons">
		<button class="btn btn-success">Search</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->