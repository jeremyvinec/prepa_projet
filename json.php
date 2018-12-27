<?php 

$connect = mysqli_connect('localhost', 'jeremyvinec',  '5n426g3528', 'Bvilles');
$sql = "SELECT * FROM villes";
$result = mysqli_query($connect, $sql);
$json_array = array();
while($row = mysqli_fetch_assoc($result)){
    $json_array[] = $row;
}

echo json_encode($json_array[0]);

/*echo '<pre>';
print_r($json_array);
echo '</pre>';*/
?>