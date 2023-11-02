<!DOCTYPE html>
<html>
<body>
<a href="<?=base_url('manage-student')?>">Back</a>
<h2>Student Admission</h2>
<?php 
    foreach($student as $st){
  ?>
<form action="<?= base_url('student/update/'.$st->id);?>" method="post">
  <label>Full name:</label><br>
  <input type="text" name="name" value="<?= $st->name;?>"><br>
  <label>Roll Id:</label><br>
  <input type="text" name="roll_id" value="<?= $st->roll_id;?>"><br><br>
  <label>Gender: </label>
  <input type="radio" name="gender" id="" value="Male" <?= ($st->gender == 'Male') ? 'checked' : ''?>>Male
  <input type="radio" name="gender" id="" value="Female" <?= ($st->gender == 'Female') ? 'checked' : ''?>>Female<br><br>
  <label for="">Date of birth</label>
  <input type="date" name="dob" id="" value="<?= $st->dob ?>"><br><br>
  Class Name: <input type="text" name="class_id" id="" value="<?= $st->class_name?> (<?= $st->section;?>)" disabled><br><br>
  Creation Date : <span><?= $st->creation_date;?></span><br><br>
  Status: 
  <input type="radio" name="status" value="1" <?= ($st->status == 1) ? 'checked' : ''?>>Active
  <input type="radio" name="status" value="0" <?= ($st->status == 0) ? 'checked' : ''?>>Blocked<br><br>
  <?php }?>
  <input type="submit" name="update" value="Update">
</form> 
</body>
</html>






