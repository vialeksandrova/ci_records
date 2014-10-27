<html>
<head>
<title>My options</title>

<style type="text/css">
label
{
display: block;
}
</style>

</head>
<body>


<h2>Create</h2>
<?php echo form_open('site/create'); ?>
<p>
<label for="title">Tile:</label>
<input type="text" name="title" id="title"/>
</p>

<p>
<label for="author">Author:</label>
<input type="text" name="author" id="author"/>
</p>

<p>
<input type="submit" value="Submit"/>
</p>
<?php echo form_close(); ?>
<hr />



<h2>Read</h2>
<?php if(isset($records)): foreach($records as $row) :?>
<h2><?php echo anchor("site/delete/$row->id", $row->title);?></h2>
<div><?php echo $row->author;?></div>
<?php endforeach; ?>

<?php else: ?>
<h2>No records.</h2>
<?php endif; ?>
<hr />


<h2>Delete</h2>
<p>Click on the headings and the records will be delete from database.</p>

</body>
</html>
