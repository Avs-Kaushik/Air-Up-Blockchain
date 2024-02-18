<?php
// Retrieve form data (adapt field names as needed)
session_start();
header('Access-Control-Allow-Origin: http://localhost:5173'); // Adapt to your React app's URL
header('Access-Control-Allow-Headers: Content-Type'); // Adjust if using custom headers
header('Access-Control-Allow-Methods: GET, POST, OPTIONS'); // Adjust if needed

// Check if session variables are set before accessing them
$name = isset($_SESSION["block_sid"]) ? $_SESSION["block_sid"] : null;
$email = isset($_SESSION["block_idea_name"]) ? $_SESSION["block_idea_name"] : null;
$message = isset($_SESSION["block_data"]) ? $_SESSION["block_data"] : null;
// $name = "helo";
// $email = "All";
// $message = "Niyabba";

// Prepare data for JSON response
$data = json_encode(array('Idea_No' => $name, 'Idea_Title' => $email, 'Idea_Desc' => $message));
file_put_contents("C:/xampp/htdocs/AirUp/client/thirdweb-app/src/data_fetch.txt", $data);
// Send JSON response
echo $data;
header("Location:http://localhost/AIRUP/check/homepage.php")
?>
