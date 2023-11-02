<!DOCTYPE html>
<html>
<body>
<a href="<?=base_url('manage-subject')?>">Back</a>
<h2>Edit Subject</h2>
<form action="<?= base_url('subject/update/'.$subject['id']); ?>" method="post">
  <label>Subject name:</label><br>
  <input type="text" name="subject_name" value="<?= $subject['subject_name']?>"><br>
  <label>Section code:</label><br>
  <input type="text" name="subject_code" value="<?= $subject['subject_code']?>"><br><br>
  <input type="submit" name="update" value="Update">
</form> 
</body>
</html>



