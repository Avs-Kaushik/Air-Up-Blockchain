<?php  
session_start();
include('connect.php');
$eid=$_SESSION["eid"];
$in=$_POST["idea_name"];
$pb=$_POST["prob"];
$sl=$_POST["short_sol"];
$dl=$_POST["det_sol"];
$bs=$_POST["business"];
$cp=$_POST["comp"];
$pr=$_POST["proff"];
$eq=$_POST["eq"];
$amt=$_POST["amt"];
$day=$_POST["days"];
$amt=$_POST["amt"];
$siid=mysqli_num_rows(mysqli_query($conn,"SELECT * from ideas"));
$siid++;
$er=0;
$sid="S".strval($siid);
if(!empty($_POST['pat'])){
    $stat=1;
   } else {
$stat = 0;
}
$allowedExts = array("mp4");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
if (($_FILES["file"]["type"] == "video/mp4")&&($_FILES["file"]["size"] < 200000000)&&in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      $file="upload/" . $_FILES["file"]["name"];
      $temp=mysqli_query($conn,"INSERT INTO ideas(eid,idea_name,prob_st,short_sol,det_sol,business,comp,patent,file,sid,day,amt,eqt) VALUES('$eid','$in','$pb','$sl','$dl','$bs','$cp','$stat','$file','$sid','$day','$amt','$eq')");
      if($stat==0)
      {
        echo "<script>alert('Successfully Uploaded the idea. As you have said that your idea doesn't have any kind of patent, to secure it we are pushing this into blockchain. Thank You');</script>";
        $_SESSION["block_sid"]=$sid;
        $_SESSION["block_idea_name"]=$in;
        $_SESSION["block_data"]=$sl;
      header("refresh:1;url=http://localhost/AIRUP/form/data.php");
      }
      else{
        if ($temp) {
          // Output JavaScript code to call Thirdweb SDK function after successfully uploading idea
          if($er>0)
          {
            echo "<script>alert('Error while push');</script>";
            header("refresh:10;url=http://localhost/AIRUP/getairup/");
          }
          else{
          echo "<script>alert('Successfully Uploaded the idea');</script>";
          header("refresh:10;url=http://localhost/AIRUP/form/data.php");
          }
      } else {
          echo "<script>alert('Error occurred');</script>";
          header("refresh:10;url=http://localhost/AIRUP/form/idea_sub.php");
      }
    }
    }
  }
else
  {
  echo "<scripr>alert('Invalid file. File must be of .mp4 type and limited size(<200mb)')</script>";
  header("refresh:0.1s;url=http://localhost/AIRUP/form/idea_sub.php");
  }
?>
