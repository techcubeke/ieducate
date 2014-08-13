<?php
/* @var $this FeetermdateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fee Termdates',
);

$this->menu=array(
	array('label'=>'Create Fee Termdates', 'url'=>array('create')),
	array('label'=>'Manage Fee Termdates', 'url'=>array('admin')),
);
?>

<h1>Feetermdates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
