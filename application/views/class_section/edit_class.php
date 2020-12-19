
<form action="" method="post" enctype="">
    <div class="form-group">
        <label for="class_name" class="form-control-label">Class full name</label>
        <input class="form-control form_class_fname" type="text" value="<?php echo $class_i->class_full_name;?>" id="class_name" name="class_name" placeholder=" Type class full name (e.g : one)">

    </div>


    <div class="form-group">
        <label for="class_shortname" class="form-control-label">Class short name</label>
        <input class="form-control form_class_sname" type="text" value="<?php echo $class_i->class_short_name;?>"id="class_shortname" name="class_shortname">

    </div>


</form>