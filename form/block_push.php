<?php
// Construct the request payload
$request_payload = json_encode(array(
    "jsonrpc" => "2.0",
    "method" => "eth_sendTransaction",
    "params" => array(
        "from" => "0x6B010b046bA044316C24C375Cb52F62cd0b18B4F",
        "to" => "0x63aC8a9E5b147de263981Ef736b8d2d0A2aC1DbB",
        "data" => "Hello",
        "gas" => "0",
        // Additional parameters as needed
    ),
    "id" => 1
));

// Send the request to the blockchain node's API endpoint
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://thirdweb.com/sepolia/0x63aC8a9E5b147de263981Ef736b8d2d0A2aC1DbB"); // Replace with your blockchain node's API endpoint
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $request_payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

// Handle the response from the blockchain node
$result = json_decode($response, true);
if (isset($result["error"])) {
    echo "Eror";
    // Handle error
} else {
    // Extract relevant data from the result
    $tx_hash = $result["result"];
    echo "Data";
    // Handle success
}
?>

