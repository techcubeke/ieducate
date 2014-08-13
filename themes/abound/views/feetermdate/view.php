<?php
/* @var $this FeetermdateController */
/* @var $model Feetermdate */

$this->breadcrumbs=array(
	'Fee Termdates'=>array('index'),
	$model->feetermdateID,
);

$this->menu=array(
	array('label'=>'List Fee Termdates', 'url'=>array('index')),
	array('label'=>'Create Fee Termdates', 'url'=>array('create')),
	array('label'=>'Update Fee Termdates', 'url'=>array('update', 'id'=>$model->feetermdateID)),
	array('label'=>'Delete Fee Termdates', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->feetermdateID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fee Termdates', 'url'=>array('admin')),
);
?>

<h1>View Feetermdate #<?php echo $model->feetermdateID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'feetermdateID',
		'termnumber',
		'termtitle',
		'periodfrom',
		'periodto',
		'percentagecollection',
		'duedate',
		'monthcount',
		'dateadded',
	),
)); ?>
