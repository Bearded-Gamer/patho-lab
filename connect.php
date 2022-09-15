<?php
  $server ="localhost";
  $username ="root";
  $password ="";

 
  $con = mysqli_connect($server,$username,$password);

  if(!$con)
  {
      die("connection failed coz" .mysqli_connect_error());
  }
  $name = $_POST['name'];
  $date =$_POST['date'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $DRname = $_POST['DRname'];
  $specimen = $_POST['specimen'];
  $testid = $_POST['testid'];
  $IgMantibodies =$_POST['IgMantibodies'];
  $IgGantibodies = $_POST['IgGantibodies'];
  $NS1 = $_POST['NS1'];
  

   $sql= "INSERT INTO `medinfo`.`denguetest` ( `name`, `date`, `age`,
    `gender`,`DRname`, `specimen`, `testid`,`IgMantibodies`,`IgGantibodies`,`NS1`)
     VALUES ('$name', '$date', '$age','$gender', '$DRname','$specimen', '$testid',
      '$IgMantibodies','$IgGantibodies','$NS1');";
        echo $sql;

        if($con->query($sql)==true)
        {
         echo "sucess";
        }
        else
        {
         echo "error: $sql $con->error";
        }
     
        $con->close();

 
?>
