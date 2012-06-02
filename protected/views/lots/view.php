<?php
$this->breadcrumbs=array(
	'Lots'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Lots', 'url'=>array('index')),
	array('label'=>'Create Lots', 'url'=>array('create')),
	array('label'=>'Update Lots', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Lots', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lots', 'url'=>array('admin')),
);
?>

<h1>View Lots #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_auction',
		'name',
		'description',
		'other',
	),
)); ?>
