<?php

$servername = "teddybridgewatervikings.com";
$username = "sokeangdbuser";
$password = "sokeangdbpassword$";
$dbname = "sokeang_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT State_Name, State_Abbr FROM state_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "State_Name: " . $row["State_Name"]. " - State_Abbr: " . $row["State_Abbr"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();




?>