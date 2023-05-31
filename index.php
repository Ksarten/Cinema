<?php
$conn = '';

require "dbconnect.php";

$result = $conn->query("SELECT * FROM зал");
echo "<h2>Зал</h2>";
while ($row = $result->fetch()) {
    echo $row['Id']; echo "&nbsp&nbsp"; echo $row['Наименование']. "<br>";

}