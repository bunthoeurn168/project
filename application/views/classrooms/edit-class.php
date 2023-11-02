<!DOCTYPE html>
<html>
<body>
<a href="<?=base_url('manage-class')?>">Back</a>
<h2>Edit Class Rooms</h2>
<form action="<?= base_url('classroom/update/'.$data['id']); ?>" method="post">
  <label>Class name:</label><br>
  <input type="text" name="class_name" value="<?= $data['class_name']?>"><br>
  <label>Section:</label><br>
  <input type="text" name="section" value="<?= $data['section']?>"><br><br>
  <input type="submit" name="update" value="Update">
</form> 
</body>
</html>



