<?php
$this->breadcrumbs=array(
	'Auctions',
);

$this->menu=array(
    array('label' => 'Manage', '#'),
	array('label'=>'Create Auctions', 'url'=>array('create')),
	array('label'=>'Manage Auctions', 'url'=>array('admin')),
);
?>

<h1>Auctions</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'auctions-grid',
    'itemsCssClass'=>'table table-striped table-bordered table-condensed',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'id',
        'name',
        'description',
        'date',
        array(
            'class'=>'CButtonColumn',
            'viewButtonUrl'=>'Yii::app()->createUrl("/lots/view", array("id" => $data->id))',
        ),
    ),

)); ?>
