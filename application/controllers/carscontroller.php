<?php

  class CarsController extends Controller{

        function addCar(){

            $this->set('title','Success - Car List App');
            //DIR O ANDAKİ DIRECTION
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                $name=$_POST['name']; $model =$_POST['model']; $year = $_POST['year'];
                $color =$_POST['color']; $torque =$_POST['torque'];
                $errors = array();
                foreach ($_POST as $key=>$value){ //is can be empty or not defined
                    if(!isset($value) || $value == ""){$errors[$key] = "Please type a  ".$key."...";}
                }
                if (empty($_FILES['image']['name'])) {
                        $errors['image'] = "Please upload a file...";
                }else{
                        $targetDir = "/opt/lampp/htdocs/resources/";
                        $filename = basename($_FILES['image']['name']); //filename = world.jpeg
                        $targetFilePath = $targetDir.$filename; //targetFilepath = /ROOT/resources/bakasetas.jpeg
                        //$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);//jpeg,png
                        //$file = addslashes(file_get_contents($_FILES["image"]['tmp_name']));
                    }


                if(empty($errors)) {

                    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
                    $sql = "insert into cars (car_name,car_model,car_year,car_color,car_torque,car_filename) values('$name','$model','$year','$color','$torque','$filename')";
                    $this->set('cars', $this->Car->query($sql));
                    header("location: http://localhost:8080/framework2/cars/carList");
                }
                else{
                    $this->setError('errors',$errors);
                }
            }

        }
        function carList(){

            $this->set('title', 'Success - Car List App');
            $this->set('cars', $this->Car->selectAll());

        }
        function carDetail($id=null,$name=null){

            $this->set('title',$name.' - My Todo List App');
            $this->set('cars',$this->Car->select($id));
        }

        function deleteCar($id){
            $this->set('title','My Car List');
            $this->set('cars',$this->Car->delete($id));
        }

  }
