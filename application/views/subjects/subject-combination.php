<html>
<body>
<a href="<?=base_url('home')?>">Back</a>
    <form action="combination/create" method="post">
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
        Subject Name: 
        <select name="subject_id" id="">
            <option value="">Subject Name</option>
            <?php
            foreach($subject as $row)
            {?>
            <option value="<?=$row->id?>"><?=$row->subject_name?></option>
            <?php }
            ?>
        </select><br><br>
        <input type="submit" name="save" value="save">
    </form>
</body>
</html>

