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
<h2>Manage Student</h2>
<table style="width:100%">
    <tr>
        <th>No.</th>
        <th>Student Name</th> 
        <th>Roll Id</th>
        <th>Gender</th>
        <th>Class</th>
        <th>Reg Date</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    <?php
        $i=1;
        foreach($student as $st){
    ?>
    <tr>
        <td><?= $i ?></td>
        <td><?= $st->name ?></td>
        <td><?= $st->roll_id ?></td>
        <td><?= $st->gender?></td>
        <td><?= $st->class_name ?> (<?= $st->section ?>)</td>
        <td><?= $st->creation_date ?></td>
        <td><?php $stts=$st->status;
          if($stts=='0')
          {
            echo "<span style='color:red;'>Blocked</span>";
          }
          else
          {
            echo "<span>Active</span>";
          }
      ?></td>
        <td><a href="<?= base_url()?>student/edit/<?=$st->id?>">Edit</a></td>
    </tr>
    <?php 
        $i++;
        }
    ?>
  <tr>
</table>
</body>
</html>







