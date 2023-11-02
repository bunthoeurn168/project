<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  
<style>
  
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
<a href="<?=base_url()?>">Back</a>
<h2>View Subject combination Info</h2>
<table style="width:100%">
  <tr>
    <th>#</th>
    <th>Class Name</th>
    <th>Subject</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  <?php
      $i=1;
      foreach($data as $class){
  ?>
  <tr>
      <td><?= $i ?></td>
      <td><?= $class->class_name ?></td>
      <td><?= $class->subject_name ?></td>
      <td><?php $stts=$class->status;
          if($stts=='0')
          {
            echo "<span style='color:red;'>Deactive</span>";
          }
          else
          {
            echo "<span>Active</span>";
          }
      ?></td>
      <td>
        <?php if($stts=='0'){ ?>  
        <a href="<?= base_url()?>active/<?=$class->id?>"><i class="fa fa-times" title="Activate Record"></i></a> <?php } else {?>
        <a href="<?= base_url()?>deactive/<?=$class->id?>"><i class="fa fa-check" title="Deactivate Record"></i></a>
        <?php }?>
      </td>
  </tr>
  <?php
        $i++;
      }
  ?>
  <tr>
</table>
</body>
</html>







