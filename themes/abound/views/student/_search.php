<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form CActiveForm */
?>

<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
			'action'=>Yii::app()->createUrl($this->route),
			'method'=>'get',
)); ?>

	<div class="row">
		<?php echo ('Enter student ID number');?>
		<?php echo $form->label($model,'adminno'); ?>
		<?php echo $form->textField($model,'adminno',array('size'=>33,'maxlength'=>33)); ?>
	</div>
		<div class="row">
		<?php echo $form->label($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>33,'maxlength'=>33)); ?>
	</div>
	<div class="row buttons">
		<button class="btn btn-success">Search</button>
	</div>

	<?php $this->endWidget(); ?>

</div>
<!-- search-form -->
