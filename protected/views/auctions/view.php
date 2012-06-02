<?php
$this->breadcrumbs=array(
	'Auctions'=>array('index'),
	$model->name,
);

$this->menu=array(
    array('label' => 'Manage', '#'),
	array('label'=>'List Auctions', 'url'=>array('index')),
    array('label'=>'Create New Lot', 'url'=>array('lots/create/'.$model->id)),
	array('label'=>'Create Auctions', 'url'=>array('create')),
	array('label'=>'Edit Current Auction', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<div class="well">
    <fieldset>
    <legend>Auction #<?php echo $model->id; ?></legend>
    <?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
    'htmlOptions' => array(
        'class' => 'table table-striped table-bordered table-condensed',
    ),
	'attributes'=>array(
		'id',
		'name',
		'description',
		'date',
	),
)); ?>
    </fieldset>
</div>
<?php //var_dump($model->lotsCount); ?>
<div id="lots" class="well">
<fieldset>
    <legend>Lots list</legend>
<?php $this->renderPartial('_lots',array(
        'lots'=>$model->lots,
    )); ?>
</fieldset>
</div>
