<?php
$this->breadcrumbs=array(
	'Auctions'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
    array('label' => 'Manage', '#'),
	array('label'=>'List Auctions', 'url'=>array('index')),
	array('label'=>'Create Auctions', 'url'=>array('create')),
	array('label'=>'View Auctions', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Auctions', 'url'=>array('admin')),
);
?>

<h1>Update Auctions <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>