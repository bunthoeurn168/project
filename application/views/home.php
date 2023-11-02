<!DOCTYPE html>
<html>
<body>
<h2>Home Page Manage Student Result</h2>
<ul style="list-style-type:none;">
  <li>Class Rooms
    <ul style="list-style-type:none;">
      <li><a href="<?= base_url('class')?>">Create ClassRoom</a></li>
      <li><a href="<?= base_url('manage-class')?>">Manage Classroom</a></li>
    </ul>
  </li>
  <li>Subject
    <ul style="list-style-type:none;">
      <li><a href="<?= base_url('subject')?>">Create Subject</a></li>
      <li><a href="<?= base_url('manage-subject')?>">Manage Subject</a></li>
      <li><a href="<?= base_url('combination')?>">Subject Combine</a></li>
      <li><a href="<?= base_url('manage-combine')?>">Manage Subject Combine</a></li>
    </ul>
  </li>
  <li>Student
    <ul style="list-style-type:none;">
      <li><a href="<?= base_url('student')?>">Create Student</a></li>
      <li><a href="<?= base_url('manage-student')?>">Manage Student</a></li>
    </ul>
  </li>
  <li>Result
    <ul style="list-style-type:none;">
      <li><a href="<?= base_url('result')?>">Create Result</a></li>
      <li><a href="<?= base_url('manage-result')?>">Manage Result</a></li>
    </ul>
  </li>
</ul>
</body>
</html>

