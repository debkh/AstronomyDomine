<?php
$this->breadcrumbs=array(
	'Auctions'=>array('index'),
	$model->name,
);

$this->menu=array(
    array('label' => 'Manage', '#'),
	array('label'=>'List Auctions', 'url'=>array('index')),
	array('label'=>'Create Auctions', 'url'=>array('create')),
	array('label'=>'Update Auctions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Auctions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Auctions', 'url'=>array('admin')),
);
?>

<h1>View Auctions #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'date',
	),
)); ?>

<div id="lots">
    <?php if($model->commentCount>=1): ?>
    <h3>
        <?php echo $model->commentCount . 'comment(s)'; ?>
    </h3>

    <?php $this->renderPartial('_comments',array(
        'post'=>$model,
        'comments'=>$model->comments,
    )); ?>
    <?php endif; ?>
</div>
