<?php 

$connect = mysqli_connect('localhost', 'jeremyvinec',  '5n426g3528', 'Bvilles');
$sql = "SELECT * FROM villes";
$result = mysqli_query($connect, $sql);
$json_array = array();
while($row = mysqli_fetch_assoc($result)){
    $json_array[] = $row;
}

$contenu_json = json_encode($json_array);

var_dump($contenu_json);

/*echo '<pre>';
print_r($json_array);
echo '</pre>';*/

// nom de fichier à créer
$nom_du_fichier = 'villes.json';

// ouverture du fichier
$fichier = fopen($nom_du_fichier, 'w+');

// ecriture dans le fichier
fwrite($fichier, $contenu_json);

// fermeture du fichier
fclose($fichier);