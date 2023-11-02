<!DOCTYPE html>
<html>
<body>
<a href="<?=base_url()?>">Back</a>
<h2>Create Class Rooms</h2>
<form action="<?= base_url('class/create');?>" method="post">
  <label>Class name:</label><br>
  <input type="text" name="class_name"><br>
  <label>Section:</label><br>
  <input type="text" name="section"><br><br>
  <input type="submit" name="save" value="Create">
</form> 
</body>
</html>






