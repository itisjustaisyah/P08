<?php
global $link;
include "..\dbFunctions.php";
$theID = $_POST['id'];
$newName = $_POST['name'];
$newDesc = $_POST['description'];
$newPrice = $_POST['price'];
$newQuality = $_POST['quality'];

$msg = "";
$query="
UPDATE items
SET name='$newName',
description ='$newDesc',
price ='$newPrice',
quality = '$newQuality'


WHERE id=$theID
";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

if($result){
    $msg = "record successfully updated";
}else{
    $msg = "record not updated";
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <Title>doEditRestaurant</Title>
</head>
<body>
<?php
echo $msg;
echo "<br><br>";
$_GET['id']=$theID;
include "itemDetails.php"
?>
</body>
</html>

