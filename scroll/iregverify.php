<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php'; 
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
include('connect.php');

$nm = $_POST["name"];
$email = $_POST["email"];
$gen = $_POST["gen"];
$dob = $_POST["dob"];
$pass = $_POST["pass"];
$gov = isset($_POST["gov"]) ? $_POST["gov"] : ""; // Initialize $gov variable to avoid undefined array key error
$ct = mysqli_num_rows(mysqli_query($conn, "SELECT * from investors"));
$new = $ct + 10001;
$iid = "I" . strval($new);
$file = ""; // Initialize $file variable

if(mysqli_num_rows(mysqli_query($conn, "SELECT * from investors where email='$email'")) <= 0) {

    if(isset($_FILES['file'])) {
        $allowedExts = array("pdf");
        $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        
        if ($_FILES["file"]["type"] == "application/pdf" && in_array($extension, $allowedExts)) {
            if ($_FILES["file"]["error"] > 0) {
                echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
            } else {
                $file = "uploads/" .$iid.$_FILES["file"]["name"];
                move_uploaded_file($_FILES["file"]["tmp_name"], $file);
                echo "File uploaded successfully.";
            }
        } else {
            echo "Invalid file format. Please upload a PDF file.";
        }
    } else {
        echo "No file uploaded.";
    }

    mysqli_query($conn, "INSERT into investors(name,email,gender,dob,password,gov_id,iid,File) VALUES('$nm','$email','$gen','$dob','$pass','$gov','$iid','$file')");

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'avskaushik123@gmail.com';
    $mail->Password = 'gixgmgrmnowbpgzg'; 
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('avskaushik123@gmail.com');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject = "Registration Successful->Air Up";
    $mail->Body = "Hello " . $nm . ",<br><br>This is to inform you that you have successfully registered as an Investor.<br> Thank you for empowering us!<br> Here are some of your basic Details<br><br>Name: " . $nm . " <br>Email: " . $email . " <br>IID:" . $iid . "<br>Password: " . $pass . " <br><br><br>Thank You.<br>Team AIRUP";

    try {
        $mail->send();
        echo "<script>alert('Data saved successfully');</script>";
        header("refresh:0.1;url=http://localhost/AIRUP/New%20Folder%20(3)/spotify.php");
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
        header("refresh:0.1;url=http://localhost/AIRUP/New%20Folder%20(3)/spotify.php");
    }
} else {
    echo "<script>alert('Email Already used');</script>";
    header("refresh:0.1;url=http://localhost/AIRUP/scroll/ilogin.php");
}
?>
