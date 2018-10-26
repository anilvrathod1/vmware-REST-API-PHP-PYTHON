<?php 

$command = escapeshellcmd(' /usr/local/bin/python cluster_list_BCB.py');
$output = shell_exec($command);
//echo "*******";
//var_dump($output);
//echo '<br>';
//echo "*******";
//echo '<br>';

//var_dump(json_decode($output, true)); //testing and display all array

// Creating array
$arr = json_decode($output, true);

for($i = 0; $i < count($arr["value"]); ++$i) {
    $id = $arr["value"][$i]['name'];
    echo '<br>';
    echo "Cluset Name : ", $id;
    echo '<br>';
}

//echo "Cluster Name: "; 
//$id = $arr["value"][0]['name'];
//echo $id;

?>
