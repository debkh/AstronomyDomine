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

<style>
    .summary {display:table; width:100%; padding:0; margin:0 0 20px 0;}
    .summary ul {margin:0; padding:0; overflow:hidden; display:table-row;}
    .summary li {margin:0; padding:19px; display:table-cell; border-right:1px solid #eee;}
    .summary li:last-child {border:none;}
    .summary a {display:block; font-size:1.2em; line-height:1.4em; text-transform:uppercase; color:#000;}
    .summary a:hover {text-decoration: none;}
    .summary .count {display:block; font-size:1.75em; font-weight:bold;}
</style>

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
        'name',
        'description',
        'date',
        array(
            'class'=>'CButtonColumn',
        ),
    ),

)); ?>
