<!DOCTYPE html>
<html>
<body>
<a href="<?=base_url()?>">Back</a>
<h2>Create Subject</h2>
<form action="<?= base_url('subject/createSubject');?>" method="post">
  <label>Subject name:</label><br>
  <input type="text" name="subject_name"><br>
  <label>Subject Code:</label><br>
  <input type="text" name="subject_code"><br><br>
  <input type="submit" name="save" value="Create">
</form> 
</body>
</html>






