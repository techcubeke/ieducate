<?php
/* @var $this FeepaymentController */
/* @var $model Feepayment */

$this->breadcrumbs=array(
	'Fee payments'=>array('index'),
	$model->feepaymentID,
);

$this->menu=array(
	array('label'=>'List Fee payment', 'url'=>array('index')),
	array('label'=>'Create Fee payment', 'url'=>array('create')),
	array('label'=>'Update Fee payment', 'url'=>array('update', 'id'=>$model->feepaymentID)),
	array('label'=>'Delete Fee payment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->feepaymentID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fee payment', 'url'=>array('admin')),
);
?>

<h1>View Feepayment #<?php echo $model->feepaymentID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'feepaymentID',
		'feereceiptID',
		'financialyearID',
		'paymentdate',
		'paymentmode',
		'paidamount',
		'adjustedamount',
		'chequedate',
		'chequenumber',
		'bankbranch',
		'remarks',
		'dateadded',
	),
)); ?>
