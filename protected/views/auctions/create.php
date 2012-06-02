<?php
$this->breadcrumbs=array(
	'Auctions'=>array('index'),
	'Create',
);

$this->menu=array(
    array('label' => 'Manage', '#'),
	array('label'=>'List Auctions', 'url'=>array('index')),
	array('label'=>'Manage Auctions', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>