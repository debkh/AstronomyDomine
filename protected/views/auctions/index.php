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

<div class="well summary">
    <ul>
        <li>
            <a href="#"><span class="count"><?php echo $aStats['iAuctionsCount']; ?></span> Auctions</a>
        </li>
        <li>
            <a href="#"><span class="count"><?php echo $aStats['iLotsCount']; ?></span> Lots</a>
        </li>
        <li>
            <a href="#"><span class="count"><?php echo $aStats['iUsersCount']; ?></span> Users</a>
        </li>
        <li class="last">
            <a href="#"><span class="count">5</span> Files</a>
        </li>
    </ul>
</div>

<h1>Auctions</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'auctions-grid',
    'itemsCssClass'=>'table table-striped table-bordered table-condensed',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'id',
        'lotsCount',
        'name',
        'description',
        'date',
        array(
            'class'=>'CButtonColumn',
        ),

    ),

)); ?>
