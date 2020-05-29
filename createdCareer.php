<!--part of careerUpload,to upload career opportunities to db and show career page--from careerUpload.php-->
<?php require_once("./include/DB.php"); ?>
<?php require_once("./include/function.php"); ?>

<?php
  
  $position=$_POST["position"];
  $keyRequirements=$_POST["keyRequirements"];


  $flyerImageName =$_FILES["flyerImage"]["name"];
  $target_dir = "images/career/";
  $target_file = $target_dir.basename($flyerImageName);

  $sql1="INSERT INTO career
  (position,keyRequirements,flyer,active)  VALUES 
  ('$position','$keyRequirements','$flyerImageName','1')";

$res1=query_execute($sql1);
move_uploaded_file($_FILES["flyerImage"]["tmp_name"], $target_file);

if(!($res1))
    {
      echo "Someting went to wrong!. Redirecting now...";
      header('refresh:2; URL=index.php');
     
    }else{
        header('refresh:2; URL=career.php'); 
    }

?>



