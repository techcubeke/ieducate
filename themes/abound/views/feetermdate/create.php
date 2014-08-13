<?php
/* @var $this FeetermdateController */
/* @var $model Feetermdate */

$this->breadcrumbs=array(
	'Fee Termdates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Fee Termdates', 'url'=>array('index')),
	array('label'=>'Manage Fee Termdates', 'url'=>array('admin')),
);
?>

<h1>Create Feetermdate</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>