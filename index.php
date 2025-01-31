<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *"); // Enable CORS
header("Access-Control-Allow-Method: GET"); // Enable GET Method only

echo "Hello World0";

// Set response data
$response = [
    "email" => "akpalasomto@gmail.com", // Replace with your HNG12 registered email
    "current_datetime" => gmdate("c"), // ISO 8601 format
    "github_url" => "https://github.com/yourusername/your-repo" // Replace with your GitHub repo link
];

// Return JSON response
echo json_encode($response);


?>
