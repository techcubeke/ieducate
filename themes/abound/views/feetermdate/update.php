<?php
/* @var $this FeetermdateController */
/* @var $model Feetermdate */

$this->breadcrumbs=array(
	'Fee Termdates'=>array('index'),
	$model->feetermdateID=>array('view','id'=>$model->feetermdateID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fee Termdates', 'url'=>array('index')),
	array('label'=>'Create Fee Termdates', 'url'=>array('create')),
	array('label'=>'View Fee Termdates', 'url'=>array('view', 'id'=>$model->feetermdateID)),
	array('label'=>'Manage Fee Termdates', 'url'=>array('admin')),
);
?>

<h1>Update Feetermdate <?php echo $model->feetermdateID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>