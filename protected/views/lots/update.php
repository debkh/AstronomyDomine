<?php
$this->breadcrumbs=array(
	'Lots'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
    array('label' => 'Manage', '#'),
	array('label'=>'List Lots', 'url'=>array('index')),
	array('label'=>'Create Lots', 'url'=>array('create')),
	array('label'=>'View Lots', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Lots', 'url'=>array('admin')),
);
?>

<h1>Update Lots <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>