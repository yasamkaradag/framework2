<html>

<form action="../cars/addCar" method="POST" enctype="multipart/form-data">
    <p>Car Name</p> <input type="text" name="name" value="<?php if(!empty($_POST['name'])){ echo $_POST['name'];}?>"><br>
    <?php
    if(isset($errors['name'])){ ?>
    <span style="color:red"><?php echo $errors['name'];?></span><br>
    <?php }?>

    <p>Car Model</p> <input type="text" name="model" value="<?php if(!empty($_POST['model'])){ echo $_POST['model'];}?>"><br>
    <?php
    if(isset($errors['model'])){ ?>
        <span style="color:red"><?php echo $errors['model'];?></span><br>
    <?php }?>

    <p>Car Year</p> <input type="text" name="year" value="<?php if(!empty($_POST['year'])){ echo $_POST['year'];}?>"><br>
    <?php
    if(isset($errors['year'])){ ?>
        <span style="color:red"><?php echo $errors['year'];?></span><br>
    <?php }?>

    <p>Car Color</p> <input type="text" name="color" value="<?php if(!empty($_POST['color'])){ echo $_POST['color'];}?>"><br>
    <?php
    if(isset($errors['color'])){ ?>
        <span style="color:red"><?php echo $errors['color'];?></span><br>
    <?php }?>

    <p>Car Torque</p> <input type="text" name="torque" value="<?php if(!empty($_POST['torque'])){ echo $_POST['torque'];}?>"><br>
    <?php
    if(isset($errors['torque'])){ ?>
        <span style="color:red"><?php echo $errors['torque'];?></span><br>
    <?php }?>

    <br>
    <br>
    <?php
    if(isset($errors['image']) & !empty($errors['image'])){ ?>
        <span style="color:red"><?php echo $errors['image'];?></span><br>
    <?php }?>

    <p>Upload Car Image</p><input type="file" name="image"</input>
    <br><br> <input type="submit" name="cars" value="Upload Image/Data"><br>
</form>

