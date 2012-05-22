<?php
$this->breadcrumbs=array(
	'Lots',
);

$this->menu=array(
    array('label' => 'Manage', '#'),
	array('label'=>'Create Lots', 'url'=>array('create')),
	array('label'=>'Manage Lots', 'url'=>array('admin')),
);
?>

<h1>Lots</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
