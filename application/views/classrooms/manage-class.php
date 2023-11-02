<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
<a href="<?=base_url()?>">Back</a>
<h2>Manage Class Rooms</h2>
<table style="width:100%">
    <tr>
        <th>No.</th>
        <th>Class Name</th> 
        <th>Section</th>
        <th>Create Date</th>
        <th>Edit</th>
        <th>Update</th>
    </tr>
    <?php
        $i=1;
        foreach($data as $class){
    ?>
    <tr>
        <td><?= $i ?></td>
        <td><?= $class->class_name ?></td>
        <td><?= $class->section ?></td>
        <td><?= $class->creation_date ?></td>
        <td><a href="<?= base_url()?>classroom/edit/<?=$class->id?>">Edit</a></td>
        <td><a href="<?= base_url()?>classroom/delete/<?=$class->id?>">Delete</a></td>
    </tr>
    <?php 
        $i++;
        }
    ?>
  <tr>
</table>
</body>
</html>







