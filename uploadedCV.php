<!--part of careerUpload,to upload career opportunities to db and show career page-- FROM career.php-->
<?php require_once("./include/DB.php"); ?>
<?php require_once("./include/function.php"); ?>

<?php
 
 if(isset($_POST["submit"]))
 {
  $cvType=$_POST["cvType"];
  $uploadFile =$_FILES["uploadFile"]["name"];
  $target_dir = "images/career/cvfile/";
  $target_file = $target_dir.basename($uploadFile);
  move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_file); 
  $sql="INSERT INTO cv (careerID,CV)  VALUES  ('$cvType','$uploadFile')";
  $res=query_execute($sql);

  if(!($res))
   {
     echo "Someting went to wrong!. Redirecting now...";
      header('refresh:2; URL=career.php');
     
   }else
   {
     echo 'Successfully Upload your cv!';
     header('refresh:1; URL=career.php'); 
  }

 }
 
  



?>

