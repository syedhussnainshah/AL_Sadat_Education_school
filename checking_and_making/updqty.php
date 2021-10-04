<?php 
$conn = mysqli_connect("localhost","root","","sale");
$sql = "SELECT * FROM city";
$query =mysqli_query($conn,$sql);
$str = "";
while ($row = mysqli_fetch_assoc($query)) {
	$str .="<option value='{$row['city_id']}'>{$row['city_name']}</option>"
}
echo $str;

?>