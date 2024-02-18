<?php
// Retrieve form data (adapt field names as needed)
$name = "Hello";
$email = "hyus";
$message = "Welcome";

// Basic error handling (optional)
if (empty($name) || empty($email) || empty($message)) {
  header('HTTP/1.1 400 Bad Request');
  echo json_encode(array('error' => 'Please fill in all required fields'));
  exit;
}

// Prepare data for React using JSON_UNESCAPED_SLASHES for proper \ escaping
$data = json_encode(array('name' => $name, 'email' => $email, 'message' => $message), JSON_UNESCAPED_SLASHES);

// CORS configuration (adjust origin and headers as needed)
header('Access-Control-Allow-Origin: http://localhost:3000'); // Adapt to your React app's URL
header('Access-Control-Allow-Headers: Content-Type, X-Requested-With, ...'); // Adjust if using custom headers
header('Access-Control-Allow-Methods: POST'); // Adjust if needed

// Send the JSON data to the React script
echo $data;
?>
