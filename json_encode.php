<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

$jsonencode = json_encode($age);
echo $jsonencode;
var_dump(json_decode($jsonencode));

?>

</body>
</html>