

<?php foreach ($cars as $carname):?>
    <a class="big" href="../cars/carDetail/<?php echo $carname['Car']['id']?>">
        <?php echo $carname['Car']['id']?>
        <?php echo $carname['Car']['car_name']?>
        <?php echo $carname['Car']['car_model']?>
        <?php echo $carname['Car']['car_year']?>
        <?php echo $carname['Car']['car_color']?>
        <?php echo $carname['Car']['car_torque']?>
    </a><br/>
<?php endforeach ?>