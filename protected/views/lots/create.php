<?php
$this->breadcrumbs=array(
	'Lots'=>array('index'),
	'Create',
);

$this->menu=array(
    array('label' => 'Manage', '#'),
	array('label'=>'List Lots', 'url'=>array('index')),
	array('label'=>'Manage Lots', 'url'=>array('admin')),
);
?>

<h1>Create Lots</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>