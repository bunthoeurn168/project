<!DOCTYPE html>
<html>
<body>
<a href="<?=base_url()?>">Back</a>
<h2>Student Admission</h2>
<form action="<?= base_url('createStudent');?>" method="post">
  <label>Full name:</label><br>
  <input type="text" name="name"><br>
  <label>Roll Id:</label><br>
  <input type="text" name="roll_id"><br><br>
  <label>Gender: </label>
  <input type="radio" name="gender" id="" value="Male" checked>Male
  <input type="radio" name="gender" id=""value="Female">Female<br><br>
  <label for="">Date of birth</label>
  <input type="date" name="dob" id=""><br><br>
  Class Name: 
  <select name="class_id" id="">
      <option value="">Select Class</option>
      <?php
      foreach($class as $row)
      {?>
      <option value="<?=$row->id?>"><?=$row->class_name?> (<?=$row->section?>)</option>
      <?php }
      ?>
  </select><br><br>

  <input type="submit" name="save" value="Create">
</form> 
</body>
</html>






