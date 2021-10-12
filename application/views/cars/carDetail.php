<html>
<?php echo $cars['Car']['id']; echo "  "; echo $cars['Car']['car_name']; echo "  "; echo $cars['Car']['car_model']; echo "  "; echo $cars['Car']['car_year']; echo "  "; echo $cars['Car']['car_color']; echo "  "; echo $cars['Car']['car_torque'];
//echo '<img src="data:image;base64,'.base64_encode($cars['Car']['car_filename']).'" alt="Image" style="width:100px ;height:100px;">';
//Clien'a bir view döndüreceğim zaman onun Url olması lazım aksi taktirde  zaten göremez.
?>
<img src= "<?php echo "http://localhost:8080/resources/".$cars['Car']['car_filename'];?>" width="100px" height="100px" alt="image_gosterilemedi"/>





<br>
<br>
<br>
<a  href="../deleteCar/<?php echo $cars['Car']['id']?>">Delete this item</a>
<a class="big" href="../carList">Go to Carlist</a>
</html>
