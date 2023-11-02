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
        <th>Subject Name</th> 
        <th>Section Code</th>
        <th>Create Date</th>
        <th>Edit</th>
        <th>Update</th>
    </tr>
    <?php
          $i=1;
          foreach($data as $subject){
      ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $subject->subject_name ?></td>
            <td><?= $subject->subject_code ?></td>
            <td><?= $subject->creation_date ?></td>
            <td><a href="<?= base_url()?>subject/edit/<?=$subject->id?>">Edit</a></td>
            <td><a href="<?= base_url()?>subject/delete/<?=$subject->id?>">Delete</a></td>
        </tr>
      <?php 
            $i++;
          }
      ?>
  <tr>
</table>
</body>
</html>







