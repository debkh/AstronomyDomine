<div>
<table class="table table-striped table-bordered table-condensed">
<thead>
<th class="span1">
    ID
</th>
<th class="span3">
    Name
</th>
<th>
    Description
</th>
</thead>
<?php foreach($lots as $lots): ?>
    <tr>
        <td>
            <?php echo $lots->id; ?>
        </td>
        <td>
            <?php echo $lots->name; ?>
        </td>
        <td>
            <?php echo $lots->description; ?>
        </td>
    </tr>

<?php endforeach; ?>

</table>
</div><!-- comment -->