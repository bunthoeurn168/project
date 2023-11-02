<!DOCTYPE html>
<html>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
<script src="<?= base_url('assets/js/jquery-3.7.1.min.js')?>"></script>
<body>
<a href="<?=base_url()?>">Back</a>
<h2>Student Admission</h2>
<form action="<?= base_url('result/create-result');?>" method="post">
  Class Name
  <select name="class_id[]" id="class_id">
      <option value="">Select Class</option>
      <?php
      foreach($class as $row)
      {?>
      <option value="<?=$row->id?>"><?=$row->class_name?> (<?=$row->section?>)</option>
      <?php }
      ?>
  </select><br><br>
  Student Name <select name="student_id" id="student_id"></select><br><br>
  Subjects <div id="subject"></div>
  <script>
    $(document).ready(function(){
      $('#class_id').change(function(){
        var class_id = $(this).val();
        if(class_id != '')
        {
          $.ajax({
            url: "<?= base_url();?>result/load_student",
            method: "POST",
            data: {class_id : class_id},
            success: function(data)
            {
              $('#student_id').html(data);
            }
          });
          $.ajax({
            url: "<?= base_url();?>result/load_subject",
            method: "POST",
            data: {class_id : class_id},
            success: function(data)
            {
              $('#subject').html(data);
            }
          });
        }
        else
        {
          $('#student_id').html('<option value="">Select student</option>');
          $('#subject').html('');
        }
      });
    });
  </script>

  <input type="submit" name="save" value="Create">
</form>
</body>
</html>






