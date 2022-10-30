<?php
require_once("./connect.php");
extract($_POST);

$search = $_POST['search'];
$column = $_POST['column'];

$sql = "select * from authors where $column like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["name"]."  ".$row["description"]."  ".$row["status"]."<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>