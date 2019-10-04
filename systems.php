<?php

/*header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
*/

include 'db.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$result = $conn->query("SELECT * FROM systems");

while($r = $result->fetch_array(MYSQLI_ASSOC)) {
    $rows[] = $r;
}

echo '{"data":'.json_encode($rows).'}';

?>
